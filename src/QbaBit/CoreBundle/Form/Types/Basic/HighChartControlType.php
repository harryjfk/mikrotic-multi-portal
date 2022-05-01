<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Basic;




use QbaBit\CoreBundle\Form\Types\Basic\ChartControlType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;


class HighChartControlType extends ChartControlType
{
    // use ServiceContainer;

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefault("type", "column");
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);
        $view->vars["type"] = $options["type"];
    }


    public
    function getBlockPrefix()
    {
        return 'qbabit_high_chart_control_type';
    }


}