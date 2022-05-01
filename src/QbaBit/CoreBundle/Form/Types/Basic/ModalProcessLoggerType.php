<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Basic;


use Doctrine\Common\Collections\ArrayCollection;

use QbaBit\CoreBundle\Entity\FormRender;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;
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

class ModalProcessLoggerType extends AccessBaseType
{


    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

           $resolver->setDefault('compound', true);
           $resolver->setDefault('url_get', null);
        /* $resolver->setDefault('width', 750);
         $resolver->setDefault('csrf_protection', false);*/
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {

         $render = new FormRender($this->container->get('twig'), 'QbaBitCoreBundle:Form/Basic:modal_process_logger.html.twig');


          $view->vars['form_render'] = $render;
          $view->vars['onOk'] = 'onOk'.$view->vars['id'].'(e);';
        $view->vars["caption"] = $options["caption"];

    }
    protected function getBussiness()

    {
        throw  new \Exception("Sin implementar");
    }


    public function getParent()
    {
        return ModalType::class;
    }

    public function getBlockPrefix()
    {
        return 'qba_bit_modal_process_logger_form';
    }
    /* public static function getRenderTwig()
     {
         return "QbaBitCoreBundle:Form/Collections:general_collection.html.twig";
     }
 */

}