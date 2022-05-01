<?php

namespace QbaBit\NautaBundle\Entity;

/**
 * NautaBilling
 */
class NautaBilling
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var \QbaBit\SecurityBundle\Entity\SecurityUser
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return NautaBilling
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return NautaBilling
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     *
     * @return NautaBilling
     */
    public function setUser(\QbaBit\SecurityBundle\Entity\SecurityUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \QbaBit\SecurityBundle\Entity\SecurityUser
     */
    public function getUser()
    {
        return $this->user;
    }
}
