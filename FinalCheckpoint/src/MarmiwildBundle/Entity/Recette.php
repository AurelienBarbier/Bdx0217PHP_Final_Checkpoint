<?php

namespace MarmiwildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="MarmiwildBundle\Repository\RecetteRepository")
 */
class Recette
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient", type="string", length=255)
     */
    private $ingredient;

    /**
     * @var string
     *
     * @ORM\Column(name="temps", type="string", length=255)
     */
    private $temps;

    /**
     * @var string
     *
     * @ORM\Column(name="personne", type="string", length=255)
     */
    private $personne;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Recette
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set ingredient
     *
     * @param string $ingredient
     *
     * @return Recette
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return string
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Set temps
     *
     * @param string $temps
     *
     * @return Recette
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return string
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set personne
     *
     * @param string $personne
     *
     * @return Recette
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return string
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
