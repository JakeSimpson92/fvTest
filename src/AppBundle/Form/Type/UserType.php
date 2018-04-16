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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
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
            ->add('fName')
            ->add('lName')
            ->add('email')
            ->add('mobile')
            ->add('gender')
            ->add('dateOfBirth', DateType::class)
            ->add('comments')
            ->add('submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn-primary',
                ),
            ));
    }

}