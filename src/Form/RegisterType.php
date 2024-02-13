<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname',TextType::class,['label'=>'votre prenom','attr'=>['placeholder'=>'merci de saisire votre prenom']])
             ->add('lastname',TextType::class,['label'=>'votre nom','attr'=>['placeholder'=>'merci de saisire votre nom']])
            ->add('email',EmailType::class,['label'=>'votre Email ','attr'=>['placeholder'=>'merci de saisire votre Email']])
            ->add('telephone',TextType::class,['label'=>'votre telephone','attr'=>['placeholder'=>'merci de saisire votre telephone']])
            ->add('password',PasswordType::class,['label'=>'votre mot de passe','attr'=>['placeholder'=>'merci de saisire votre mot de passe']])
            ->add('password_confirmation',PasswordType::class,['label'=>'confirmer votre mot de passe',
            'mapped'=>false
            ,'attr'=>['placeholder'=>'merci de confirmer votre mot de passe']])
            ->add('submit',SubmitType::class,['label'=>'s"inscrire'])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
