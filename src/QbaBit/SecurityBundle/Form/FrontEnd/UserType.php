<?php

namespace QbaBit\SecurityBundle\Form\FrontEnd;

use Common\SeguridadBundle\Entity\Usuario;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\FormType\ImageFileType;
use QbaBit\CoreBundle\FormType\SwitchCheckType;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\LocationsBundle\Form\LocationsType;
use QbaBit\LocationsBundle\FormType\LocationSelectType;
use QbaBit\SecurityBundle\Entity\SecurityUser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\Type\RepeatedTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface,
    Doctrine\ORM\EntityRepository;

class UserType extends AccessBaseType
{


    /* private $userEdit;

     public function __construct(SecurityUser $user)
     {
         $this->userEdit = $user;
     }*/

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $config = $this->container->get('qbabit_core.global.config')->getConfigValue('qba_bit_security.uploads.web');

        $builder->add('path_file', ImageFileType::class, array('web_base' => $config, 'label' => false, 'required' => false, 'attr' => array('class' => 'form-control')))
            ->add('name', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control','placeholder' => 'qbabit.security.admin.user.fields.name')))
            ->add('firstName', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control','placeholder'  => 'qbabit.security.admin.user.fields.firstName')))
            ->add('secondName', TextType::class, array('label' => false, 'attr' => array('class' => 'form-control','placeholder'  => 'qbabit.security.admin.user.fields.secondName')))
            ->add('username', HiddenType::class, array('label' => false, 'attr' => array('class' => 'form-control','placeholder'=>'qbabit.security.admin.user.fields.userName')))
            ->add('email', EmailType::class, array('label' =>false , 'attr' => array('class' => 'form-control','placeholder' =>'qbabit.security.admin.user.fields.email')))
        //    ->add('location', LocationSelectType::class, array('label' =>false , 'attr' => array('placeholder' =>'qbabit.security.admin.user.fields.location')))
            ->add('password', RepeatedType::class, array('required' => false,
                'type' => PasswordType::class,
                'invalid_message' => 'qbabit.security.admin.user.msg.passwordMatch',
                'first_options' => array('label' =>false ,'attr' => array('class' => 'form-control','placeholder'=>'qbabit.security.admin.user.fields.password')),
                'second_options' => array('label' => false,'attr' => array('class' => 'form-control','placeholder'=>'qbabit.security.admin.user.fields.repeatPassword'))

            ));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'data_class' => 'QbaBit\SecurityBundle\Entity\SecurityUser'
        ));
    }

    /**
     * @return string
     */

}
