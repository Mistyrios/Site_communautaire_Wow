<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',NULL, [
                'label' => 'Email ',
                'attr' => ['class' => 'espaceCustom', 'placeholder' => 'Merci de rentrer une adresse email' ],
            ])
            ->add('pseudo',NULL, [
                'label' => 'Pseudo ',
                'attr' => ['class' => ' espaceCustom', 'placeholder' => 'Merci de rentrer un pseudo' ],
            ])
            ->add('password',NULL, [
                'label' => 'Mot de passe ',
                'attr' => ['class' => ' espaceCustom', 'placeholder' => 'Merci de rentrer un mot de passe' ],
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
