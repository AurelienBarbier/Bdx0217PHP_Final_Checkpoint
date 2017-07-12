<?php

namespace Marmiwild\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="Marmiwild\CoreBundle\Repository\IngredientRepository")
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
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="Recette_Ingredient", mappedBy="ingredient")
     */
    private $ingredientsRecettes;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Ingredient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredientsRecettes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ingredientsRecette
     *
     * @param \Marmiwild\CoreBundle\Entity\Recette_Ingredient $ingredientsRecette
     *
     * @return Ingredient
     */
    public function addIngredientsRecette(\Marmiwild\CoreBundle\Entity\Recette_Ingredient $ingredientsRecette)
    {
        $this->ingredientsRecettes[] = $ingredientsRecette;

        return $this;
    }

    /**
     * Remove ingredientsRecette
     *
     * @param \Marmiwild\CoreBundle\Entity\Recette_Ingredient $ingredientsRecette
     */
    public function removeIngredientsRecette(\Marmiwild\CoreBundle\Entity\Recette_Ingredient $ingredientsRecette)
    {
        $this->ingredientsRecettes->removeElement($ingredientsRecette);
    }

    /**
     * Get ingredientsRecettes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredientsRecettes()
    {
        return $this->ingredientsRecettes;
    }
}
