<?php

namespace App\Form;

use App\Entity\Purchase;
use Symfony\Component\Mime\Email;
use Doctrine\DBAL\Types\ArrayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PurchaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', TextType::class,[
                'label' => 'Full Name'
            ])
            ->add('adress', TextareaType::class,[
                'label' => 'Full Adress'
                ])
            ->add('emirate', TextType::class,[
                'label' => 'Emirate'
            ])
            ->add('email', EmailType::class,[               
                'label' => 'Email adress'
            ])
            ->add('tel',TelType::class,[
                'label' => 'phone number'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Purchase::class,
        ]);
    }
}
