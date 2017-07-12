<?php

namespace Marmiwild\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Marmiwild\CoreBundle\Entity\Recette;

class LoadRecetteData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $newRecette1 = new Recette();
        $newRecette1
            ->setNom('Quiche Lorraine')
            ->setCategorie('Entree')
            ->setNbPersonnes(4)
            ->setFacilite(2)
            ->setCout(1)
            ->setTempsPrepa(30)
            ->setTempsCuisson(45)
            ->setEtapes("Préchauffer le four à 180°C (thermostat 6).
                Etaler la pâte dans un moule, la piquer à la fourchette.
                Faire rissoler les lardons à la poêle puis les répartir sur le fond de pâte.
                Parsemer de copeaux de beurre.
                Battre les oeufs, la crème fraîche et le lait. Assaisonner de sel, de poivre et de muscade. Verser sur la pâte.
                Cuire 45 à 50 min.")
            ->setDateCreation(new \DateTime())
        ;
        $this->addReference('recette1', $newRecette1);
        $manager->persist($newRecette1);

        $newRecette2 = new Recette();
        $newRecette2
            ->setNom('Soufflé au fromage')
            ->setCategorie('Plat')
            ->setNbPersonnes(6)
            ->setFacilite(2)
            ->setCout(2)
            ->setTempsPrepa(25)
            ->setTempsCuisson(120)
            ->setEtapes("Préchauffer le four à 180°C (thermostat 6). Beurrer le moule.
                Chauffer le beurre dans une casserole, ajouter la farine et remuer rapidement pendant 1 min. Ajouter le lait tiédi, remuer au fouet pendant quelques minutes à feu doux.
                Retirer la casserole du feu.
                Séparer les blancs et les battre fermement (avec une pincée de sel).
                Dans la casserole refroidie, ajouter les jaunes d'oeufs un à un, puis le fromage râpé. Mettre une pincée de muscade, poivrer. Saler peu car le fromage contient déjà du sel.
                Incorporer les blancs d'oeufs battus en mélangeant délicatement.
                Verser dans le moule, au maximum jusqu'à 4 cm du bord.
                Enfourner pendant 35 minutes en position chaleur tournante.")
            ->setDateCreation(new \DateTime())
        ;
        $this->addReference('recette2', $newRecette2);
        $manager->persist($newRecette2);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}