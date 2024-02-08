<?php

namespace App\EntityListener;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

#[AsEntityListener(event: Events::prePersist, entity: Post::class)]
class PostEntityListener
{
    public function __construct(private readonly SluggerInterface $slugger)
    {

    }

    public function prePersist(Post $post, LifecycleEventArgs $args)
    {
        $post->computeSlug($this->slugger);
    }

}