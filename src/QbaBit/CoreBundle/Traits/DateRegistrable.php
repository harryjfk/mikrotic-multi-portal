<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 1:42
 */

namespace QbaBit\CoreBundle\Traits;
/**
 * Class DateRegistrable
 * @package QbaBit\CoreBundle\Traits
 * @fields{dateCreated,dateModified}
 *
 */

trait DateRegistrable {

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateModified;


    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return DateRegistrable
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return DateRegistrable
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}