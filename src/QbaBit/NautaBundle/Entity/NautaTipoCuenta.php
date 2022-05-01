<?php

namespace QbaBit\NautaBundle\Entity;

/**
 * NautaTipoCuenta
 */
class NautaTipoCuenta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return NautaTipoCuenta
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

    /**
     * Set date
     *
     * @param integer $date
     *
     * @return NautaTipoCuenta
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer
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
     * @return NautaTipoCuenta
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
     * Add user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     *
     * @return NautaTipoCuenta
     */
    public function addUser(\QbaBit\SecurityBundle\Entity\SecurityUser $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     */
    public function removeUser(\QbaBit\SecurityBundle\Entity\SecurityUser $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var string
     */
    private $capacity;


    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return NautaTipoCuenta
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    public function __toString()
    {
       return $this->getName();
    }
}
