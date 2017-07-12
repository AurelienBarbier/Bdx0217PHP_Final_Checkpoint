<?php

namespace Marmiwild\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Marmiwild\CoreBundle\Entity\Recette_Ingredient;

class LoadRecette_ingredientData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $newRecetteIngredient1 = new Recette_Ingredient();
        $newRecetteIngredient1
            ->setIngredient($this->getReference('ingredient1'))
            ->setRecette($this->getReference('recette1'))
            ->setQuantite(2)
        ;
        $manager->persist($newRecetteIngredient1);

        $newRecetteIngredient2 = new Recette_Ingredient();
        $newRecetteIngredient2
            ->setIngredient($this->getReference('ingredient2'))
            ->setRecette($this->getReference('recette1'))
            ->setQuantite(1)
        ;
        $manager->persist($newRecetteIngredient2);

        $newRecetteIngredient3 = new Recette_Ingredient();
        $newRecetteIngredient3
            ->setIngredient($this->getReference('ingredient3'))
            ->setRecette($this->getReference('recette2'))
            ->setQuantite(6)
        ;
        $manager->persist($newRecetteIngredient3);

        $newRecetteIngredient4 = new Recette_Ingredient();
        $newRecetteIngredient4
            ->setIngredient($this->getReference('ingredient4'))
            ->setRecette($this->getReference('recette2'))
            ->setQuantite(3)
        ;
        $manager->persist($newRecetteIngredient4);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}