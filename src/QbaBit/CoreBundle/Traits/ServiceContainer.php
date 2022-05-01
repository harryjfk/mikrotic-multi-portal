<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 1:43
 */

namespace QbaBit\CoreBundle\Traits;


use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

trait ServiceContainer
{
    protected $container;

    public function __construct(ContainerInterface $container =null)
    {
        $this->container = $container;

    }

    /**
     * @param $name
     * @return object
     */
    public function get($name)
   {
       return $this->container->get($name);
   }
    public function getUser()
    {
        $token = $this->container->get('security.token_storage')->getToken();
        if ($token != null)
            return $token->getUser();
        return null;
    }
    public function getIp()
    {
        return '127.0.0.1';
    }
}