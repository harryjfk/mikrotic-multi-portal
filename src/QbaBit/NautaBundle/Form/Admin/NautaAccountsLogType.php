<?php

namespace QbaBit\NautaBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;

 use Symfony\Component\Form\Extension\Core\Type\TextType;

 use QbaBit\CoreBundle\Form\Types\Basic\SwitchCheckType;

class NautaAccountsLogType extends AccessBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
parent::buildForm($builder,$options);

                $builder->add('csrfhw',TextType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qbabit.admin.nauta.nautaaccountslog.fields.csrfhw','required'=>true) );

                $builder->add('ip',TextType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qbabit.admin.nauta.nautaaccountslog.fields.ip','required'=>true) );

                $builder->add('data',TextType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qbabit.admin.nauta.nautaaccountslog.fields.data','required'=>true) );

                $builder->add('closed',SwitchCheckType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qbabit.admin.nauta.nautaaccountslog.fields.closed','required'=>true) );

                $builder->add('account',TextType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qbabit.admin.nauta.nautaaccountslog.fields.account','required'=>true) );        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QbaBit\NautaBundle\Entity\NautaAccountsLog'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qbabit_nautabundle_nautaaccountslog';
    }


}
