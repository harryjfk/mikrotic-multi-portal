<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 12/09/2017
 * Time: 11:44
 */

namespace QbaBit\CoreBundle\Entity;


class Reflection extends \ReflectionClass
{
    /**
     * @return \ReflectionProperty A
     */
    public function getProperty($name)
    {
        $classes = $this->getParentClasses();
        for ($i=0;$i<count($classes);$i++ )
        {
            $class = $classes[$i];
            if($i==0)
            {
                if($class->hasInheritedProperty($name))
                    return  $class->getInheritedProperty($name);
            }
            else
                if ($class->hasProperty($name))
                    return $class->getProperty($name);
        }
        
        return null;
    }

    private function getInheritedProperty($name)
    {
        return parent::getProperty($name);
    }
    private function hasInheritedProperty($name)
    {
        return parent::hasProperty($name);
    }
    /**
     * @return \ReflectionClass []
     */
    public function getTraits()
    {
        $result = array();
        $t = $this;
        $result = array_merge($result, parent::getTraits());
        while ($t->getParentClass() != null) {
            $t = $t->getParentClass();
            $result = array_merge($result, $t->getTraits());
        }
        return $result;
    }

    /**
     * @return array
     */
    public function getTraitNames()
    {
        $result = array();
        $t = $this;
        $result = array_merge($result, parent::getTraitNames());
        while ($t->getParentClass() != null) {
            $t = $t->getParentClass();
            $result = array_merge($result, $t->getTraitNames());
        }
        return $result;
    }

    /**
     * @param null $filter
     * @return \ReflectionMethod[]
     */
    public function getMethods($filter = null)
    {
        $result = array();
        $result = array_merge($result, parent::getMethods());
        $t = $this;
        while ($t->getParentClass() != null) {
            $t = $t->getParentClass();
            $result = array_merge($result, $t->getMethods());
        }

        return $result;


    }

    /**
     * @return \ReflectionClass[]
     */
    public function getParentClasses()
    {
        $result = array();
        $result[] = $this;
        $t = $this;
        while ($t->getParentClass() != null) {
            $t = $t->getParentClass();
            $result[] = $t;
        }

        return $result;


    }

    /**
     * @return array
     */
    public function getParentClassesNames()
    {
        $result = array();
        foreach ($this->getParentClasses() as $class)
            $result[] = $class->getName();


        return $result;


    }

}