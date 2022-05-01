<?php

namespace QbaBit\NautaBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use Symfony\Component\Form\Extension\Core\Type\TextType;



class NautaTipoCuentaType extends AccessBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //parent::buildForm($builder, $options);

        $builder->add('name', TextType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_tipo_cuenta.fields.name', 'required' => true));
        $builder->add('amount', NumberType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_tipo_cuenta.fields.amount', 'required' => true));
        $builder->add('date', ChoiceType::class, array(
            "choices"=>array(

                "Semanal"=>7,
                "Quincenal"=>14,
                "Mensual"=>31,
                "Anual"=>365,
                "Admin"=>999999999999,
            ),
            'attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_tipo_cuenta.fields.date', 'required' => true));
        $builder->add('capacity', ChoiceType::class, array(
            "choices"=>array(

                "128 kb"=>128,
                "256 kb"=>256,
                "512 kb"=>512,
                "1024 kb"=>1024,
                "2048 kb"=>2048,
            ),
            'attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_tipo_cuenta.fields.capacity', 'required' => true));

        }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'QbaBit\NautaBundle\Entity\NautaTipoCuenta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qbabit_nautabundle_nautatipocuenta';
    }


}
