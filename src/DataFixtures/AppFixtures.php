<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
      
        for ($i=0; $i<1; $i++) { 
            $user = new User();
            $user->setEmail('benoit_caucheteux@hotmail.com')
                ->setRoles(['ROLE_ADMIN']) 
             ;


             $hashPassword = $this->hasher->hashPassword(
                $user, 'Aucalme0210@'
             );

             $user->setPassword($hashPassword);

            $manager->persist($user);
           
        }

       $manager->flush();
    }
}
