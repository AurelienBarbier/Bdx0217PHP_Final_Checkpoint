<?php

namespace RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Recipes
 * @Vich\Uploadable
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
     * @ORM\OneToMany(targetEntity="Ingredients", mappedBy="Recipes")
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="recipe_image", fileNameProperty="image.name", size="image.size", mimeType="image.mimeType", originalName="image.originalName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Embedded(class="Vich\UploaderBundle\Entity\File")
     *
     * @var EmbeddedFile
     */
    private $image;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct()
    {
        $this->image = new EmbeddedFile();
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|UploadedFile $image
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param EmbeddedFile $image
     */
    public function setImage(EmbeddedFile $image)
    {
        $this->image = $image;
    }

    /**
     * @return EmbeddedFile
     */
    public function getImage()
    {
        return $this->image;
    }


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
     * @param \RecipesBundle\Entity\Ingredients $ingredients
     *
     * @return Recipes
     */
    public function setIngredients(\RecipesBundle\Entity\Ingredients $ingredients=null)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return \RecipesBundle\Entity\Recipes
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