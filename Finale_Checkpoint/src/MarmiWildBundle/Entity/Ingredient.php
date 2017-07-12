<?php

namespace MarmiWildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="MarmiWildBundle\Repository\IngredientRepository")
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @ORM\OneToMany(targetEntity="Rec_Ing", mappedBy="ingredient")
     */

    private $rec_ings;

    // /**
    //  * Many Ingredients have Many Recipes.
    //  * @ORM\ManyToMany(targetEntity="Recipe", mappedBy="ingredients")
    //  */
    // private $recipes;

    // public function __construct() {
    //     $this->recipes = new \Doctrine\Common\Collections\ArrayCollection();
    // }


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
     * Set name
     *
     * @param string $name
     *
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    // /**
    //  * Add recipe
    //  *
    //  * @param \MarmiWildBundle\Entity\Recipe $recipe
    //  *
    //  * @return Ingredient
    //  */
    // public function addRecipe(\MarmiWildBundle\Entity\Recipe $recipe)
    // {
    //     $this->recipes[] = $recipe;

    //     return $this;
    // }

    // *
    //  * Remove recipe
    //  *
    //  * @param \MarmiWildBundle\Entity\Recipe $recipe
     
    // public function removeRecipe(\MarmiWildBundle\Entity\Recipe $recipe)
    // {
    //     $this->recipes->removeElement($recipe);
    // }

    // /**
    //  * Get recipes
    //  *
    //  * @return \Doctrine\Common\Collections\Collection
    //  */
    // public function getRecipes()
    // {
    //     return $this->recipes;
    // }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recIng
     *
     * @param \MarmiWildBundle\Entity\Rec_Ing $recIng
     *
     * @return Recipe
     */
    public function addRecIng(\MarmiWildBundle\Entity\Rec_Ing $recIng)
    {
        $this->rec_ings[] = $recIng;

        return $this;
    }

    /**
     * Remove recIng
     *
     * @param \MarmiWildBundle\Entity\Rec_Ing $recIng
     */
    public function removeRecIng(\MarmiWildBundle\Entity\Rec_Ing $recIng)
    {
        $this->rec_ings->removeElement($recIng);
    }

    /**
     * Get recIngs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecIngs()
    {
        return $this->rec_ings;
    }
}
