<?php

namespace QbaBit\SecurityBundle\Form\Admin;


use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use QbaBit\CoreBundle\Form\Types\Basic\SwitchCheckType;
use QbaBit\CoreBundle\Form\Types\Collections\FilteredEntityType;
use QbaBit\CoreBundle\Form\Types\Collections\GeneralCollectionType;
use QbaBit\CoreBundle\Form\Types\Images\ImageFileType;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\NautaBundle\Form\Admin\NautaAccountsType;
use QbaBit\NautaBundle\Form\Admin\NautaUserIpType;
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

class SecurityUserType extends AccessBaseType
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
        parent::buildForm($builder, $options);

        $builder->add('path_file', ImageFileType::class, array( 'label' => 'qba_bit.security.security_user.fields.image', 'required' => false, 'attr' => array('class' => 'form-control')))
            ->add('name', TextType::class, array('label' => 'qba_bit.security.security_user.fields.name',  'attr' => array('class' => 'form-control')))
            ->add('interface', TextType::class, array('label' => 'Interface',  'attr' => array('class' => 'form-control')))
            ->add('firstName', TextType::class, array('label' => 'qba_bit.security.security_user.fields.firstName' , 'attr' => array('class' => 'form-control')))
            ->add('secondName', TextType::class, array('label' => 'qba_bit.security.security_user.fields.secondName', 'attr' => array('class' => 'form-control')))
             ->add('username',  TextType::class, array('label' => 'qba_bit.security.security_user.fields.userName','attr'=>array('class'=>'form-control')))
             ->add('movilPhone',  TextType::class, array('label' => 'qba_bit.security.security_user.fields.movilPhone','attr'=>array('class'=>'form-control')))
             ->add('fixPhone',  TextType::class, array('label' => 'qba_bit.security.security_user.fields.fixPhone','attr'=>array('class'=>'form-control')))
            ->add('email', EmailType::class, array('label' => 'qba_bit.security.security_user.fields.email',  'attr' => array('class' => 'form-control')))
            ->add('password', RepeatedType::class, array('required' => false,
                'type' => PasswordType::class,
                'invalid_message' => $this->container->get('translator')->trans( 'qba_bit.security.security_user.msg.passwordMatch'),
                'first_options' => array('label' => 'qba_bit.security.security_user.fields.password',"attr"=>array("class"=>"form-control")),
                'second_options' => array('label' => 'qba_bit.security.security_user.fields.repeatPassword',"attr"=>array("class"=>"form-control")),

            ))
            ->add('enabled',SwitchCheckType::class,array( 'label' => 'qba_bit.security.security_user.fields.enabled','required'=>false,'attr'=>array('class'=>'form-control')))
            ->add('accountType',FilteredEntityType::class,array( "required"=>false, 'class'=>"QbaBit\NautaBundle\Entity\NautaTipoCuenta", 'label' => 'qba_bit.security.security_user.fields.accountType','required'=>false,'attr'=>array('class'=>'form-control')))
//            ->add('percent',  TextType::class, array('label' => 'qba_bit.security.security_user.fields.percent','attr'=>array('class'=>'form-control')))

//            ->add('accounts', GeneralCollectionType::class, array('label' => false, 'entry_type' => NautaAccountsType::class, 'allow_add' => true, 'allow_delete' => true))
            ->add('ip', GeneralCollectionType::class, array('label' =>  false, 'entry_type' => NautaUserIpType::class, 'allow_add' => true, 'allow_delete' => true))

                   ->

            add('group', EntityType::class, array('label' => 'qba_bit.security.security_user.fields.userGroups',
                'class' => 'QbaBit\SecurityBundle\Entity\SecurityGroup',
                'multiple' => true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('g')->orderBy('g.name', 'asc');
                },
                'required' => false, 'attr' => array('class' => 'form-control')
            ));
//        if($this->getUser()->getId()==4)
//            $builder->add("onlyHarry",SwitchCheckType::class,array("label"=>"Solo Harry"));

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
