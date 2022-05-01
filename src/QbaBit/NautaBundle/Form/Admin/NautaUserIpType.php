<?php

namespace QbaBit\NautaBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;

 use Symfony\Component\Form\Extension\Core\Type\TextType;

class NautaUserIpType extends AccessBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//parent::buildForm($builder,$options);

                $builder->add('ip',TextType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qba_bit.nauta.nauta_user_ip.fields.ip','required'=>true) );

  //              $builder->add('user',TextType::class,array('attr'=>array("class"=>"form-control"),'label'=>'qbabit.admin.nauta.nautauserip.fields.user','required'=>true) );        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QbaBit\NautaBundle\Entity\NautaUserIp'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qbabit_nautabundle_nautauserip';
    }


}
