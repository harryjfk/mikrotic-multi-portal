<?php

namespace QbaBit\NautaBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use NautaAccountsLog;

class NautaOptionsType extends AccessBaseType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // parent::buildForm($builder, $options);

        $builder->add('address', TextType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.address', 'required' => true));
        $builder->add('dhcp_server', TextType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.dhcp_server', 'required' => true));
        $builder->add('user', TextType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.user', 'required' => true));
        $builder->add('password', PasswordType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.password', 'required' => true));
        $builder->add('phone', TextType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.phone', 'required' => true));;
        $builder->add('email', EmailType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.email', 'required' => true));
        $builder->add('releaseType', ChoiceType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_options.fields.releaseType', 'required' => true,"choices"=>array("Reconectar"=>"release","Cambiar Mac"=>"change_mac")))

        ;

        }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            "bundle"=>""
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qbabit_nautabundle_nautaoptions';
    }


}
