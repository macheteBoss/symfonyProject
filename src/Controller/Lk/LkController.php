<?php

namespace App\Controller\Lk;

use App\Controller\Controller;
use App\Entity\Orders;
use App\Entity\PromoCodes;
use App\Entity\User;
use App\Form\UserFormType;
use App\Form\WriteFormType;
use App\Redis\Coupon;
use App\Repository\OrdersRepository;
use App\Repository\StatusesRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class LkController extends Controller
{
    /**
     * @Route("/lk", name="lk")
     */
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('lk/index.html.twig', [
            'countOrders' => count($user->getOrders()),
            'countPromoCodes' => count($user->getPromoCodes()),
            'countReferrals' => count($user->getRefUsers())
        ]);
    }

    /**
     * @Route("/lk/profile", name="lk_profile")
     */
    public function profile(Request $request, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($password = $form->get('plainPassword')->getData()) {
                $user->setPassword(
                    $userPasswordHasherInterface->hashPassword(
                        $user,
                        $password
                    )
                );
            }
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', $this->getSettingValue('successUpdateUserProfile'));

            return $this->redirectToRoute('lk_profile');
        }

        return $this->render('lk/profile.html.twig', [
            'user' => $user,
            'editForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/lk/orders", name="lk_orders")
     */
    public function orders(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('lk/orders.html.twig', [
            'orders' => static::serializator($user->getOrders(), Orders::class),
        ]);
    }

    /**
     * @Route("/lk/orders/{id}", name="lk_order")
     */
    public function order($id): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$order = $this->getOne(Orders::class, ['id' => $id, 'user' => $user])) {
            return $this->redirectToRoute('lk_orders');
        }

        return $this->render('lk/orders.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/lk/orders/cancel/{id}", name="lk_cancelOrder")
     */
    public function cancelOrder(OrdersRepository $ordersRepository, StatusesRepository $statusesRepository, $id): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if (
            (!$order = $ordersRepository->findOneBy(['id' => $id, 'user' => $user]))
            && (!$order->getStatus() && $order->getStatus()->getCode() != 'accepted')
        ) {
            return $this->redirectToRoute('lk_orders');
        }

        $order->setStatus($statusesRepository->findOneBy(['code' => 'cancel']));

        $flash = $this->getSettingValue('canceledOrder');

        if ($promoCode = $order->getPromoCode()) {
            if (Coupon::get($user->getUsername(), $promoCode->getCode())) {
                $count = Coupon::getCount($user->getUsername(), $promoCode->getCode());
                Coupon::save($user->getUsername(), $promoCode->getCode(), $count + 1);
            } else {
                $user->addPromoCode($promoCode);
                Coupon::push($user->getUsername(), $promoCode->getCode());
            }
            $flash .= ' Промо-код возвращён пользователю';
        }
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('notification', $flash);

        return $this->redirectToRoute('lk_orders');
    }

    /**
     * @Route("/lk/promoCodes", name="lk_promoCodes")
     */
    public function promoCodes(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        $codes = static::serializator($user->getPromoCodes(), PromoCodes::class);
        foreach ($codes as $key => $code) {
            $codes[$key]['count'] = Coupon::getCount($user->getUsername(), $code['code']);
        }

        return $this->render('lk/promo_codes.html.twig', [
            'codes' => $codes,
        ]);
    }

    /**
     * Ajax запрос на данный метод применяет проко-код к заказу
     *
     * @Route("/lk/promoCodes/apply/{code}", name="lk_promoCodesApply")
     */
    public function apply(Request $request, $code): Response
    {
        if (!$request->isXmlHttpRequest()) {
            //Изменить потом на 404
            return $this->redirectToRoute('lk');
        }

        /** @var User $user */
        $user = $this->getUser();

        $result = [
            'result' => false,
            'message' => $this->getSettingValue('notExistPromoCodeUser')
        ];

        $promo = null;
        foreach ($user->getPromoCodes() as $promoCode) {
            if ($promoCode->getCode() == $code) {
                $promo = $promoCode;
                break;
            }
        }

        if ($promo) {
            $result = [
                'result' => true,
                'message' => $this->getSettingValue('successApplyPromoCodeUser'),
                'percent' => $promo->getPercent()
            ];
        }

        return new JsonResponse($result);
    }

    /**
     * @Route("/lk/referrals", name="lk_referrals")
     */
    public function referrals(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('lk/referrals.html.twig', [
            'users' => static::serializator($user->getRefUsers(), User::class),
        ]);
    }

    /**
     * @Route("/lk/write", name="lk_write")
     */
    public function write(Request $request, MailerInterface $mailer): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(WriteFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Если данные заполнены, отправляем обращение
            $mailTemplateUser = static::getMailTemplate('rburdilovskiy@gmail.com', 'Новое обращение', 'write', [
                'userId' => $user->getId(),
                'userPhone' => $user->getPhone(),
                'userEmail' => $user->getEmail(),
                'name' => $user->getName(),
                'theme' => $form->get('theme')->getData(),
                'message' => $form->get('message')->getData()
            ]);
            try {
                $mailer->send($mailTemplateUser);
            } catch (TransportExceptionInterface $e) {
                $this->addFlash('write_error', $e->getMessage());

                return $this->render('lk/write.html.twig');
            }

            $this->addFlash('write_success', $this->getSettingValue('successMailMessage'));
        }

        return $this->render('lk/write.html.twig', [
            'writeForm' => $form->createView()
        ]);
    }

    /**
     * Ajax запрос на получение заказов и рефералов по месяцам
     *
     * @Route("/lk/getOrdersAndReferralsByMonth", name="lk_getOrdersAndReferralsByMonth")
     */
    public function getOrdersAndReferralsByMonth(Request $request): Response
    {
        if (!$request->isXmlHttpRequest()) {
            //Изменить потом на 404
            return $this->redirectToRoute('lk');
        }

        /** @var User $user */
        $user = $this->getUser();

        //Отдаём заказы
        $orders = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0];
        foreach ($user->getOrders() as $order) {
            if ((int)date('Y', strtotime($order->getDateTime())) == (int)date('Y')) {
                $month = (int)date('m', strtotime($order->getDateTime()));
                $orders[$month] += 1;
            }
        }

        //Отдаём рефералов
        $referrals = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0];
        foreach ($user->getRefUsers() as $refUser) {
            if ((int)date('Y', strtotime($refUser->getDateTime())) == (int)date('Y')) {
                $month = (int)date('m', strtotime($refUser->getDateTime()));
                $referrals[$month] += 1;
            }
        }

        return new JsonResponse([
            'orders' => $orders,
            'referrals' => $referrals
        ]);
    }
}
