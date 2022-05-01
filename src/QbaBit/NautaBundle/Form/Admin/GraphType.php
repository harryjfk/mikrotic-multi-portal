<?php

namespace QbaBit\NautaBundle\Form\Admin;



use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\Form\Types\Basic\HighChartControlType;
use QbaBit\CoreBundle\Traits\ServiceContainer;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;


class GraphType extends AccessBaseType
{
   

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*    ->add('sales',HighChartControlType::class,array("label"=>false,"caption"=>"Ventas Anuales"))
          /*    ->add('family',HighChartControlType::class,array("label"=>false,"caption"=>"Familia"))
               ->add('subfamily',HighChartControlType::class,array("label"=>false,"caption"=>"SubFamilias"))
          */    ->add('payments',HighChartControlType::class,array("label"=>false,"caption"=>"Pagos por cliente"))
             // ->add('missing',HighChartControlType::class,array("label"=>false,"caption"=>"Clientes sin pagar"))
              ->add('admins',HighChartControlType::class,array("label"=>false,"caption"=>"Cobro entre socios"))
           ;
    
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
     /*   $resolver->setDefaults(array(
            'data_class' => 'QbaBit\SelectMaticaBaseBundle\Entity\SelectMaticaUser'
        ));*/
    }
}
