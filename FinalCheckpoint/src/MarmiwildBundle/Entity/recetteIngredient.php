<?php

namespace MarmiwildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * recetteIngredient
 *
 * @ORM\Table(name="recette_ingredient")
 * @ORM\Entity(repositoryClass="MarmiwildBundle\Repository\recetteIngredientRepository")
 */
class recetteIngredient
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
     * @ORM\ManyToOne(targetEntity="Recette", inversedBy="ingredients")
     */
    private $recettes;

    /**
     * @ORM\ManyToOne(targetEntity="Ingredient", inversedBy="recettes")
     */
    private $ingredients;


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
     * @return recetteIngredient
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
     * Set recettes
     *
     * @param \MarmiwildBundle\Entity\Recette $recettes
     *
     * @return recetteIngredient
     */
    public function setRecettes(\MarmiwildBundle\Entity\Recette $recettes = null)
    {
        $this->recettes = $recettes;

        return $this;
    }

    /**
     * Get recettes
     *
     * @return \MarmiwildBundle\Entity\Recette
     */
    public function getRecettes()
    {
        return $this->recettes;
    }

    /**
     * Set ingredients
     *
     * @param \MarmiwildBundle\Entity\Ingredients $ingredients
     *
     * @return recetteIngredient
     */
    public function setIngredients(\MarmiwildBundle\Entity\Ingredients $ingredients = null)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return \MarmiwildBundle\Entity\Ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
