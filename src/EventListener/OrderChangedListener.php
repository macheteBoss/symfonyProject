<?php

namespace App\EventListener;

use App\Entity\Devices;
use App\Entity\Orders;
use App\Entity\PromoCodes;
use App\Entity\Statuses;
use App\Redis\Coupon;
use App\Redis\Device;
use App\Repository\DevicesRepository;
use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class OrderChangedListener
{
    private $needFlush = false;

    public function postUpdate(Orders $order, LifecycleEventArgs $event)
    {
        $eventManager = $event->getObjectManager();

        if ($user = $order->getUser()) {

            $completedStatus = $eventManager->getRepository(Statuses::class)->findOneBy(['code' => 'completed']);
            $completedOrdersUser = $eventManager->getRepository(Orders::class)->findBy(['user' => $user, 'status' => $completedStatus]);

            /** @var PromoCodes $promoCodeNextOrder */
            $promoCodeNextOrder = $eventManager->getRepository(PromoCodes::class)->findOneBy(['description' => 'Скидка на следующий заказ']);
            /** @var PromoCodes $promoCodeReferral */
            $promoCodeReferral = $eventManager->getRepository(PromoCodes::class)->findOneBy(['description' => 'Скидка за реферала']);
            /** @var PromoCodes $promoCodeNextReferral */
            $promoCodeNextReferral = $eventManager->getRepository(PromoCodes::class)->findOneBy(['description' => 'Скидка за реферала 2-го уровня']);

            if ($order->getStatus()->getCode() == 'completed') {
                if (count($completedOrdersUser) == 1) {
                    Coupon::push($user->getUsername(), $promoCodeNextOrder->getCode());
                    $user->addPromoCode($promoCodeNextOrder);

                    $eventManager->flush();
                }
                if ($parent = $user->getParentUser()) {
                    $this->setPromoCodeReferral($parent, $promoCodeReferral, $eventManager);
                    if ($parentNext = $parent->getParentUser()) {
                        $this->setPromoCodeReferral($parentNext, $promoCodeNextReferral, $eventManager);
                    }
                }
            }
            if (in_array($order->getStatus()->getCode(), [
                'completed',
                'cancel'
            ])) {
                $device = $order->getDevice();
                $device->setCount($device->getCount() + 1);
                $eventManager->flush();
            }
        }
    }

    private function setPromoCodeReferral($user, $promoCode, $eventManager) {
        if (Coupon::get($user->getUsername(), $promoCode->getCode())) {
            $count = Coupon::getCount($user->getUsername(), $promoCode->getCode());
            Coupon::save($user->getUsername(), $promoCode->getCode(), $count + 1);
        } else {
            $user->addPromoCode($promoCode);
            Coupon::push($user->getUsername(), $promoCode->getCode());

            $eventManager->flush();
        }
    }
}