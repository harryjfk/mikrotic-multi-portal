<?php

namespace QbaBit\CoreBundle\Controller\Base;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class QbaBitBaseController extends Controller
{
    protected function additionalParams()
    {
        return array();
    }
    protected function getSearchForm()
    {
      $search =   $this->createForm("QbaBit\CoreBundle\Form\Types\Basic\SearchType");
      return $search;
    }

 /*   public function getConfigs($parameters)
    {

        $config = $this->get('qba_bit_core.global.utils')->getUsableConfig(true);
        $config['container'] = $this->container;
        $config = array_merge($this->additionalParams(), $config);
        $result = array_merge($config, $parameters);
        return $result;

    }*/


    public function render($view, array $parameters = array(), Response $response = null)
    {
        $hasModuleTemplate = $this->get('qba_bit_core.global.utils')->hasQbaBitModule("template");

        if ($hasModuleTemplate) {

            if ($this->container->get("qba_bit_template.helper")->canRender()) {
                return $this->container->get("qba_bit_template.helper")->render($view, array_merge($this->additionalParams(),$parameters), $response);
            } else
                goto render;
        } else {
            render:
            $config = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
            $parameters["config"] =$config;
            return parent::render($view, $parameters, $response);

        }
    }

    public function addFlash($type, $message, $bag = false)
    {
        // $this->get('session')->getFlashBag()->get()
        // if($bag)
        parent::addFlash($type, $message);
        /* else
         {

             $this->responseText['type'] = $type;
             if(array_key_exists('values',$this->responseText)==false)
                 $this->responseText['values'] =array();
             $this->responseText['values'][]=$message;
         }*/

    }
}
