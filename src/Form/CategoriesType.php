<?php

namespace App\Form;

use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name' , null , [
                'label' => 'Name*'
            ])
            ->add('image', FileType::class, [
                'mapped' => false,
                'required' => false, 
                'label' => 'Image*',
                'help' => ' '
            ])
            ->add('alternativeText', TextType::class,[
                'required' => true,
                'help' => 'Image title',
                'label' => 'Alternative text*'
            ])
            ->add('banner', FileType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Background image*',
                'help' => ' ',
                'attr' => [
                    'placeholder' => 'Dimensions: 1920x530']
            ])
       
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
        ]);
    }
}
