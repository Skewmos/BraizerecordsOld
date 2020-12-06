<?php

namespace App\DataFixtures;

use App\Entity\AdminUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new AdminUser();
        $user->setEmail("admin@gmail.com");
        $user->setPassword("test");
        $manager->persist($user);

        $manager->flush();
    }
}
