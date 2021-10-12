<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', NULL, [
                'attr' => ['class' => 'espaceCustom', 'placeholder' => 'Merci de rentrer votre adresse email' ],
                'label' => 'Email :'
            ])
            ->add('userID',NULL,[
                'attr' => ['class' => 'espaceCustom', 'placeholder' => 'Merci de rentrer votre adresse pseudo'],
                'label' => 'Pseudo :'
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field espaceCustom', 'autocomplete' => 'new-password', 'placeholder' => 'Merci de rentrer votre mot de passe ']],
                'mapped' => false,
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe :'],
                'second_options' => ['label' => 'Confirmer votre mot de passe :'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'attr' => ['class' => 'password-field espaceCustom'],
                'label' => 'Accepter nos conditions d\'utilisations',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
