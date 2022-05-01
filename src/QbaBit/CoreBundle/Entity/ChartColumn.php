<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 06/09/2017
 * Time: 21:12
 */

namespace QbaBit\CoreBundle\Entity;


/**
 * Class ChartColumn
 * @package QbaBit\CoreBundle\Entity
 */
class  ChartColumn
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $generated;

    /**
     * ChartColumn constructor.
     * @param string $name
     * @param string $generated
     * @param mixed $class
     * @param mixed $type
     */
    public function __construct($name, $generated =false, $class=null, $type=null)
    {
        $this->name = $name;
        $this->generated = $generated;
        $this->class = $class;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getGenerated()
    {
        return $this->generated;
    }

    /**
     * @param string $generated
     * @return ChartColumn
     */
    public function setGenerated($generated)
    {
        $this->generated = $generated;
        return $this;
    }
    /**
     * @var mixed
     */
    private $class;
    /**
     * @var mixed
     */
    private $type;

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     * @return ChartColumn
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return ChartColumn
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ChartColumn
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}