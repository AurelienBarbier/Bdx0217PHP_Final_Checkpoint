<?php

namespace RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipes
 *
 * @ORM\Table(name="recipes")
 * @ORM\Entity(repositoryClass="RecipesBundle\Repository\RecipesRepository")
 */
class Recipes
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
     * @ORM\Column(name="Name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="WildChef", type="string", length=255)
     */
    private $wildChef;

    /**
     * @var string
     *
     * @ORM\Column(name="Instructions", type="text")
     */
    private $instructions;

    /**
     * @var string
     *
     * @ORM\Column(name="Ingredients", type="text")
     */
    private $ingredients;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PreparationTime", type="time")
     */
    private $preparationTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CookingTime", type="time")
     */
    private $cookingTime;

    /**
     * @var string
     *
     * @ORM\Column(name="Difficulty", type="string", length=255)
     */
    private $difficulty;

    /**
     * @var int
     *
     * @ORM\Column(name="FedNumber", type="integer")
     */
    private $fedNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantities", type="integer")
     */
    private $quantities;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="KeyWords", type="string", length=255)
     */
    private $keyWords;


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
     * @return Recipes
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
     * Set wildChef
     *
     * @param string $wildChef
     *
     * @return Recipes
     */
    public function setWildChef($wildChef)
    {
        $this->wildChef = $wildChef;

        return $this;
    }

    /**
     * Get wildChef
     *
     * @return string
     */
    public function getWildChef()
    {
        return $this->wildChef;
    }

    /**
     * Set instructions
     *
     * @param string $instructions
     *
     * @return Recipes
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return Recipes
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set preparationTime
     *
     * @param \DateTime $preparationTime
     *
     * @return Recipes
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * Get preparationTime
     *
     * @return \DateTime
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Set cookingTime
     *
     * @param \DateTime $cookingTime
     *
     * @return Recipes
     */
    public function setCookingTime($cookingTime)
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    /**
     * Get cookingTime
     *
     * @return \DateTime
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     * Set difficulty
     *
     * @param string $difficulty
     *
     * @return Recipes
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set fedNumber
     *
     * @param integer $fedNumber
     *
     * @return Recipes
     */
    public function setFedNumber($fedNumber)
    {
        $this->fedNumber = $fedNumber;

        return $this;
    }

    /**
     * Get fedNumber
     *
     * @return int
     */
    public function getFedNumber()
    {
        return $this->fedNumber;
    }

    /**
     * Set quantities
     *
     * @param integer $quantities
     *
     * @return Recipes
     */
    public function setQuantities($quantities)
    {
        $this->quantities = $quantities;

        return $this;
    }

    /**
     * Get quantities
     *
     * @return int
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Recipes
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
     * Set keyWords
     *
     * @param string $keyWords
     *
     * @return Recipes
     */
    public function setKeyWords($keyWords)
    {
        $this->keyWords = $keyWords;

        return $this;
    }

    /**
     * Get keyWords
     *
     * @return string
     */
    public function getKeyWords()
    {
        return $this->keyWords;
    }
}

