<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\PromoCodes;
use App\Entity\Settings;
use App\Entity\User;
use Cassandra\Set;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class Controller extends AbstractController
{
    /**
     * Возвращает группу для сериализации
     *
     * @return string|null
     */
    private static function getGroup($class) {
        $group = null;
        switch ($class) {
            case Orders::class:
                $group = 'order';
                break;
            case PromoCodes::class:
                $group = 'promoCode';
                break;
            case User::class:
                $group = 'referral';
                break;
            case Settings::class:
                $group = 'settings';
                break;
            default: break;
        }

        return $group;
    }

    /**
     * Сериализует объект в массив
     *
     * @return array
     */
    protected static function serializator($rows, $class = null) {
        $encoder = new JsonEncoder();
        $defaultContext = [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object, $format, $context) {
                return $object->getId();
            },
        ];
        $normalizer = new ObjectNormalizer(new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader())), null, null, null, null, null, $defaultContext);

        $group = [];
        if (static::getGroup($class)) {
            $group = [static::getGroup($class)];
        }
        $serializer = new Serializer([$normalizer], [$encoder]);
        $data = $serializer->serialize($rows, 'json', ['groups' => $group]);

        return json_decode($data, true);
    }

    /**
     * Получение элементов класса
     *
     * @return array|null
     */
    protected function getAll($class, $filter = [], $order = [], $active = null) {
        if ($active != null) {
            $filter['active'] = $active;
        }

        $rows = $this->getDoctrine()
            ->getRepository($class)
            ->findBy(
                $filter,
                $order
            );

        if (!$rows) {
            return null;
        }

        return static::serializator($rows, $class);
    }

    /**
     * Получение одного элемента класса
     *
     * @return array|null
     */
    protected function getOne($class, $search) {
        if (!$search || !is_array($search)) {
            return null;
        }
        $row = $this->getDoctrine()
            ->getRepository($class)
            ->findOneBy($search);

        if (!$row) {
            return null;
        }

        return static::serializator($row, $class);
    }

    /**
     * Генерация случайной строки
     *
     * @return string
     */
    protected function generateString($length = 6) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }

    /**
     * Возвращает ошибки формы
     *
     * @return string
     */
    protected function getErrorMessages(\Symfony\Component\Form\FormInterface $form) {
        $errors = [];
        foreach ($form->getErrors(true, true) as $error) {
            $errors[] = $error->getMessage();
        }

        return implode('\n', $errors);
    }

    /**
     * Отдаёт шаблон письма для последующей отправки
     *
     * @return TemplatedEmail
     */
    protected static function getMailTemplate($mailTo, $theme, $template, $context) {
        return (new TemplatedEmail())
            ->from(new Address('info@arendapsvtb.by', 'ArendaPsVTB'))
            ->to($mailTo)
            ->subject($theme)
            ->htmlTemplate('mail/' . $template . '.html.twig')
            ->context($context)
            ;
    }

    protected function getSettingValue($code) {
        if ($setting = $this->getOne(Settings::class, ['code' => $code])) {
            return $setting['value'];
        }

        return null;
    }
}