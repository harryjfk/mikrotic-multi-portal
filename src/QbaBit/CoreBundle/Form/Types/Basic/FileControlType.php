<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Basic;


use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\OptionsBundle\Transformer\OptionToArrayTransformer;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Tests\Normalizer\ObjectConstructorArgsWithDefaultValueDummy;

class FileControlType extends AccessBaseType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('extension', array());
        $resolver->setDefault('dir_base', "");
        $resolver->setDefault('web_base', 'none');
        $resolver->setDefault('multiple', false);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            if ($event->getForm()->isValid() && $event->getForm()->getParent()->getData() != null) {
                $event->getForm()->getParent()->getData()->__set($event->getForm()->getName(), $event->getData());
                $uploadDirs = $this->getUploadDirs($event->getForm(), $event->getForm()->getConfig()->getOptions());
                $web = $uploadDirs["web_base"];
                $dir = $uploadDirs["dir_base"];
                $event->getForm()->getParent()->getData()->doUpload($dir, $web);

            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $data = $view->vars['data'];

        if ($data == null) {
            $data = $view->parent->vars['data'];
            if ($data == null)
                $data = $form->getParent()->getConfig()->getDataClass();
            $reflection = new Reflection($data);
            $traits = $reflection->getTraitNames();

            if (array_search('QbaBit\CoreBundle\Traits\FileUploadable', $traits) !== false)
                if ($view->parent->vars['data'] == null)
                    $view->vars['data'] = $this->getRealData($view, $form);
                else

                    $view->vars['data'] = $view->parent->vars['data']->findField($form->getName(), 1);
            else
                $view->vars['data'] = $this->getRealData($view, $form);

        }
        $view->vars['extension'] = $options['extension'];
        $view->vars['multiple'] = $options['multiple'];

        $uploadDirs = $this->getUploadDirs($form, $options);
        $view->vars['web_base'] = $uploadDirs["web_base"];
        $view->vars['dir_base'] = $uploadDirs["dir_base"];
    }

    protected function getUploadDirs(FormInterface $form, $options)
    {
        $parentUploads = null;
        if ($form->getParent() != null)
            if (array_key_exists("bundle", $form->getParent()->getConfig()->getOptions())) {
                $bundle = $form->getParent()->getConfig()->getOptions()["bundle"];
                if (array_key_exists("uploads", $bundle))
                    $parentUploads = $bundle["uploads"];
            }
        $result = array();
        if ($options["web_base"] == "none") {
            if ($parentUploads != null)
                $result["web_base"] = $parentUploads["web"];
        } else
            $result["web_base"] = $options["web_base"];

        if ($options["dir_base"] == "") {
            if ($parentUploads != null)
                $result["dir_base"] = $parentUploads["dir"];
        } else
            $result["dir_base"] = $options["dir_base"];
        return $result;
    }

    public function getBlockPrefix()
    {
        return 'qbabit_file_control';
    }

    public function getParent()
    {
        return FileType::class;
    }

    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Basic:file_control.html.twig";
    }
}