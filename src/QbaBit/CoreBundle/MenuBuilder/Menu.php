<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 19/01/18
 * Time: 23:12
 */

namespace QbaBit\CoreBundle\MenuBuilder;


use QbaBit\CoreBundle\MenuBuilder\MenuAdapter;

class Menu extends MenuAdapter
{

    public function getData()
    {
      //  $categorias = $this->container->get("router")->generate("qba_bit_language_language_list");
        /*$modules = $this->container->get("router")->generate("qba_bit_core_install_modules");
        $systemManager = $this->container->get("router")->generate("qba_bit_core_system_manager");

        $array = array(array("text" => "Modules", "img" => "fa fa-mail", "ref" => $modules, "priority" => 0, "childs" =>
            array()),
            array("text" => "Restaurar Sistema", "img" => "fa fa-mail", "ref" => $systemManager, "priority" => 0, "childs" =>
                array())
        );
        $data = $this->getFromArray($array);*/
        $data = array();

        return $data;
    }
}