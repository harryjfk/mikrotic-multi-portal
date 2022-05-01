<?php

namespace QbaBit\NautaBundle\MenuBuilder;

use QbaBit\CoreBundle\MenuBuilder\MenuAdapter;

class AdminMenu extends MenuAdapter
{


    public function getData()
    {
        $array = array();
        $array[] = array("text" => "qba_bit.nauta.nauta_tipo_cuenta.text", "img" => "fa  fa-tag", "ref" => $this->container->get("router")->generate("qba_bit_nauta_nauta_tipo_cuenta_list"), "priority" => 0, "childs" =>
            array());
        $array[] = array("text" => "qba_bit.nauta.nauta_options.text", "img" => "fa  fa-gears ", "ref" => $this->container->get("router")->generate("qba_bit_nauta_nauta_options"), "priority" => 0, "childs" =>
            array());
        /*$array[] = array("text" => "qba_bit.nauta.nauta_accounts.text", "img" => "fa fa-share", "ref" => $this->container->get("router")->generate("qba_bit_nauta_nauta_accounts_list"), "priority" => 0, "childs" =>
            array());
        $array[] = array("text" => "qba_bit.nauta.nauta_user_ip.text", "img" => "fa fa-share", "ref" => $this->container->get("router")->generate("qba_bit_nauta_nauta_user_ip_list"), "priority" => 0, "childs" =>
            array());
        $array[] = array("text" => "qba_bit.nauta.nauta_accounts_log.text", "img" => "fa fa-share", "ref" => $this->container->get("router")->generate("qba_bit_nauta_nauta_accounts_log_list"), "priority" => 0, "childs" =>
            array());*/

        $array=  $this->getFromArray($array);
        return $array;
    }

}
