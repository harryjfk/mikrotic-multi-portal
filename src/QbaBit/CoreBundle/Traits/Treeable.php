<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 1:43
 */

namespace QbaBit\CoreBundle\Traits;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\Reflection;

/**
 * Class Treeable
 * @package QbaBit\CoreBundle\Traits
 * @fields{parent,childs}
 *
 */
trait Treeable
{
  
    /**
     * @var
     */
    protected $parent;

  
    /**
     * Set parentId
     *
     * @param  $parentId
     *
     * @return Treeable
     */
    public function setParent($parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $childs;


    /**
     * Add child
     *
     * @param  $child
     *
     * @return Treeable
     */
    public function addChild($child)
    {
        $this->childs->add($child);
    

        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->childs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Remove child
     *
     * @param var $child
     */
    public function removeChild($child)
    {
        $this->childs->removeElement($child);
    }

    /**
     * Get childs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChilds()
    {
        return $this->childs;
    }

    /**
     * Get childs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildsAvoided($avoid)
    {
        $t = new ArrayCollection();
        foreach ($this->childs as $w)

            if ($w->getId() != $avoid)
                $t->add($w);

        return $t;
    }

    /**
     * @param $type integer
     * @param $include bool
     * @return ArrayCollection
     */
    //$type :1 padres 2: hijos
    //$inverser convierte el arreglo como un arreglo de tipo arbol
    public function getTree($type, $include, $inverse = null)
    {
        $r = new ArrayCollection();
        if ($type == 0)//padre
        {

            $p = $include == true ? $this : $this->getParent();
            while ($p != null) {

                $r->add($p);
                $p = $p->getParent();
            }


        }
        if ($inverse == true) {
            $w = new ArrayCollection();
            for ($i = $r->count() - 1; $i >= 0; $i--)
                $w->add($r[$i]);
            $r = $w;
        }


        return $r;
    }

    public function asTreeJson()
    {
        $result = array('name' => $this->getName(), 'id' => $this->getId());
        $childs = array();
        foreach ($this->childs as $c)
            $childs[] = $c->asTreeJson();
        $result['children'] = $childs;
        return $result;
    }
    // $type (0:padres,1:hijos,2:todo)
    //$include incluye al current en la devolucion
    //$type_info 0:string 1:array(editar) 2:array()
    public function getTreeInfo($type, $include, $type_info)
    {

        if ($type_info == 2) {
            $result = null;
            if ($include == true)
                $result = $this->asTreeJson();
            else {
                $result = array();
                foreach ($this->childs as $c)
                    $result[] = $c->asTreeJson();
            }

            return json_encode($result);
        } else {


            $array = $this->getTree($type, $include);
            if ($type_info == 0) {
                $res = "";
                foreach ($array as $data)
                    $res = $data->getId() . '.' . $res;

                if ($res[strlen($res) - 1] == '.')
                    $res = substr($res, 0, strlen($res) - 1);
                return $res;
            } else
                if ($type_info == 1) {
                    $res = array();
                    for ($i = $array->count() - 1; $i >= 0; $i--) {
                        $data = $array[$i];

                        $res[] = array('value' => $data->getId(), 'label' => $data->getName());
                    }

                    return json_encode($res);
                }
        }

    }

    public function findChildByValue($value)
    {

        foreach ($this->childs as $child)
            if ($child->getId() == $value)
                return $child;
        foreach ($this->childs as $child) {
            $r = $child->findChildByValue($value);
            if ($r != null)
                return $r;
        }

        return null;
    }

    public function getChildFromTree($tree, $avoid)
    {
        $p = $this;

        foreach ($tree as $t) {

            $c = $p->findChildByValue($t);
            if ($c == null)
                return null;
            else
                $p = $c;

        }

        return $p;
    }

    public function getCountOfProperty($property, $all)
    {
        $reflection = new Reflection($this);
        $p = ucwords($property);

        $method = $reflection->getMethod('get' . $p);
        $base = $method->invoke($this)->count();

        //   echo json_encode($base);
        return $base;
    }

    public function getLength()
    {
        if ($this->getParent() == null)
            return 0;
        else
            return $this->getParent()->getLength() + 1;
    }

}