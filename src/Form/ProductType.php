<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null,[
                'label'=>'Name*'
            ])
            ->add('price', null,[
                'label'=>'Price*'
            ])
            ->add('description',null,[
                'label'=>'Description*'
            ])
            ->add('imgProduct',FileType::class, [
                'mapped' => false,
                'required' => false,
                'help' => ' '
            ])
            ->add('alternativeText',null,[
                'label'=>'Alternative Text*'
            ])
            ->add('category',null,[
                'label' => 'Category*',
                'required' => true
            ])
    
            ->add('availability' , null , [
                'data' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
