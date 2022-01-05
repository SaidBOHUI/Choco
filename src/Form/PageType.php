<?php

namespace App\Form;

use App\Entity\Page;
use App\Form\ArticleType;
use App\Form\TextArticleType;
use App\Repository\PageRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, [
                'attr' => [
                    'placeholder' => '60 characters maximum'
                ]

            ])
            ->add('heading')
            ->add('metadescription', null, [
                'attr' => [
                    'placeholder' => '160 characters maximum'
                ]
            ])
            ->add('location', ChoiceType::class,[
                'choices'=>[
                    'Top'=>'Top',
                    'Bottom'=>'Bottom'
                ],
                'required' => false,
            ])
            ->add('actionTitle', null, [
                'label' => 'Title',
                'required' => false
            ])
            ->add('actionName', null, [
                'label' => 'Subtitle',
                'required' => false

            ])
            ->add('actionLabel', null, [
                'label' => 'Button title',
                'required' => false

                ])
            ->add('linkPage', EntityType::class, [
                'class' => Page::class,
                'choice_label' => 'slug',
                'label' => 'Select page link',
                'required' => false

            ])
            ->add('article', CollectionType::class,[
                'entry_type' => ArticleType::class,
                'allow_add' => true,
                'by_reference' => false,
                'required' => false,
                'allow_delete' => true,
                'prototype' => true,
                'label' => 'Add content'
            ])
            ->add('textArticles', CollectionType::class,[
                'entry_type' => TextArticleType::class,
                'allow_add' => true,
                'by_reference' => false,
                'required' => false,
                'allow_delete' => true,
                'prototype' => true,
                'label' => 'Add content'
            ])

            ->add('save', SubmitType::class, [
                'label' => 'Validate',
                'attr' => ['class'=>'btn btn-val']
                
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
        ]);
    }
}