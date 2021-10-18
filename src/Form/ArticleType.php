<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Tag;
use App\Entity\Type;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',NULL,[
                'attr' => ['class' => 'espaceCustom']
            ])
            ->add('image',NULL,[
                'attr' => ['class' => 'espaceCustom']
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
            ->add('contenu',CKEditorType::class,[
                'attr' => ['class' => 'espaceCustom']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
