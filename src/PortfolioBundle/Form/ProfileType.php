<?php

namespace PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProfileType extends AbstractType
{
  /**
  * {@inheritdoc}
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('firstName')
    ->add('lastName')
    ->add('birthDate', BirthdayType::class, array('attr' => array('class' => 'date'),'label'=>false,'required' => true,'widget' => 'single_text','html5' => true))
    ->add('address')
    ->add('zipcode')
    ->add('city')
    ->add('country')
    ->add('mail')
    ->add('mail2')
    ->add('localPhoneNumber')
    ->add('delocalizedPhoneNumber')
    ->add('description', TextareaType::class,array('required' => false,'attr' => array('placeholder'=>'décrivez-vous. max:300 caractère','maxlength' => 300)))
    ->add('profession')
    ->add('avatar')
    ->add('updatedAt')
    ;
  }/**
  * {@inheritdoc}
  */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'PortfolioBundle\Entity\Profile'
    ));
  }

  /**
  * {@inheritdoc}
  */
  public function getBlockPrefix()
  {
    return 'portfoliobundle_profile';
  }


}
