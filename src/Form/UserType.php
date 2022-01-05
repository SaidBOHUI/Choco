<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
                'label' => 'Email adress',
                'required' => true
            ])
            ->add('password', RepeatedType::class,[
                'type' => PasswordType::class,
                'label' => 'Password',
                'first_options'  => [
                    'label' => 'Password',
                    'attr' => ['placeholder' => 'Password of 6 or more characters']
                ],
                'second_options' => [
                    'label' => 'Repeat Password',
                    'attr' => ['placeholder' => 'Password of 6 or more characters']
                ],
                'required' => true
            ])
            ->add('lastName',null,[
                'required' => true
            ])
            ->add('firstName',null,[
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
