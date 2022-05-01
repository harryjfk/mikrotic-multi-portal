<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Collections;


use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\Traits\Contactable;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\OptionsBundle\Transformer\OptionToArrayTransformer;
use QbaBit\StoreBundle\Form\ProductsAttributeType;
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


class FilteredEntityType extends AccessBaseType
{

    public function configureOptions(OptionsResolver $resolver)
    {
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    public    function buildView(FormView $view, FormInterface $form, array $options)
    {
    }

    public function getParent()
    {
        return EntityType::class;
    }

    public    function getBlockPrefix()
    {
        return 'qba_bit_filtered_entity_type';
    }
    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig";
    }

}