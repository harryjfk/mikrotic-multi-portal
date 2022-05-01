<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 2:33
 */

namespace QbaBit\CoreBundle\Traits;

/**
 * Class DateRangeable
 * @package QbaBit\CoreBundle\Traits
 * @fields{rangeStart,rangeEnd}
 *
 */
trait DateRangeable {
    /**
     * @var \DateTime
     */
    protected $rangeStart;

    /**
     * @var \DateTime
     */
    protected $rangeEnd;


    /**
     * Set rangeStart
     *
     * @param \DateTime $rangeStart
     *
     * @return DateRangeable
     */
    public function setRangeStart($rangeStart)
    {
        $this->rangeStart = $rangeStart;

        return $this;
    }

    /**
     * Get rangeStart
     *
     * @return \DateTime
     */
    public function getRangeStart()
    {
        return $this->rangeStart;
    }

    /**
     * Set rangeEnd
     *
     * @param \DateTime $rangeEnd
     *
     * @return DateRangeable
     */
    public function setRangeEnd($rangeEnd)
    {
        $this->rangeEnd = $rangeEnd;

        return $this;
    }

    /**
     * Get rangeEnd
     *
     * @return \DateTime
     */
    public function getRangeEnd()
    {
        return $this->rangeEnd;
    }

}