<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 18/01/18
 * Time: 21:19
 */

namespace QbaBit\CoreBundle\MenuBuilder;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Traits\ServiceContainer;

class MenuAdapter
{
    use ServiceContainer;

    private function insertAfter($result, $item)
    {
        $index = -1;
        for ($i = 0; $i < count($result); $i++)
            if ($result[$i]["priority"] > $item["priority"]) {
                $index = $i;
                break;
            }

        $r = array();
        if ($index == -1) {
            $r = $result;
            $r[] = $item;
        } else {
            for ($i = 0; $i < $index; $i++)
                $r[] = $result[$i];
            $r[] = $item;
            for ($i = $index; $i < count($result); $i++)
                $r[] = $result[$i];
        }

        return $r;
    }

    private function getOrderByPriority($array)
    {
        $result = array();
        foreach ($array as $t)
            $result = $this->insertAfter($result, $t);
        return $result;

    }

    public function getFromArray($array, MenuItem $parent = null)
    {
        $array = $this->getOrderByPriority($array);
        if ($parent == null)
            $result = new ArrayCollection();
        foreach ($array as $item) {

            $menu = new MenuItem($item);
            $menu->setParent($parent);


            if (count($item["childs"]) > 0)
                $this->getFromArray($item["childs"], $menu);
            if ($parent == null)
                $result->add($menu);
        }

        if ($parent == null)
            return $result;


    }

    public function getFromDB($tableName, $id_field = "id", $text_field = "name", $parent_field = "parent", $childs_field = "childs", $priority_field = "priority", $ref_field = "ref", $callback = null)
    {
        $t = $this->container->get("doctrine.orm.default_entity_manager")->getRepository($tableName)->findBy(array($parent_field => null));
        $data = $this->getDBAsArray($t, $id_field, $text_field, $parent_field, $childs_field, $priority_field, $ref_field, $callback);
        $data = $this->getFromArray($data);
        return $data;

    }

    protected function getDBAsArray($collection, $id_field, $text_field, $parent_field, $childs_field, $priority_field, $ref_field, $callback)
    {

        $result = array();
        foreach ($collection as $item) {
            $t = array();
            $r = new Reflection($item);
            $text = "get" . ucfirst($text_field) . "";
            $m = $r->getMethod($text);
            if ($m != null)
                $t["text"] = $m->invoke($item);
            $priority = "get" . ucfirst($priority_field) . "";
            $m = $r->getMethod($priority);
            if ($m != null)
                $t["priority"] = $m->invoke($item);
            $ref = "get" . ucfirst($ref_field) . "";
            $m = $r->hasMethod($ref);
            if ($m) {
                $m = $r->getMethod($ref);
                $t["ref"] = $m->invoke($item);
            } else
                $t["ref"] = $callback($item, $this->container);

            $childs = "get" . ucfirst($childs_field) . "";
            $m = $r->getMethod($childs);
            if ($m != null) {

                $childs = $m->invoke($item);

                $t["childs"] = $this->getDBAsArray($childs, $id_field, $text_field, $parent_field, $childs_field, $priority_field, $ref_field, $callback);
            } else
                $t["childs"] = array();

            $result[] = $t;
        }
        return $result;


    }

    public function getData()
    {

    }
}