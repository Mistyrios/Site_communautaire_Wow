<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserTypeEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',NULL, [
                'label' => 'Email :',
                'attr' => ['class' => 'espaceCustom', 'placeholder' => 'Merci de rentrer une adresse email' ],
            ])
            ->add('userID',NULL, [
                'label' => 'Pseudo :',
                'attr' => ['class' => ' espaceCustom', 'placeholder' => 'Merci de rentrer un pseudo' ],
            ])
            ->add('roles', ChoiceType::class,[
                'choices' => [
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                    'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN',
                ],
                'label' => 'Rôles de l\'utilisateur :',
                'expanded' => true,
                'multiple' => true,
                'attr' => ['class' => ' espaceCustom form-control']
            ])
            ->add('isVerified',NULL, [
                'label' => 'Vérifier le compte'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
