<?php

namespace App\Controller;

use App\Entity\Block;
use App\Entity\Conditions;
use App\Entity\Equipment;
use App\Entity\Faq;
use App\Entity\MainSlider;
use App\Entity\Orders;
use App\Entity\Price;
use App\Entity\Product;
use App\Entity\User;
use App\Form\OrderFormType;
use App\Redis\Coupon;
use App\Repository\DevicesRepository;
use App\Repository\PromoCodesRepository;
use App\Repository\StatusesRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request, DevicesRepository $devicesRepository, StatusesRepository $statusesRepository, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasherInterface, PromoCodesRepository $promoCodesRepository, MailerInterface $mailer): Response
    {
        $user = null;
        if ($this->getUser()) {
            /** @var User $user */
            $user = $this->getUser();
        }

        $order = new Orders();
        $form = $this->createForm(OrderFormType::class, $order, $user ? ['user' => $user] : []);
        $form->handleRequest($request);

        $result = [
            'result' => false,
            'message' => ''
        ];

        if ($request->isXmlHttpRequest()) {
            if ($form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();

                $order->setDevice($devicesRepository->findOneBy(['id' => $form->get('device')->getData()]));
                $order->setStatus($statusesRepository->findOneBy(['code' => 'accepted']));
                $order->setDateTime(new \DateTime());

                if (
                    !$user
                    && $form->has('register_me')
                    && $form->get('register_me')
                    && $form->get('register_me')->getData()
                ) {
                    try {
                        $user = new User();
                        $user->setName($form->get('name')->getData());
                        $user->setPhone($form->get('phone')->getData());
                        $user->setDateTime(new \DateTime());

                        if (!$form->get('email')->getData()) {
                            throw new \InvalidArgumentException($this->getSettingValue('emptyEmailAtCreateOrder'));
                        }
                        if (!$userRepository->findOneBy(['email' => $form->get('email')->getData()])) {
                            $user->setEmail($form->get('email')->getData());
                        } else {
                            throw new \InvalidArgumentException($this->getSettingValue('existEmailAtCreateOrder'));
                        }

                        $bufUsername = explode("@", $form->get('email')->getData())[0];
                        if (!$userRepository->findOneBy(['username' => $bufUsername])) {
                            $user->setUsername($bufUsername);
                        } else {
                            $user->setUsername($bufUsername . '_' . $this->generateString());
                        }

                        $password = $this->generateString();
                        $user->setPassword(
                            $userPasswordHasherInterface->hashPassword(
                                $user,
                                $password
                            )
                        );

                        $entityManager->persist($user);
                        $entityManager->flush();

                        $mailTemplate = static::getMailTemplate($user->getEmail(), 'Регистрация', 'register', [
                            'name' => $user->getName(),
                            'login' => $user->getUsername(),
                            'password' => $password,
                        ]);
                        try {
                            $mailer->send($mailTemplate);
                        } catch (TransportExceptionInterface $e) {
                        }
                    } catch (\InvalidArgumentException $e) {
                        $result['message'] = $e->getMessage();
                    }
                }

                if (
                    $form->has('promo')
                    && $form->get('promo')
                    && $code = $form->get('promo')->getData()
                ) {
                    $promoCode = $promoCodesRepository->findOneBy(['code' => $code]);
                    $count = Coupon::getCount($user->getUsername(), $promoCode->getCode());
                    if ($count > 1) {
                        Coupon::save($user->getUsername(), $code, $count - 1);
                    } else {
                        $user->removePromoCode($promoCode);
                        Coupon::pull($user->getUsername(), $promoCode->getCode());
                    }

                    $order->setPromoCode($promoCode);
                }

                $order->setUser($user);

                if (!$result['message']) {
                    $entityManager->persist($order);
                    $entityManager->flush();

                    $device = $order->getDevice();
                    $device->setCount($device->getCount() - 1);
                    $entityManager->flush();

                    //Отправляем письмо пользователю
                    $mailTemplateUser = static::getMailTemplate($user->getEmail(), 'Новый заказ', 'order_user', $order->serializator());
                    try {
                        $mailer->send($mailTemplateUser);
                    } catch (TransportExceptionInterface $e) {
                    }
                    //Отправляем письмо админу
                    $mailTemplateAdmin = static::getMailTemplate('rburdilovskiy@atbdev.ru', 'Новый заказ', 'order_admin', $order->serializator());
                    try {
                        $mailer->send($mailTemplateAdmin);
                    } catch (TransportExceptionInterface $e) {
                    }

                    $result = [
                        'result' => true
                    ];
                }
            } else {
                $result['message'] = $this->getErrorMessages($form);
            }

            return new JsonResponse($result);
        }

        $returnData = $this->getAll(Block::class, [], [], true);
        foreach ($returnData as $key => $val) {
            $entity = $val['entity'];
            if ($entity['action'] == 'class') {
                $returnData[$key]['items'] = $this->getDataForClass($entity['name']) ?: null;
            } elseif ($entity['action'] == 'form') {
                if ($entity['name'] == 'orderForm') {
                    $returnData[$key]['form'] = $form->createView();
                }
            }
        }

        return $this->render('main/index.html.twig', [
            'blocks' => $returnData
        ]);
    }

    /**
     * Возвращает данные в зависимости от класса
     *
     * @return array|null
     */
    private function getDataForClass($name) {
        $data = null;
        switch($name) {
            case 'MainSlider':
                $data = $this->getAll(MainSlider::class, [], ['subsequence' => 'ASC'], true);
                break;
            case 'Equipment':
                $data = $this->getAll(Equipment::class, [], ['subsequence' => 'ASC'], true);
                break;
            case 'Product':
                $data = $this->getAll(Product::class, [], ['subsequence' => 'ASC'], true);
                break;
            case 'Faq':
                $data = $this->getAll(Faq::class, [], ['subsequence' => 'ASC'], true);
                break;
            case 'Price':
                $data = $this->getAll(Price::class, [], ['subsequence' => 'ASC'], true);
                break;
            case 'Conditions':
                $data = $this->getAll(Conditions::class, [], ['subsequence' => 'ASC'], true);
                break;
            default: break;
        }

        return $data;
    }

    /**
     * @Route("/test", name="test")
     */
    public function test() {
        $text = "MainSlider";


        return new Response($text);
    }
}
