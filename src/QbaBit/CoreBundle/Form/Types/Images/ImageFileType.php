<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Images;




use QbaBit\CoreBundle\Form\Types\Basic\FileControlType;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Tests\Normalizer\ObjectConstructorArgsWithDefaultValueDummy;

class ImageFileType extends FileControlType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefault('vertical',true);
        $resolver->setDefault('extension',array('ico','gif','png' ,'jpg','jpeg'));
    }

   

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view,$form,$options);

         /*
        $view->vars['web_base'] = $options['web_base'];
        $view->vars['dir_base'] = $options['dir_base'];*/
        $view->vars['vertical'] = $options['vertical'];

    }

    public function getBlockPrefix()
    {
        return 'qbabit_image_file';
    }
    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Images:image_file.html.twig";
    }

}