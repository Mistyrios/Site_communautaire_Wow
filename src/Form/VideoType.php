<?php

namespace App\Form;

use App\Entity\Tag;
use App\Entity\Type;
use App\Entity\Video;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',NULL,[
                'attr' => ['class' => 'espaceCustom']
            ])
            ->add('lien',NULL,[
                'attr' => ['class' => 'espaceCustom']
            ])
            ->add('auteur',NULL,[
                'attr' => ['class' => 'espaceCustom']
            ])
            ->add('postedAt',NULL,[
                'attr' => ['class' => 'espaceCustom'],
                'widget' => 'single_text',
                'label' => 'Postée le '
            ])
            ->add('tags',EntityType::class,[
                'class' => Tag::class,
                'attr' => ['class' => 'espaceCustom'],
                'choice_label' => function (Tag $tag) {
                    return $tag->getNom();
                },
                'multiple' => true,
                'expanded' =>true
            ])
            ->add('type',EntityType::class,[
                'class' => Type::class,
                'attr' => ['class' => 'espaceCustom'],
                'choice_label' => function (Type $type) {
                    return $type->getNom();
                },

            ])
            ->add('description',CKEditorType::class,[
                'attr' => ['class' => 'espaceCustom']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
