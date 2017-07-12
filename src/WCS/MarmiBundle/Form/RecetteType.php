<?php

namespace WCS\MarmiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('description')
            ->add('nbPersonne', IntegerType::class, array('label' => "Nombre de personne"));
        $builder->add('ingredients', CollectionType::class, array(
            // each entry in the array will be an "email" field
            'entry_type'   => IngredientType::class,
            // these options are passed to each "email" type
            'entry_options'  => array(
                'attr'      => array('class' => 'email-box')
            ),
            'allow_add'    => true,
            "label" => " "
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WCS\MarmiBundle\Entity\Recette'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wcs_marmibundle_recette';
    }


}
