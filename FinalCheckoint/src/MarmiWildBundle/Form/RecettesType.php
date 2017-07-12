<?php

namespace MarmiWildBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RecettesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Nom du plat'
                )))
            ->add('ingredients', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Ingrédients'
                )))
            ->add('type', ChoiceType::class, array(
                'choices' => array( 'Apéritif' => 'aperitif', 'Entrée' => 'entrée', 'Plat' => 'plat', 'Dessert' => 'dessert','Boisson' => 'boisson'),
                'placeholder' => 'Type',
            ))
            ->add('preparation', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Préparation'
                )))
            ->add('brochure', FileType::class, array(
                'required' => false,
            ))
            ->add('ajouter', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MarmiWildBundle\Entity\Recettes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'marmiwildbundle_recettes';
    }


}
