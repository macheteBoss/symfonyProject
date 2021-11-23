<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasherInterface, UserRepository $userRepository, MailerInterface $mailer): Response
    {
        $parentUser = null;
        if (
            $request->query->has('refToken')
            && $parentToken = $request->query->get('refToken')
        ) {
            if (!$parentUser = $userRepository->findOneBy(['refToken' => $parentToken])) {
                $this->addFlash('register_error', $this->getSettingValue('notExistReferralLink'));
            }
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordHasherInterface->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $user->setDateTime(new \DateTime());
            $user->setRefToken($this->generateString(8));
            $user->setParentUser($parentUser);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $mailTemplate = static::getMailTemplate($user->getEmail(), 'Регистрация', 'register', [
                'name' => $user->getName(),
                'login' => $user->getUsername(),
                'password' => $form->get('plainPassword')->getData(),
            ]);
            try {
                $mailer->send($mailTemplate);
            } catch (TransportExceptionInterface $e) {
            }

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
