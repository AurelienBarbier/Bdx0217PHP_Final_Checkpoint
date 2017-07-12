<?php

namespace Marmiwild\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateRecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
                'attr' => array('class' => 'form_control'),
            ))
            ->add('categorie', ChoiceType::class, array(
                'label' => 'Catégorie',
                'choices' => array(
                    'Entrée' => 'Entrée',
                    'Plat' => 'Plat',
                    'Dessert' => 'Dessert'),
                'attr' => array('class' => 'form_control'),

            ))
            ->add('nbPersonnes', IntegerType::class, array(
                'label' => 'Nombre de personnes',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('difficulte', IntegerType::class, array(
                'label' => 'Difficulté (notez de 1 à 5)',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('cout', IntegerType::class, array(
                'label' => 'Coût (notez de 1 à 5)',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('tempsPrepa', IntegerType::class, array(
                'label' => 'Temps de préparation (en minutes)',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('tempsCuisson', IntegerType::class, array(
                'label' => 'Temps de cuisson (en minutes)',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('etapes', TextareaType::class, array(
                'label' => 'Décrivez les étapes de préparation',
            ))
            ->add('image', FileType::class, array(
                'label' => 'Image d\'illustration',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('recettesIngredients', CollectionType::class, array(
                'entry_type' => Recette_IngredientType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'attr' => array('class' => 'form_control'),

            ))
            ->add('image', FileType::class, array(
                'label' => 'Image d\'illustration',
                'attr' => array('class' => 'form_control'),

            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Créer la Recette',

            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Marmiwild\CoreBundle\Entity\Recette'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'marmiwild_corebundle_recette';
    }


}
