<?php

namespace MarmiWildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rec_Ing
 *
 * @ORM\Table(name="rec__ing")
 * @ORM\Entity(repositoryClass="MarmiWildBundle\Repository\Rec_IngRepository")
 */
class Rec_Ing
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;


    /**
     * @ORM\ManyToOne(targetEntity="Recipe", inversedBy="rec_ings")
     */

    private $recipe;


    /**
     * @ORM\ManyToOne(targetEntity="Ingredient", inversedBy="rec_ings")
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Rec_Ing
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set recipe
     *
     * @param \MarmiWildBundle\Entity\Recipe $recipe
     *
     * @return Rec_Ing
     */
    public function setRecipe(\MarmiWildBundle\Entity\Recipe $recipe = null)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe
     *
     * @return \MarmiWildBundle\Entity\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Set ingredient
     *
     * @param \MarmiWildBundle\Entity\Ingredient $ingredient
     *
     * @return Rec_Ing
     */
    public function setIngredient(\MarmiWildBundle\Entity\Ingredient $ingredient = null)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \MarmiWildBundle\Entity\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
