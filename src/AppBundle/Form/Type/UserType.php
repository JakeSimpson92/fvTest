<?php
/**
 * Created by PhpStorm.
 * User: jakes
 * Date: 16/04/18
 * Time: 16:00
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class UserType extends AbstractType
{
    public function configureOptions (OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\User\User',
                'form_type'  => 'add',
                'user'       => null,
            )
        );
        $resolver->setAllowedValues('form_type', array(
            'add',
        ));
    }

    public function buildForm (FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('fName', TextType::class, array('label' => 'First Name'))
            ->add('lName', TextType::class, array('label' => 'Surname'))
            ->add('email', TextType::class, array('label' => 'Email Address:'))
            ->add('mobile', TextType::class, array('label' => 'Mobile'))
            ->add('gender', ChoiceType::class, array('label' => 'Gender', 'choices' => array(
                'Please Select' => 'null',
                'Male' => 'Male',
                'Female' => 'Female',
                'Other' => 'Other',
            )))
            ->add('dateOfBirth', DateType::class, array('label' => 'Date of Birth', ))
            ->add('comments', TextareaType::class, array('label' => 'Comments', 'required' => false))
            ->add('submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'subBtn',
                ),
            ));
    }

}