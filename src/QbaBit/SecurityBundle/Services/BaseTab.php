<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 15/03/2017
 * Time: 22:43
 */

namespace QbaBit\SecurityBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\DependencyInjection\Container;

class BaseTab
{

    use ServiceContainer;

    public function getId()
    {

    }

    public function getName()
    {

    }

    public function getRendered()
    {

        $t = array_merge($this->container->get('qbabit_core.global.config')->getUsableConfig(), array('user' => $this->container->get('security.token_storage')->getToken()->getUser()));
        $t = array_merge($this->getParams(), $t);
        return $this->container->get('templating')->render($this->getRender(), $t);
    }

    public function getRender()
    {

    }

    public function getImg()
    {

    }

    public function getParams()
    {
        return array();

    }

}