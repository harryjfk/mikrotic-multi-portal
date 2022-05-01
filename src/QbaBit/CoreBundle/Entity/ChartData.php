<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 06/09/2017
 * Time: 20:03
 */

namespace QbaBit\CoreBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class ChartData
 * @package QbaBit\CoreBundle\Entity
 */
class ChartData
{

    /**
     * @var ArrayCollection
     */
    private $columns;
    /**
     * @var ChartColumn
     */
    private $masterColumn;
    /**
     * @var array
     */
    private $data;

    /**
     * ChartData constructor.
     */
    public function __construct()
    {
        $this->columns = new ArrayCollection();
        $this->data = array();
    }

    /**
     * @return mixed
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param mixed $columns
     * @return ChartData
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMasterColumn()
    {
        return $this->masterColumn;
    }

    /**
     * @param ChartColumn $masterColumn
     * @return ChartData
     */
    public function setMasterColumn(ChartColumn $masterColumn)
    {
        $this->masterColumn = $masterColumn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return ChartData
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function hasColumn($name)
    {
        foreach ($this->columns as $t)
            if($t->getName()==$name)
                return true;
        return false;
    }
    public function addColumn($name,$generated=false, $class = null, $type = null,$master=false)
    {
       if(!$this->hasColumn($name))
       { $t = new ChartColumn($name,$generated,$class,$type);
        if ($master)
            $this->setMasterColumn($t);

        $this->columns->add($t);}
    }

    public function addRow($array)
    {
        $this->data[] = $array;
    }
}
