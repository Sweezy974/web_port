<?php

namespace PortfolioBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// use FreetimeAdvisorBundle\Entity\Category;
// use FreetimeAdvisorBundle\Entity\City;

class RegistrationType extends AbstractType

{
  public function buildForm(FormBuilderInterface $builder, array $options)

  {
    $builder
    // ->add('birth_date', BirthdayType::class, array('attr' => array('class' => 'date'),'label'=>false,'required' => true,'widget' => 'single_text','html5' => true))
    // ->add('first_name',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('last_name',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('mail',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('mail_2',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('local_phone_number',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('delocalized_phone_number',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('profession',TextType::class, array('attr' => array( 'class' => 'text-uppercase' )))
    // ->add('description', TextareaType::class,array('required' => false,'attr' => array('placeholder'=>'décrivez-vous. max:300 caractère','maxlength' => 300)))
    // // ->add('imageFile', VichImageType::class, array('required' => true,'label'=>true,'attr' => array('class' => '')))
    // ->add('updated_at', BirthdayType::class, array('attr' => array('class' => 'date'),'label'=>false,'required' => true,'widget' => 'single_text','html5' => true))
    ->add('save', SubmitType::class, array('label' => 'envoyer','attr' => array('class' => '')))
    ;
  }

  public function getParent()

  {
    return 'FOS\UserBundle\Form\Type\RegistrationFormType';
  }

  public function getBlockPrefix()

  {
    return 'app_user_registration';
  }


}
