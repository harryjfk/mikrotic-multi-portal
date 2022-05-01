<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 2:33
 */

namespace QbaBit\CoreBundle\Traits;

/**
 * Class Identificable
 * @package QbaBit\CoreBundle\Traits
 * @fields{id}
 * 
 */
trait Identificable {
    /**
     * @var integer
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}