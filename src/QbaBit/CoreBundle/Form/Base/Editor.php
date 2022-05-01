<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Base;


use QbaBit\CoreBundle\Entity\Reflection;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Editor
{
    public function useContainer()
    {
        return false;
    }

    protected $uses = array();

    public function setUsesParams($array)
    {
        $this->uses = $array;
    }

    public function getUsesParams()
    {
        return $this->uses;
    }

    protected $additionalParams = array();

    public function setStoredParams($array)
    {
        $this->additionalParams = $array;
    }

    public function getStoredParams()
    {
        return $this->additionalParams;
    }

    public function buildAdditionalParams(ContainerInterface $container)
    {
        $reflect = new Reflection($this->getType());
        $traits = $reflect->getTraitNames();
        $editor = $this->getType();
       $t= $reflect->newInstanceWithoutConstructor();
       /* if (array_search('ServiceContainer', $traits) == false)
            $t = new $editor($container);
        else
            $t = new $editor();*/
        $twig = $t->getRenderTwig();
        $prefix = $t->getBlockPrefix();

        $file = $container->get('twig')->loadTemplate($twig);

        $new_uses = array();
        $uses = $this->getUsesParams();
        foreach ($uses as $k => $v) {
            $new_uses[$k] = $v;
            $t = explode('\\', $v);
            $new_uses[$k . "_short"] = $t[count($t) - 1];
        }
        
        $t = $file->renderBlock($prefix . "_param_generator", array_merge(array_merge($this->getStoredParams(),$this->getDefaultValues()),$new_uses));

        //   $reflect  = new \ReflectionClass($t[0\]);
        //var_dump(json_encode($reflect->getMethods()));
        return $t;


    }
    public function getDefaultValues()
    {
        return array("class_control"=>"form-control","class_row"=>"col-xs-12");
        
        
    }

    public function hasAdditionalParams()
    {
        return false;
    }

    public function getType()
    {
        return null;
    }

    public function getSimpleType()
    {

        $type = $this->getType();
        $t = explode("\\", $type);
        $res = $t[count($t) - 1];
        $res = str_replace("Type", "", $res);
        return $res;
    }

    public function __toString()
    {
        $reflect = new Reflection($this);
        return $reflect->getName();
    }
    public function getDefaultTestValue()
    {
      return array("files"=>array(),"value"=>"value");
    }
    public function getFieldName($name)
    {
        return $name;
    }
    public function isFirstRequired()
    {
        return false;
    }
    public function isScalar()
    {
        return true;
    }
    public function getIndexHtml($value,$params)
    {
        return "{{ ".$value." }}";
    }
}