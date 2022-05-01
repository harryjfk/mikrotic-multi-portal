<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Modules;


use Doctrine\Common\Collections\ArrayCollection;

use QbaBit\CoreBundle\Entity\FormRender;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\Form\Types\Basic\ModalProcessLoggerType;
use QbaBit\CoreBundle\Form\Types\Basic\ModalType;
use QbaBit\CoreBundle\Traits\ServiceContainer;

use QbaBit\CoreBundle\Transformers\Forms\SelectionToMetaDataTransformer;
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

class ModalInstallModuleType extends AccessBaseType
{


    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefault('files', false);
        $resolver->setDefault('install', true);

        $resolver->setDefault('compound', true);
        $resolver->setDefault('caption', "Instalando Modulo");

        $resolver->setDefault("onClick", null);
        $resolver->setDefault("onOk", "reload();");

        $resolver->setDefault("buttonClass", 'btn btn-primary');


        /*   $resolver->setDefault('width', 750);
           $resolver->setDefault('csrf_protection', false);*/
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);
        $view->vars["template_add"] = $this->container->get('twig')->render('QbaBitCoreBundle:Form/Modules:modal_install_module.html.twig', array('add' => true,"install"=>$options["install"] ,'form' => $view));

        $trans = $this->container->get("translator");
        $text = "";
        $img = "";
        if($form->getData()==null)
        {
            $view->vars["onClick"] = "doInstallAll();";
            $view->vars["id"] =  $view->vars["id"]."_all";
            $text = $trans->trans("qba_bit.modules.fields.action.doUpgrade");
        }
        else
        if($options["install"])
        {
            if ($form->getData()["state"] == "non-installed") {
                $img = "fa fa-download";
                $text = $trans->trans("qba_bit.modules.fields.action.doInstall");
            } else if ($form->getData()["state"] == "upgrade") {
                $img = "fa fa-upload";
                $text = $trans->trans("qba_bit.modules.fields.action.doUpgrade");
            }
            $view->vars["id"] =  $view->vars["id"]."_".$form->getData()["id"];
            $view->vars["onClick"] = "doInstall();";
        }
        else
        {
            $img = "fa fa-trash";
            $text = $trans->trans("qba_bit.modules.fields.action.doUninstall");
            $view->vars["onClick"] = "doUninstall();";
            $view->vars["id"] =  $view->vars["id"]."_".$form->getData()["id"];
        }

        $view->vars["caption"] = $text;
        $view->vars["buttonText"] = $text . '<span class=" glyphicon ' . $img . '"></span>';
    }

    public function getParent()
    {
        return ModalProcessLoggerType::class;
    }


    public function getBlockPrefix()
    {
        return 'qba_bit_modal_install_module_form';
    }
    /* public static function getRenderTwig()
     {
         return "QbaBitCoreBundle:Form/Collections:general_collection.html.twig";
     }
 */

}