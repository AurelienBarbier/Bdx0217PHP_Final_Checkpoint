<?php

namespace MarmiWildBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Request;


class RecipeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('nbPerson')
                ->add('duration')
                ->add('difficulty')
                ->add('type', ChoiceType::class, array(
                'choices'=>array('Plat'=>'Plat', 'Dessert'=>'Dessert'),
                'expanded'=>true, 'multiple'=>false))
                 ->add('picture')
                // ->add('ingredient',    EntityType::class, array(
                // 'class' => 'WCSGotBundle:Royaume',
                // 'choice_label' => 'ingredient',
                // ))
                ->add('valider', SubmitType::class);

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MarmiWildBundle\Entity\Recipe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'marmiwildbundle_recipe';
    }


}
