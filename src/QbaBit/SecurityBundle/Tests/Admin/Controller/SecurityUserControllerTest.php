<?php

namespace QbaBit\SecurityBundle\Tests\Admin\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use QbaBit\CoreBundle\Tests\Controller\DefaultAdminControllerTest;

class SecurityUserControllerTest extends DefaultAdminControllerTest
{
    public function getCurrentObject()
    {
        return "QbaBit\\SecurityBundle\\Entity\\SecurityUser";
    }

    public function getSectionName()
    {
        return "Usuarios";
    }

    public function getController()
    {
        return "QbaBit\SecurityBundle\Controller\Admin\UserController";
    }

    public function getData($type, ContainerInterface $container)
    {
        if ($type == "delete_list")
            return parent::getData($type, $container);
        else {


            $t_image = array();

            $t_image[] = $this->getDefaultFiles($container)["image"];

            $files_image = $this->getFiles($t_image);
            $fields = array(
                'name' => 'value',
                'firstName' => 'value',
                'secondName' => 'value',
                'username' => 'value',
                'email' => 'value@asdasd.com',
                'password' => array("first" => '123456789', "second" => '123456789'),

                'enabled' => 'true',
                'group' => array(),
                //  'slug' => 'value',
            );

            return array('fields' => array('security_user' => $fields), 'files' => array('security_user' => array(

                'path_file' => $files_image[0],


            )));


        }
    }


}
