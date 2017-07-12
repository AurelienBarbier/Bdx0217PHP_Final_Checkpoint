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
     * @ORM\Column(name="cat�egorie", type="string", length=25, nullable=true)
     */
    private $cat�egorie;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersonnes", type="integer", nullable=true)
     */
    private $nbPersonnes;

    /**
     * @var int
     *
     * @ORM\Column(name="facilite", type="integer", nullable=true)
     */
    private $facilite;

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
     * @ORM\OneToMany(targetEntity="Recette_Ingredient", mappedBy="recette")
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
     * Set cat�egorie
     *
     * @param string $cat�egorie
     *
     * @return Recette
     */
    public function setCat�egorie($cat�egorie)
    {
        $this->cat�egorie = $cat�egorie;

        return $this;
    }

    /**
     * Get cat�egorie
     *
     * @return string
     */
    public function getCat�egorie()
    {
        return $this->cat�egorie;
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
     * Set facilite
     *
     * @param integer $facilite
     *
     * @return Recette
     */
    public function setFacilite($facilite)
    {
        $this->facilite = $facilite;

        return $this;
    }

    /**
     * Get facilite
     *
     * @return int
     */
    public function getFacilite()
    {
        return $this->facilite;
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
    public function addRecettesIngredient(\Marmiwild\CoreBundle\Entity\Recette_Ingredient $recettesIngredient)
    {
        $this->recettesIngredients[] = $recettesIngredient;

        return $this;
    }

    /**
     * Remove recettesIngredient
     *
     * @param \Marmiwild\CoreBundle\Entity\Recette_Ingredient $recettesIngredient
     */
    public function removeRecettesIngredient(\Marmiwild\CoreBundle\Entity\Recette_Ingredient $recettesIngredient)
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
}
