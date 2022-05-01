<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Base;


use Psr\Container\ContainerInterface;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Traits\ServiceContainer;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AccessBaseType extends AbstractType
{

    use ServiceContainer;




    protected function getTop(FormView $view)
    {
        $parent = $view;
        while ($parent != null) {
            if ($parent->parent == null)
                return $parent;
            $parent = $parent->parent;
        }

        return null;
    }

    protected function invertCollection(array $array)
    {
        $result = array();
        for ($i = count($array) - 1; $i >= 0; $i--)
            $result[] = $array[$i];
        return $result;
    }

    protected function getId(Form $form, $asArray = false, $inverted = false)
    {

        $result = $asArray == true ? array() : "";
        $p = $form;
        while ($p != null) {
            if ($asArray)
                $result[] = $p->getName();
            else
                $result = $p->getName() . '_' . $result;
            $p = $p->getParent();
        }
        if ($asArray == false)
            $result = substr($result, 0, strlen($result) - 1);
        else
            if ($inverted)
                $result = $this->invertCollection($result);

        return $result;
    }

    protected function fillClasses(Form $form, $classes, $useData = false)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();

        foreach ($form->all() as $children) {
            $v = null;
            if (array_key_exists('data', $classes[$children->getName()]) && $useData)

                $v = $classes[$children->getName()]['data'];
            if ($v == null)
                $v = $this->getValueFromRequest($request, $children);


            $children->setData($v);
            if (array_key_exists($children->getName(), $classes))
                if (array_key_exists('class', $classes[$children->getName()])) {
                    $classname = $classes[$children->getName()]['class'];
                    $sv = null;
                    if ($v != null) {
                        $t = $this->container->get('doctrine.orm.default_entity_manager')->getRepository($classname)->find($v);
                        if ($t != null)
                            $sv = $t->__toString();
                    }
                    $classes[$children->getName()]['valueString'] = $sv;
                }

        }
        return $classes;
    }

    protected function getValueFromRequest(Request $request, Form $form)
    {
        try {
            $p = $this->getId($form, true, true);
            $w = $request->getSession()->get($p[0]);

            if ($w == null)
                $w = $request->get($p[0]);

            for ($i = 1; $i < count($p); $i++)
                $w = $w[$p[$i]];
            return $w;
        } catch (\Exception $e) {


        }
        return null;

    }

    protected function getRealData(FormView $view, Form $form)
    {
        $n = $form->getName();
        $pdata = $view->parent->vars['data'];
        if ($pdata == null)
            return null;
        $reflection = new Reflection($pdata);
        $method = null;
        $methods = $reflection->getMethods();
        foreach ($methods as $m)
            if (str_replace('get', '', strtolower($m->getName())) == $n) {

                $method = $m;
                break;
            }

        if ($method != null)
            return ($method->invoke($pdata));
        return null;
    }

    private $uploadsParams;
    protected function getUploadsParams()
    {
        return $this->uploadsParams;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->uploadsParams = $options["bundle"]["uploads"];
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            if ($this->container != null)
                $this->container->get('event_dispatcher')->dispatch("form.post_set_data", $event);

        });
    }

    public static function getRenderTwig()
    {
        return null;
    }

    public function serializeStructForm(FormInterface $form, &$result)
    {


        $t = $form->count() == 0 ? "" : array();
        foreach ($form->all() as $childs) {
            $this->serializeStructForm($childs, $t);
        }
        $result[$form->getName()] = $t;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        if ($this->container->get("kernel")->getEnvironment() == "test")
            $resolver->setDefault("csrf_protection", false);
        $resolver->setDefault("bundle",null);

    }
}