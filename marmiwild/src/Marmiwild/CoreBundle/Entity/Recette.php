<?php

namespace Marmiwild\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="Marmiwild\CoreBundle\Repository\RecetteRepository")
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=25, nullable=true)
     */
    private $categorie;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersonnes", type="integer", nullable=true)
     */
    private $nbPersonnes;

    /**
     * @var int
     *
     * @ORM\Column(name="difficulte", type="integer", nullable=true)
     */
    private $difficulte;

    /**
     * @var int
     *
     * @ORM\Column(name="cout", type="integer", nullable=true)
     */
    private $cout;

    /**
     * @var int
     *
     * @ORM\Column(name="tempsPrepa", type="integer", nullable=true)
     */
    private $tempsPrepa;

    /**
     * @var int
     *
     * @ORM\Column(name="tempsCuisson", type="integer", nullable=true)
     */
    private $tempsCuisson;

    /**
     * @var string
     *
     * @ORM\Column(name="etapes", type="text")
     */
    private $etapes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="Recette_Ingredient", mappedBy="recette", cascade={"persist", "remove"})
     */
    private $recettesIngredients;

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
     * @return Recette
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Recette
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return Recette
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return int
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     *
     * @return Recette
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return int
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set tempsPrepa
     *
     * @param integer $tempsPrepa
     *
     * @return Recette
     */
    public function setTempsPrepa($tempsPrepa)
    {
        $this->tempsPrepa = $tempsPrepa;

        return $this;
    }

    /**
     * Get tempsPrepa
     *
     * @return int
     */
    public function getTempsPrepa()
    {
        return $this->tempsPrepa;
    }

    /**
     * Set tempsCuisson
     *
     * @param integer $tempsCuisson
     *
     * @return Recette
     */
    public function setTempsCuisson($tempsCuisson)
    {
        $this->tempsCuisson = $tempsCuisson;

        return $this;
    }

    /**
     * Get tempsCuisson
     *
     * @return int
     */
    public function getTempsCuisson()
    {
        return $this->tempsCuisson;
    }

    /**
     * Set etapes
     *
     * @param string $etapes
     *
     * @return Recette
     */
    public function setEtapes($etapes)
    {
        $this->etapes = $etapes;

        return $this;
    }

    /**
     * Get etapes
     *
     * @return string
     */
    public function getEtapes()
    {
        return $this->etapes;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Recette
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recettesIngredients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recettesIngredient
     *
     * @param \Marmiwild\CoreBundle\Entity\Recette_Ingredient $recettesIngredient
     *
     * @return Recette
     */
    public function addRecettesIngredient(Recette_Ingredient $recettesIngredient)
    {
        $this->recettesIngredients[] = $recettesIngredient;
        $recettesIngredient->setRecette($this);
        return $this;
    }

    /**
     * Remove recettesIngredient
     *
     * @param \Marmiwild\CoreBundle\Entity\Recette_Ingredient $recettesIngredient
     */
    public function removeRecettesIngredient(Recette_Ingredient $recettesIngredient)
    {
        $this->recettesIngredients->removeElement($recettesIngredient);
    }

    /**
     * Get recettesIngredients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecettesIngredients()
    {
        return $this->recettesIngredients;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Set difficulte
     *
     * @param integer $difficulte
     *
     * @return Recette
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return integer
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }
}
