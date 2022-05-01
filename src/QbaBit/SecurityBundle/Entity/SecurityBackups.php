<?php

namespace QbaBit\SecurityBundle\Entity;

/**
 * SecurityBackups
 */
class SecurityBackups
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comenten;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $filename;

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
     * Set comenten
     *
     * @param string $comenten
     *
     * @return SecurityBackups
     */
    public function setComenten($comenten)
    {
        $this->comenten = $comenten;

        return $this;
    }

    /**
     * Get comenten
     *
     * @return string
     */
    public function getComenten()
    {
        return $this->comenten;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return SecurityBackups
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
     * Set filename
     *
     * @param string $filename
     *
     * @return SecurityBackups
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     *
     * @return SecurityBackups
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
