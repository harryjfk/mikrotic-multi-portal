<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Collections;


use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use QbaBit\CoreBundle\Traits\ServiceContainer;
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


class ListViewType extends AccessBaseType
{
    // use ServiceContainer;

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('class', null);
        $resolver->setDefault('columns', array('name'));
        $resolver->setDefault('onLoad',null);
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['onLoad'] = $options['onLoad'];

    }

    public function getParent()
    {
        return TextType::class;
    }

    public
    function getBlockPrefix()
    {
        return 'qba_bit_list_view_type';
    }

    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Collections:list_view.html.twig";
    }
}