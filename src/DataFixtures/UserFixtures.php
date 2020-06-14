<?php

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @property  faker
 */
class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i=0; $i < 2; $i++) {

            $user = new User();
            $user->setEmail(sprintf('admin%d@email.fr', $i));
            $user->setFirstName($faker->firstName);
            $user->setLastName($faker->lastName);
            $user->setTwitterUsername($faker->userName);
            $user->setRoles(['ROLE_ADMIN']);
            $user->setPassword($this->passwordEncoder->encodePassword($user,'engage'));

            $manager->persist($user);

        }
        $manager->flush();
    }
}
