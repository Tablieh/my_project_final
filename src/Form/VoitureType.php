<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('description', TextareaType::class, ['attr' => [
                    "class" => "uk-textarea uk-form-small",
                ]])
            ->add('nbPortes')
            ->add('couleur')
            ->add('image', TextareaType::class, ['attr' => [
                    "class" => "uk-textarea uk-form-small",
                ]])
            ->add('motorisation')
            ->add('modele')
            ->add('Valider', SubmitType::class, [
                'attr' => [
                    "class" => "uk-button uk-button-primary uk-button-small",
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
