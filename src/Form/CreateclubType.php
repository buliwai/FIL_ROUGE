<?php

namespace App\Form;

use App\Entity\ChampionnatMasculinSenior;
use App\Entity\Club;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateclubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('ville')
            ->add('code_postal')
            ->add('telephone')
            ->add('mail')
            ->add('site_web')
            ->add('plan_acces')
            ->add('findBy',  ChoiceType::class, array(
                'choices'  => array(
                        'Commence par' => 'f',
                'Contient' => 'S',
            ),
            'mapped'  => false
        )
            )
            //->add('championnatmasculinsenior', LevelType::class)

            //permet de creer le bouton submit
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Club::class,
        ]);
    }
}
