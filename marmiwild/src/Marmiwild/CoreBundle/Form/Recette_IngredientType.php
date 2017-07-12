<?php

namespace Marmiwild\CoreBundle\Form;

use Marmiwild\CoreBundle\Entity\Ingredient;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Recette_IngredientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantite', TextType::class, array(
                'label' => 'Quantité',
            ))
            ->add('ingredient', EntityType::class, array(
                'class' => Ingredient::class,
                'choice_label' => 'nom',
                'multiple' => false,
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Marmiwild\CoreBundle\Entity\Recette_Ingredient'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'marmiwild_corebundle_recette_ingredient';
    }


}
