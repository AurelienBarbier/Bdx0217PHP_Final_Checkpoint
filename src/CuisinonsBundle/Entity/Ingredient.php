<?php

namespace CuisinonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="CuisinonsBundle\Repository\IngredientRepository")
 *
 */
class Ingredient
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
     * @Assert\NotBlank()
     * @Assert\type("string")
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     * @Assert\NotBlank()
     * @Assert\type("integer")
     * @Assert\GreaterThan(0)
     *
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="Recette", inversedBy="ingredients")
     */
    private $recette;


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
     * @return Ingredient
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Ingredient
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set recette
     *
     * @param \CuisinonsBundle\Entity\Recette $recette
     *
     * @return Ingredient
     */
    public function setRecette(\CuisinonsBundle\Entity\Recette $recette = null)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return \CuisinonsBundle\Entity\Recette
     */
    public function getRecette()
    {
        return $this->recette;
    }
}
