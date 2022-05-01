<?php

namespace QbaBit\SecurityBundle\Form;

use Common\SeguridadBundle\Entity\Usuario;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\FormType\ImageFileType;
use QbaBit\CoreBundle\FormType\SwitchCheckType;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\SecurityBundle\Entity\SecurityUser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\Type\RepeatedTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface,
    Doctrine\ORM\EntityRepository;

class SecurityRecoveryType extends AccessBaseType
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
        $builder->add('password', RepeatedType::class, array('required' => true,
            'type' => PasswordType::class,
            'invalid_message' => $this->container->get('translator')->trans( 'qba_bit.security.security_user.msg.passwordMatch'),
            'first_options' => array('label' => 'qba_bit.security.security_user.fields.password',"attr"=>array("class"=>"form-control")),
            'second_options' => array('label' => 'qba_bit.security.security_user.fields.repeatPassword',"attr"=>array("class"=>"form-control")),

        ));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            /* 'csrf_protection'   => false,*/
            'data_class' => 'QbaBit\SecurityBundle\Entity\SecurityUser'
        ));
    }

    /**
     * @return string
     */

}
