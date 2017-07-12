<?php

namespace RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="RecipesBundle\Repository\IngredientsRepository")
 */
class Ingredients
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
     * @ORM\ManyToMany(targetEntity="Recipes", inversedBy="ingredients")
     */
    private $recipes;


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
     * @return Ingredients
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
     * Set recipe
     *
     * @param \RecipesBundle\Entity\Recipes $recipes
     *
     * @return Ingredients
     */
    public function setRecipes(\RecipesBundle\Entity\Recipes $recipes = null)
    {
        $this->recipes = $recipes;

        return $this;
    }
    public function __construct()
    {
        $this->ingredients = new ArrayCollection();}
    /**
     * Get recipes
     *
     * @return \RecipesBundle\Entity\Recipes
     */
    public function getRecipes()
    {
        return $this->recipes;
    }
}
