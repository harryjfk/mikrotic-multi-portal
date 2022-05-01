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

class MenuExtension extends \Twig_Extension
{

    use ServiceContainer;

    public function getFunctions()
    {

        return array(
            new \Twig_SimpleFunction('QbRenderMenu', array($this, 'renderMenu'), array('is_safe' => array('html'))),
        );
    }


    public function renderMenu()
    {
        $config = $this->container->get('qba_bit_core.global.utils');

        $modules = $config->getQbaBitModules();

        $res = new ArrayCollection();

        foreach ($modules as $s) {
            $menu = $s->getMenu();
            if ($menu != null)
                $res->add($menu);
        }

          /*foreach ($res as $t)
              $t->getData();*/
        $template = $this->container->get("qba_bit_template.helper")->getDefaultTemplate();
        $config = $template->getConfig()["menu"]["render"];
        return $this->container->get("templating")->render($config, array("data" => $res, "request" => $this->container->get("request_stack")->getCurrentRequest()));


    }

    public function getName()
    {
        return 'QbRenderMenu';
    }


}