<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Collections;


use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use QbaBit\CoreBundle\Traits\ServiceContainer;


use QbaBit\CoreBundle\Transformers\Forms\CollectionToArrayTransformer;
use Symfony\Component\Config\Definition\Exception\Exception;
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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;


class GeneralCollectionType extends AccessBaseType
{

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefault('columns', array());
        $resolver->setDefault('entity_manager', "doctrine.orm.default_entity_manager");
        $resolver->setDefault('delete_callback', function ($object) {
        });
        $resolver->setDefault('allow_add', true);
        $resolver->setDefault('allow_delete', true);
        $resolver->setDefault('can_add', true);
        $resolver->setDefault('can_remove', true);
        $resolver->setDefault('onAdd', '');
    }

    private $base_columns = array();

    private function getDeclaredColumns(FormBuilderInterface $builder, array $options)
    {
        $b = new FormBuilder($builder->getName(), $builder->getDataClass(), $builder->getEventDispatcher(), $builder->getFormFactory());

        try
        {
            $t = new $options['entry_type']($this->container);
        }
        catch (\Exception $e)
        {
            $t = new $options['entry_type']();
        }

        $t->buildForm($b, $options);
        foreach ($b->all() as $k => $w)
            $this->base_columns[$k] = $w->getOptions();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->getDeclaredColumns($builder, $options);
        $em = $this->container->get($options['entity_manager']);
        $builder->addModelTransformer(new CollectionToArrayTransformer($builder->getForm(), $em, $options['delete_callback'],$this->container));
        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
            $event->getForm()->getConfig()->getModelTransformers()[0]->setForm($event->getForm());
        });
    }

    private function getParamFromDoc($doc)
    {
        $r = array();
        $l = explode("*\n", $doc);
        foreach ($l as $f)
            if (strpos(strtolower($f), '@param') !== false) {
                $w = explode(' ', $f);
                $k = false;
                foreach ($w as $i)
                    if (strtolower($i) == '@param')
                        $k = true;
                    else
                        if ($k) {

                            $r[] =new Reflection($i) ;
                            break;
                        }


            }
        return $r;

    }

    private function getReflectedType($str)
    {

        return strtolower(str_replace('_', '', $str));

    }

    private function getType(FormView $view, FormInterface $form)
    {
        $t = 'add' . $this->getReflectedType($form->getName());
        if ($t[strlen($t) - 1] == 's')
            $t = substr($t, 0, strlen($t) - 1);

        $reflection = new Reflection($view->parent->vars["data"]);
        foreach ($reflection->getMethods() as $methods)

            if (strtolower($methods->getName()) == $t) {

                if (count($methods->getParameters()) > 0) {
                    $param = $methods->getParameters()[0];
                    $c = $param->getClass();
                    if ($c == null) {
                        $t = $this->getParamFromDoc($methods->getDocComment());
                        $c = $t[0];
                    }


                    return $c;
                } else {
                    $t = $this->getParamFromDoc($methods->getDocComment());
                }


            }
        return null;
    }

    private function getColumns(\ReflectionClass $type, array $options, $object)
    {
        $reflection = new Reflection($object);
        $result = array();
        if (count($options) == 0) {
            foreach ($type->getMethods() as $methods)
                if (strpos($this->getReflectedType($methods->getName()), 'set') !== false)
                    if (count($methods->getParameters()) > 0) {
                        $param = $methods->getParameters()[0];
                        if ($param->getClass() != null) {

                            if ($param->getClass() != $reflection)
                                $result[$param->getName()] = $param->getName();

                        } else
                            $result[$param->getName()] = $param->getName();

                    }
        } else {
            foreach ($options as $k => $col) {

                $label = $k;
                if (array_key_exists('label', $col))
                    if ($col['label'] != false)
                        $label = $col['label'];
              $reflected_type = $this->getReflectedType($k);

                if (array_search('QbaBit\CoreBundle\Traits\FileUploadable', $type->getTraitNames()) !== false)
                    $reflected_type = str_replace('file','',$reflected_type);
                foreach ($type->getMethods() as $methods)
                    if ($this->getReflectedType($methods->getName()) == 'set' . $reflected_type)
                        if (count($methods->getParameters()) > 0) {
                            $param = $methods->getParameters()[0];
                            if ($param->getClass() != null) {

                                if ($param->getClass() != $reflection)
                                    $result[$label] = $param->getName();

                            } else
                                $result[$label] = $param->getName();
                            if (array_search('QbaBit\CoreBundle\Traits\FileUploadable', $type->getTraitNames()) !== false)
                                $result[$label] = $k;
                        }

            }

        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {


        //$t = new  $options['entry_type']();
        $columns = array_merge($this->base_columns, $options['columns']);

        //var_dump($columns);
        $reflection = new Reflection($view->parent->vars['data']);

       // $privilegies = $this->container->get('qbabit_core.global.config')->getPrivilegies($reflection->getName(), 0);
        $type = $this->getType($view, $form);

        $columns = $this->getColumns($type, $columns, $view->parent->vars['data']);
      /*  $config = $this->container->get('qbabit_core.global.config')->getUsableConfig();
        foreach ($config as $k => $v)
            $view->vars[$k] = $v;*/
        $view->vars['columns'] = $columns;

        $view->vars['child'] = $view;
 //       $view->vars['priviligies'] = $privilegies;
        $view->vars['can_add'] = $options['can_add'];
        $view->vars['can_remove'] = $options['can_remove'];
        $view->vars['onAdd'] = $options['onAdd'];
        $view->vars["template_helper"] = $this->container->get("qba_bit_template.helper");
    }
    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Collections:general_collection.html.twig";
    }
    public function getParent()
    {
        return CollectionType::class;
    }

    public
    function getBlockPrefix()
    {
        return 'qba_bit_general_collection_type';
    }


}