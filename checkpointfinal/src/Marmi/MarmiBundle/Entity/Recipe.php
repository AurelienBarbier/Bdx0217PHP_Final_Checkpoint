<?php

namespace Marmi\MarmiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="Marmi\MarmiBundle\Repository\RecipeRepository")
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
     * @var int
     *
     * @ORM\Column(name="time", type="integer")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPerson", type="integer")
     */
    private $nbPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredients", type="string", length=99999)
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="prepare", type="string", length=99999)
     */
    private $prepare;

    /**
     * @ORM\ManyToOne(targetEntity="RecipeBook", inversedBy="recipes")
     */
    private $RecipeBook;

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
     * Set time
     *
     * @param integer $time
     *
     * @return Recipe
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return Recipe
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
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
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return Recipe
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
     * Set prepare
     *
     * @param string $prepare
     *
     * @return Recipe
     */
    public function setPrepare($prepare)
    {
        $this->prepare = $prepare;

        return $this;
    }

    /**
     * Get prepare
     *
     * @return string
     */
    public function getPrepare()
    {
        return $this->prepare;
    }
}

