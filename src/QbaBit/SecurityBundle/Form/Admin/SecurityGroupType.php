<?php

namespace QbaBit\SecurityBundle\Form\Admin;

use Common\SeguridadBundle\Entity\Usuario;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\FormType\ImageFileType;
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

class SecurityGroupType extends AccessBaseType
{


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'qba_bit.security.security_group.fields.name', ))

            ->add('role', EntityType::class, array('label' => 'qba_bit.security.security_group.fields.roles', 'attr'=>array('class'=>'browser-default', 'style'=>'height:400px'),
                'class' => 'QbaBit\SecurityBundle\Entity\SecuritySectionsRoles',
                'choice_label' => function ($category) {
                    return $this->container->get("translator")->trans($category->getName());
                     
                },
                'multiple' => true,
                'group_by' => function($rol, $key, $index) {
                    return $rol->getSection()->getName();
                }
            ));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            /* 'csrf_protection'   => false,*/
            'data_class' => 'QbaBit\SecurityBundle\Entity\SecurityGroup'
        ));
    }

    /**
     * @return string
     */

}
