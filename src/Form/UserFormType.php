<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Введите имя',
                    ]),
                ],
                'label' => 'Имя'
            ])
            ->add('email', EmailType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Введите ваш Email',
                    ]),
                ],
                'label' => 'Email'
            ])
            ->add('phone', TextType::class, [
                'mapped' => true,
                'attr' => ['autocomplete' => 'phone', 'class' => 'form-control maskPhone', 'required' => false],
                'label' => 'Телефон',
                'required' => false
            ])
            ->add('username', TextType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control', 'readonly' => true],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Введите логин',
                    ]),
                ],
                'label' => 'Логин'
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'attr' => ['autocomplete' => 'off', 'class' => 'form-control'],
                    'constraints' => [
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Ваш пароль должен содержать не менее {{limit}} символов.',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096,
                        ]),
                    ],
                    'label' => 'Новый пароль',
                ],
                'second_options' => [
                    'attr' => ['autocomplete' => 'off', 'class' => 'form-control'],
                    'label' => 'Повторите пароль',
                ],
                'invalid_message' => 'Пароли должны совпадать.',
                'mapped' => false,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}