<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content', CKEditorType::class, [
              'config' => [
                'uiColor' => '#e2e2e2',
                'toolbar' => 'full',
                'required' => true
              ]
            ])
            ->add('created_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
