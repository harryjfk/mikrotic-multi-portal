<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 1:43
 */

namespace QbaBit\CoreBundle\Traits;

/**
 * Class Enableable
 * @package QbaBit\CoreBundle\Traits
 * @fields{enabled}
 *
 */
trait Enableable {
    /**
     * @var boolean
     */
    protected $enabled;
    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Enableable
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}