<?php

namespace MarmiWildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="MarmiWildBundle\Repository\RecipeRepository")
 */
class Recipe
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPerson", type="integer")
     */
    private $nbPerson;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var int
     *
     * @ORM\Column(name="difficulty", type="integer")
     */
    private $difficulty;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;
    
    /**
     * @var string
     *
     * @ORM\Column(name="instruction", type="text")
     */
    private $instruction;


    /**
     * @ORM\OneToMany(targetEntity="Rec_Ing", mappedBy="recipe")
     */

    private $rec_ings;


    // *
    //  * Many Recipe have Many Ingredient.
    //  * @ORM\ManyToMany(targetEntity="Ingredient", inversedBy="recipes")
    //  * @JoinTable(name="recipes_ingredients")
     

    // private $ingredients;

    // public function __construct() {
    //     $this->ingredients = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Recipe
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Recipe
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nbPerson
     *
     * @param integer $nbPerson
     *
     * @return Recipe
     */
    public function setNbPerson($nbPerson)
    {
        $this->nbPerson = $nbPerson;

        return $this;
    }

    /**
     * Get nbPerson
     *
     * @return int
     */
    public function getNbPerson()
    {
        return $this->nbPerson;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Recipe
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set difficulty
     *
     * @param integer $difficulty
     *
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return int
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Recipe
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    // /**
    //  * Add ingredient
    //  *
    //  * @param \MarmiWildBundle\Entity\Ingredient $ingredient
    //  *
    //  * @return Recipe
    //  */
    // public function addIngredient(\MarmiWildBundle\Entity\Ingredient $ingredient)
    // {
    //     $this->ingredients[] = $ingredient;

    //     return $this;
    // }

    // *
    //  * Remove ingredient
    //  *
    //  * @param \MarmiWildBundle\Entity\Ingredient $ingredient
     
    // public function removeIngredient(\MarmiWildBundle\Entity\Ingredient $ingredient)
    // {
    //     $this->ingredients->removeElement($ingredient);
    // }

    // /**
    //  * Get ingredients
    //  *
    //  * @return \Doctrine\Common\Collections\Collection
    //  */
    // public function getIngredients()
    // {
    //     return $this->ingredients;
    // }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rec_ings = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set instruction
     *
     * @param string $instruction
     *
     * @return Recipe
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Get instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }
}
