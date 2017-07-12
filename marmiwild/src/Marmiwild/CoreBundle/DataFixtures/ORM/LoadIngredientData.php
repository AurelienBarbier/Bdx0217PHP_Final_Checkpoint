<?php

namespace Marmiwild\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Marmiwild\CoreBundle\Entity\Ingredient;

class LoadIngredientData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ingredients = array(
            'Oeuf', 'Farine', 'Sel', 'Sucre'
        );

        $count=0;
        foreach ($ingredients as $ingredient)
        {
            $count++;
            $newIngredient = new Ingredient();
            $newIngredient->setNom($ingredient);
            $this->addReference('ingredient'.$count, $newIngredient);
            $manager->persist($newIngredient);
            $manager->flush();
        }

    }

    public function getOrder()
    {
        return 1;
    }
}