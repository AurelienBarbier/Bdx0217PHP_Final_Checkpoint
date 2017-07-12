<?php

namespace MarmiwildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="MarmiwildBundle\Repository\IngredientRepository")
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="recetteIngredient", mappedBy="ingredients")
     */
    private $recettes;


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
     * Set recette
     *
     * @param \MarmiwildBundle\Entity\Recette $recette
     *
     * @return Ingredient
     */
    public function setRecette(\MarmiwildBundle\Entity\Recette $recette = null)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return \MarmiwildBundle\Entity\Recette
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * Set quantite
     *
     * @param \MarmiwildBundle\Entity\Quantite $quantite
     *
     * @return Ingredient
     */
    public function setQuantite(\MarmiwildBundle\Entity\Quantite $quantite = null)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return \MarmiwildBundle\Entity\Quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quantites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add quantite
     *
     * @param \MarmiwildBundle\Entity\Quantite $quantite
     *
     * @return Ingredient
     */
    public function addQuantite(\MarmiwildBundle\Entity\Quantite $quantite)
    {
        $this->quantites[] = $quantite;

        return $this;
    }

    /**
     * Remove quantite
     *
     * @param \MarmiwildBundle\Entity\Quantite $quantite
     */
    public function removeQuantite(\MarmiwildBundle\Entity\Quantite $quantite)
    {
        $this->quantites->removeElement($quantite);
    }

    /**
     * Get quantites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuantites()
    {
        return $this->quantites;
    }

    /**
     * Add recette
     *
     * @param \MarmiwildBundle\Entity\recetteIngredient $recette
     *
     * @return Ingredient
     */
    public function addRecette(\MarmiwildBundle\Entity\recetteIngredient $recette)
    {
        $this->recettes[] = $recette;

        return $this;
    }

    /**
     * Remove recette
     *
     * @param \MarmiwildBundle\Entity\recetteIngredient $recette
     */
    public function removeRecette(\MarmiwildBundle\Entity\recetteIngredient $recette)
    {
        $this->recettes->removeElement($recette);
    }

    /**
     * Get recettes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecettes()
    {
        return $this->recettes;
    }
}
