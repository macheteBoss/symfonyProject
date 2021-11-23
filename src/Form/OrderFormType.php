<?php

namespace App\Form;

use App\Entity\Devices;
use App\Entity\Orders;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class OrderFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = null;
        if($options['user']) {
            $user = $options['user'];
        }
        $builder
            ->add('name', TextType::class, [
                'mapped' => true,
                'attr' => [
                    'class' => 'form-control',
                    'value' => $user ? $user->getName() : '',
                    'readonly' => $user ? true : false,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Введите телефон',
                    ]),
                ],
                'label' => 'Ваше имя'
            ])
            ->add('phone', TextType::class, [
                'mapped' => true,
                'attr' => [
                    'class' => 'form-control maskPhone',
                    'value' => ($user && $user->getPhone()) ? $user->getPhone() : '',
                    'readonly' => ($user && $user->getPhone()) ? true : false,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Введите телефон',
                    ]),
                ],
                'label' => 'Телефон'
            ])
            ->add('email', EmailType::class, [
                'mapped' => true,
                'attr' => [
                    'class' => 'form-control',
                    'value' => $user ? $user->getEmail() : '',
                    'readonly' => $user ? true : false,
                ],
                'label' => 'Email',
                'required' => false
            ])
            ->add('device', EntityType::class, [
                'class' => Devices::class,
                'attr' => ['class' => 'form-control'],
                'label' => 'Выберите девайс',
                'choice_label' => 'name',
                'choice_attr' => ChoiceList::attr($this, function (?Devices $device) {
                    return $device ? ['data-price' => $device->getPrice()] : [];
                }),
                'choice_filter' => 'isActive',
            ])
            ->add('countJoystick', IntegerType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control', 'min' => 0, 'max' => 4, 'value' => 1, 'data-price' => 7],
                'label' => 'Количество джойстиков'
            ])
            ->add('days', IntegerType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control', 'min' => 1, 'max' => 7, 'value' => 1],
                'label' => 'Количество дней аренды'
            ])
            ->add('address', TextType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Введите адрес доставки',
                    ]),
                ],
                'label' => 'Адрес доставки'
            ])
            ->add('comment', TextareaType::class, [
                'mapped' => true,
                'attr' => ['class' => 'form-control', 'rows' => 3],
                'label' => 'Комментарий',
                'required' => false
            ])
            ->add('price', HiddenType::class, [
                'mapped' => true,
            ])
        ;
        if (!$user) {
            $builder->add('register_me', CheckboxType::class, [
                'mapped' => false,
                'attr' => ['class' => 'form-check-input'],
                'label' => 'Зарегистрировать меня?',
                'required' => false
            ]);
        } else {
            $builder
                ->add('promoCode', TextType::class, [
                    'mapped' => false,
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Введите промо-код (если есть)',
                    'required' => false
                ])
                ->add('promo', HiddenType::class, [
                    'mapped' => false,
                    'attr' => ['value' => '']
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Orders::class,
            'user' => false,
        ]);
    }
}