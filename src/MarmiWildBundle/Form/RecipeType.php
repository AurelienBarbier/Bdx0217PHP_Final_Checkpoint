<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 12/07/17
 * Time: 11:04
 */

namespace MarmiWildBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Name'))
            ->add('ingredients', TextType::class,
                array('label' => 'Ingredients'
                    ))
            ->add('quantity', IntegerType::class,
                array(
                'label' => 'Quantity',
                ))
            ->add('time', IntegerType::class, array('label' => 'Time'))
            ->add('steps', TextType::class, array('label' => 'Steps'))
            ->add('save', SubmitType::class, array('label' => 'Save'));
    }

}