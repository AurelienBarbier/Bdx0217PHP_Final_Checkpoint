<?php

namespace Marmi\MarmiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeBook
 *
 * @ORM\Table(name="recipe_book")
 * @ORM\Entity(repositoryClass="Marmi\MarmiBundle\Repository\RecipeBookRepository")
 */
class RecipeBook
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
     * @ORM\Column(name="recipes", type="string", length=255)
     */
    private $recipes;


    /**
     * @ORM\OneToMany(targetEntity="RecipeBook", mappedBy="recipes")
     */
    private $recipe;

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
     * Set recipes
     *
     * @param string $recipes
     *
     * @return RecipeBook
     */
    public function setRecipes($recipes)
    {
        $this->recipes = $recipes;

        return $this;
    }

    /**
     * Get recipes
     *
     * @return string
     */
    public function getRecipes()
    {
        return $this->recipes;
    }
}

