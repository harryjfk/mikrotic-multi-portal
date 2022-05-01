<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 21/01/18
 * Time: 23:11
 */

namespace QbaBit\SecurityBundle\MenuBuilder;


use QbaBit\CoreBundle\MenuBuilder\MenuAdapter;

class Menu extends MenuAdapter
{

    public function getData()
    {
        $user = $this->container->get("router")->generate("qba_bit_security_security_user_list");
        $groups = $this->container->get("router")->generate("qba_bit_security_security_group_list");
        $array = array(array("text" => "Usuarios", "img" => "fa fa-user", "ref" => $user, "priority" => 0, "childs" =>
            array()),
            array("text" => "Grupos de usuarios", "img" => "fa fa-users", "ref" => $groups, "priority" => 0, "childs" =>
                array())
        );
        $data = $this->getFromArray($array);

        return $data;

    }
}