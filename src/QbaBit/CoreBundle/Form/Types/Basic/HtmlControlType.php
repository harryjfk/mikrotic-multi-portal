<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Basic;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\CoreBundle\Transformers\ImagesCollectionToStringTransformer;
use QbaBit\OptionsBundle\Transformer\OptionToArrayTransformer;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Ldap\Adapter\ExtLdap\Collection;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Tests\Normalizer\ObjectConstructorArgsWithDefaultValueDummy;

class HtmlControlType extends AccessBaseType
{
    //   use ServiceContainer;

    public function configureOptions(OptionsResolver $resolver)
    {

        /*   $resolver->setDefault('onCancel', null);
           $resolver->setDefault('onOk', null);
           $resolver->setDefault('template', null);
           $resolver->setDefault('width', 400);
           $resolver->setDefault('height', 550);
           $resolver->setDefault('buttonText','');
           $resolver->setDefault('caption','');*/
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {

        /*    $view->vars['template'] = $options['template'];
            $view->vars['onOk'] = $options['onOk'];
            $view->vars['onCancel'] = $options['onCancel'];
            $view->vars['width'] = $options['width'];
            $view->vars['height'] = $options['height'];
            $view->vars['buttonText'] = $options['buttonText'];
            $view->vars['caption']=$options['caption'];*/

    }

    public function getParent()
    {
        return TextType::class;
    }

    public function getBlockPrefix()
    {
        return 'qba_bit_html_control';
    }

    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Basic:html_control.html.twig";
    }
}