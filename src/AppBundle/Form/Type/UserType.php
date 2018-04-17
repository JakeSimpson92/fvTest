<?php
/**
 * Created by PhpStorm.
 * User: jakes
 * Date: 16/04/18
 * Time: 16:00
 */

namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Form\Extension\Core\Type as Fields;

class UserType extends AbstractType
{
    public function configureOptions (OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\User\User',
                'form_type'  => 'add',
                'user'       => null,
                'auth'       => null,
            )
        );
        $resolver->setAllowedValues('form_type', array(
            'add',
            'edit',
        ));
    }

    public function buildForm (FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('fName', TextType::class, array('label' => 'First Name'))
            ->add('lName', TextType::class, array('label' => 'Surname'))
            ->add('email', TextType::class, array('label' => 'Email'))
            ->add('mobile', TextType::class, array('label' => 'Mobile'))
            ->add('gender', TextType::class, array('label' => 'Gender'))
            ->add('dateOfBirth', DateType::class, array('label' => 'Date of Birth'))
            ->add('comments', TextareaType::class, array('label' => 'Comments'))
            ->add('submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn-primary',
                ),
            ));
    }

}