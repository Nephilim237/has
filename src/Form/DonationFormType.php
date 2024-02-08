<?php

namespace App\Form;

use App\Entity\DonationEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customerPhoneNumber', TextType::class, [
                'attr' => [
                    'class' =>  'donate-input',
                    'placeholder' => 'Saisissez votre numéro de téléphone'
                ],
                'required' => true,
                'label' => false
            ])
            ->add('amount', TextType::class, [
                'attr' => [
                    'class' =>  'donate-input donate-amount',
                    'placeholder' => 'Saisissez un montant'
                ],
                'required' => true,
                'label' => false
            ])
            ->add('dedicated', CheckboxType::class, [
                'required' => false,
                'attr' => [
//                    'class' => 'form-check-input'
                ],
            ])
            ->add('name', TextType::class, [
                'attr' => [
                    'class' =>  'donate-input',
                    'placeholder' => 'Votre nom'
                ],
                'required' => false,
                'label' => false
            ])
            ->add('payItemDesc', TextareaType::class, [
                'attr' => [
                    'class' =>  'donate-input',
                    'placeholder' => 'Laissez un message'
                ],
                'required' => false,
                'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DonationEntity::class,
        ]);
    }
}
