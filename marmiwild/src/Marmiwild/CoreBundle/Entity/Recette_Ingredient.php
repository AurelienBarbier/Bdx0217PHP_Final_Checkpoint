<?php

namespace Marmiwild\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette_Ingredient
 *
 * @ORM\Table(name="recette__ingredient")
 * @ORM\Entity(repositoryClass="Marmiwild\CoreBundle\Repository\Recette_IngredientRepository")
 */
class Recette_Ingredient
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
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="Recette", inversedBy="recettesIngredients")
     */
    private $recette;

    /**
     * @ORM\ManyToOne(targetEntity="Ingredient", inversedBy="ingredientsRecettes")
     */
    private $ingredient;

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
     * Set quantite
     *
     * @param string $quantite
     *
     * @return Recette_Ingredient
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set Recette
     *
     * @param \Marmiwild\CoreBundle\Entity\Recette $recette
     *
     * @return Recette_Ingredient
     */
    public function setRecette(\Marmiwild\CoreBundle\Entity\Recette $recette = null)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get Recette
     *
     * @return \Marmiwild\CoreBundle\Entity\Recette
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * Set ingredient
     *
     * @param \Marmiwild\CoreBundle\Entity\Ingredient $ingredient
     *
     * @return Recette_Ingredient
     */
    public function setIngredient(\Marmiwild\CoreBundle\Entity\Ingredient $ingredient = null)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \Marmiwild\CoreBundle\Entity\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
