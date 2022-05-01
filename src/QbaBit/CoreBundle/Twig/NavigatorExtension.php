<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 14/01/2017
 * Time: 21:30
 */

namespace QbaBit\CoreBundle\Twig;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Traits\ServiceContainer;

class NavigatorExtension extends \Twig_Extension
{

    use ServiceContainer;

    public function getFunctions()
    {

        return array(
            new \Twig_SimpleFunction('QbRenderNavigator', array($this, 'renderNavigator'), array('is_safe' => array('html'))),
        );
    }


    public function renderNavigator()
    {
        $config = $this->container->get('qba_bit_core.global.utils');
        $modules = $config->getQbaBitModules();
        $res = new ArrayCollection();
        foreach ($modules as $s) {
            $menu = $s->getNavigator();
            if ($menu != null)

                $res->add($menu);
        }
        for ($i = 0; $i < $res->count() - 1; $i++)
            for ($k = $i; $k < $res->count(); $k++)
                if ($res[$i]["priority"] > $res[$k]["priority"]) {
                    $temp = $res[$i];
                    $res[$i] = $res[$k];
                    $res[$k] = $temp;
                }


        $html = "";
        foreach ($res as $t) {
            $router = $this->container->get('router')->getRouteCollection()->get($t["render"]);
            if($router!=null)
            {
                $controller = $router->getDefault("_controller");
                $s = $this->container->get("qba_bit_template.helper")->renderController($controller, array());

                $html .= $s->getContent();

            }

        }
        return $html;

    }

    public function getName()
    {
        return 'QbRenderNavigator';
    }


}