<?php

namespace QbaBit\LanguageBundle\Tests\Admin\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use QbaBit\CoreBundle\Tests\Controller\DefaultAdminControllerTest;

class LanguageControllerTest extends DefaultAdminControllerTest
{
    public function getCurrentObject()
    {
        return "QbaBit\\LanguageBundle\\Entity\\Language";
    }
    public function getSectionName()
    {
        return "Idiomas";
    }
    public function getController()
    {
        return "QbaBit\LanguageBundle\Controller\Admin\LanguageController";
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
                "shortcode" =>"ER",
                "longcode"=>"ER",
                 "image_file"=> '',
               // 'location' =>$container->get("qbabit.repository.locations")->findAll()[0]->getId(),
                'enabled' => 'true',

            );

            return array('fields' => array('language' => $fields), 'files' => array('language' => array(

                'image_file' => $files_image[0],


            )));


        }
    }



}
