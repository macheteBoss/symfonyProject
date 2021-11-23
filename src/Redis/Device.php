<?php

namespace App\Redis;

use Predis;

class Device
{
    private static function getKey($id) {
        return 'device:' . $id;
    }

    /**
     * Возвращает кол-во определённой приставки
     *
     * @param $id
     */
    public static function get($id)
    {
        $redis = new Predis\Client();
        if ($key = self::getKey($id)) {
            if ($redis->exists($key)) {
                return $redis->get($key);
            }
        }

        return null;
    }

    /**
     * Сохраняет сериализованный класс в Redis
     *
     * @param $id
     * @param $count
     */
    public static function save($id, $count)
    {
        if ($key = self::getKey($id)) {
            $redis = new Predis\Client();

            $redis->set(
                $key,
                $count
            );
            $redis->persist($key);
        }
    }
}