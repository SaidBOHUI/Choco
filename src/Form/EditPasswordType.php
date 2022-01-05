<?php

namespace App\Form;

use App\Entity\EditPassword;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class EditPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', TextType::class,[
                'label' => 'Old password',
                'required' => true
            ])
            ->add('newPassword', RepeatedType::class,[
                'type' => PasswordType::class,
                'label' => 'New password',
                'first_options'  => [
                    'label' => 'Password',
                    'attr' => ['placeholder' => 'Password of 6 or more characters']
                ],
                'second_options' => [
                    'label' => 'Repeat new password',
                    'attr' => ['placeholder' => 'Password of 6 or more characters']
                ],
                'required' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EditPassword::class,
        ]);
    }
}
