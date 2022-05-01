<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 19/01/18
 * Time: 23:12
 */

namespace QbaBit\LanguageBundle\MenuBuilder;


use QbaBit\CoreBundle\MenuBuilder\MenuAdapter;

class Menu extends MenuAdapter
{

    public function getData()
    {
     /*   $route = $this->container->get("router")->generate("qba_bit_language_language_list");
        $array = array(array("text" => "Idiomas", "img" => "fa fa-icon", "ref" => $route, "priority" => 0, "childs" =>
            array())
        );
        $data = $this->getFromArray($array);
*/
     $data = array();
        return $data;
    }
}