<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {	
        $builder
            ->add('text', TextareaType::class, ['attr' => [
                    "class" => "uk-textarea uk-form-small",
                ]])
            ->add('note')
            ->add('dateAvis', DateType::class, ['attr' => [
                    "class" => "uk-date uk-form-small",
                ]])
            ->add('voiture')
            ->add('Valider', SubmitType::class, [
                'attr' => [
                    "class" => "uk-button uk-button-primary uk-button-small",
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
