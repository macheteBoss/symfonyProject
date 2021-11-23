<?php

namespace App\Redis;

use Predis;

class Coupon
{
    private static function getKey($userName) {
        return 'user:' . $userName . ':coupons:';
    }

    /**
     * Добавляет промо-код определённому пользователю
     *
     * @param $userName
     * @param $promoCode
     */
    public static function push($userName, $promoCode, $count = 1)
    {
        $redis = new Predis\Client();
        $redis->sAdd(
            self::getKey($userName),
            $promoCode . '|' . $count
        );
    }

    /**
     * Удаляет промо-код определённому пользователю
     *
     * @param $userName
     * @param $promoCode
     */
    public static function pull($userName, $promoCode)
    {
        $redis = new Predis\Client();
        if ($member = self::get($userName, $promoCode)) {
            $redis->sRem(
                self::getKey($userName),
                $member
            );
        }
    }

    /**
     * Получает все промо-коды пользователя
     *
     * @param $userName
     * @return array|null
     */
    public static function getAll($userName)
    {
        $redis = new Predis\Client();
        $key = self::getKey($userName);
        if ($redis->exists($key)) {
            return $redis->sMembers($key);
        }

        return null;
    }

    /**
     * Получает промо-код пользователя
     *
     * @param $userName
     * @param $promoCode
     * @return string|null
     */
    public static function get($userName, $promoCode)
    {
        $promo = null;
        if ($members = self::getAll($userName)) {
            foreach ($members as $member) {
                if (strripos($member, $promoCode) !== false) {
                    $promo = $member;
                    break;
                }
            }
        }

        return $promo;
    }

    /**
     * Получает количество определённого промо-кода пользователя
     *
     * @param $userName
     * @return int|null
     */
    public static function getCount($userName, $promoCode)
    {
        $code = self::get($userName, $promoCode);

        if ($code) {
            $pos = strripos($code, '|');
            return (int)substr($code, $pos + 1);
        }

        return null;
    }

    /**
     * Обновление промо-кода пользователя
     *
     * @param $userName
     * @param $promoCode
     * @param $count
     */
    public static function save($userName, $promoCode, $count)
    {
        if (self::get($userName, $promoCode)) {
            self::pull($userName, $promoCode);
            self::push($userName, $promoCode, $count);
        }
    }

    /**
     * Удаляет из Redis запись по Логину пользователя
     *
     * @param $userName
     */
    public static function del($userName)
    {
        $redis = new Predis\Client();
        if ($key = self::getKey($userName)) {
            $redis->del($key);
        }
    }
}