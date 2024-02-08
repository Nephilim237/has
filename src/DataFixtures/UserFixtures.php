<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHashed;

    public function __construct(  UserPasswordHasherInterface $passwordHashed)
    {
        $this->passwordHashed = $passwordHashed;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setName('Admin')
            ->setFirstname('Admin')
            ->setEmail('admin@admin.com')
            ->setPassword($this->passwordHashed->hashPassword($user, '1234567890'))
            ->setRoles(["ROLE_ADMIN"])
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdateAt(new \DateTimeImmutable())
        ;

        $manager->persist($user);
        $manager->flush();
    }
}