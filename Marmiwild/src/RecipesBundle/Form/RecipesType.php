<?php

namespace RecipesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('wildChef')
            ->add('instructions')
            ->add('ingredients')
            ->add('preparationTime')
            ->add('cookingTime')
            ->add('difficulty')
            ->add('fedNumber')
            ->add('quantities')
            ->add('type')
            ->add('keyWords')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecipesBundle\Entity\Recipes'
        ));
    }
}
