<?php

namespace App\EventListener;

use App\Entity\Devices;
use App\Repository\DevicesRepository;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class DeviceChangedListener
{
    public function postUpdate(Devices $device, LifecycleEventArgs $event)
    {
        $eventManager = $event->getObjectManager();

        if ($device->getCount() < 1) {
            $device->setActive(false);
            $eventManager->flush();
        } else {
            if (!$device->isActive()) {
                $device->setActive(true);
                $eventManager->flush();
            }
        }
    }
}