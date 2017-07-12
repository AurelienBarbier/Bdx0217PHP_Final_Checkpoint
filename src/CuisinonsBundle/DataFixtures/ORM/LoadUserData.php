<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 12/07/17
 * Time: 10:03
 */

namespace CuisinonsBundle\DataFixtures\ORM;

use CuisinonsBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@cuisinons.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($userAdmin, 'test');
        $userAdmin->setPassword($password);

        $manager->persist($userAdmin);
        $manager->flush();
    }
}