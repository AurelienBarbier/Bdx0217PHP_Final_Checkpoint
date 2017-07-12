<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecetteRepository")
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
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Ingredient", inversedBy="recettes", cascade={"persist"})
     */
    private $ingredient;

    /**
     * @var string
     *
     * @ORM\Column(name="createur", type="string", length=255)
     */
    private $createur;

    /**
     * @var int
     *
     * @ORM\Column(name="cooking_time", type="integer", nullable=true)
     */
    private $cooking_time;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="difficulty", type="integer", nullable=true)
     */
    private $difficulty;

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
     * Set picture
     *
     * @param string $picture
     *
     * @return Recette
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recette
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set createur
     *
     * @param string $createur
     *
     * @return Recette
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return string
     */
    public function getCreateur()
    {
        return $this->ingredient;
    }

    /**
     * Set cooking_time
     *
     * @param integer $cooking_time
     *
     * @return Recette
     */
    public function setCooking_Time($cooking_time)
    {
        $this->cooking_time = $cooking_time;

        return $this;
    }

    /**
     * Get cooking_time
     *
     * @return int
     */
    public function getCooking_Time()
    {
        return $this->cooking_time;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Recette
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set difficulty
     *
     * @param integer $difficulty
     *
     * @return Recette
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
     * Constructor
     */
    public function __construct()
    {
        $this->ingredient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cookingTime
     *
     * @param integer $cookingTime
     *
     * @return Recette
     */
    public function setCookingTime($cookingTime)
    {
        $this->cooking_time = $cookingTime;

        return $this;
    }

    /**
     * Get cookingTime
     *
     * @return integer
     */
    public function getCookingTime()
    {
        return $this->cooking_time;
    }

    /**
     * Add ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return Recette
     */
    public function addIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredient[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredient->removeElement($ingredient);
    }
}
