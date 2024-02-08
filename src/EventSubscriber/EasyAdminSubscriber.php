<?php
namespace App\EventSubscriber;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            BeforeEntityPersistedEvent::class => ['setCreatedAt'],
        ];
    }

    public function setCreatedAt(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (
            !$entity instanceof Post) {
            return;
        }

        $entity->setCreatedAt(new \DateTimeImmutable());
    }
}