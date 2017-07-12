<?php

namespace CuisinonsBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image', FileType::class, array(
                'label' => 'Image',
                'required' => false))
            ->add('nom', TextType::class, array('label' => 'Nom'))
            ->add('description', TextareaType::class, array('label' => 'Description'))
            ->add('temps', TimeType::class, array('label' => 'Temps'))
            ->add('difficulte', IntegerType::class, array('label' => 'Difficulté'))
            ->add('ingredients', CollectionType::class, array(
                'label' => ' ',
                'entry_type'   => IngredientType::class,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Valider'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CuisinonsBundle\Entity\Recette'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cuisinonsbundle_recette';
    }


}
