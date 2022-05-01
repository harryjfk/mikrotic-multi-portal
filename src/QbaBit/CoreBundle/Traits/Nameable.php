<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 2:33
 */

namespace QbaBit\CoreBundle\Traits;

/**
 * Class Nameable
 * @package QbaBit\CoreBundle\Traits
 * @fields{name}
 *
 */
trait Nameable {

    /**
     * 
     * @var string
     */
    protected $name;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Nameable
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
       if($this->name==null)
           return "";
        return $this->name;
    }
}