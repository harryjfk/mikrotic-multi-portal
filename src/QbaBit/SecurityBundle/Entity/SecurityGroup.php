<?php

namespace QbaBit\SecurityBundle\Entity;
use QbaBit\CoreBundle\Traits\Identificable;
use QbaBit\CoreBundle\Traits\Nameable;

/**
 * SecurityGroup
 */
class SecurityGroup
{
   use Identificable,Nameable;

    /**
     * @var boolean
     */
    private $issystem = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Set issystem
     *
     * @param boolean $issystem
     *
     * @return SecurityGroup
     */
    public function setIssystem($issystem)
    {
        $this->issystem = $issystem;

        return $this;
    }

    /**
     * Get issystem
     *
     * @return boolean
     */
    public function getIssystem()
    {
        return $this->issystem;
    }

    /**
     * Add role
     *
     * @param \QbaBit\SecurityBundle\Entity\SecuritySectionsRoles $role
     *
     * @return SecurityGroup
     */
    public function addRole(\QbaBit\SecurityBundle\Entity\SecuritySectionsRoles $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \QbaBit\SecurityBundle\Entity\SecuritySectionsRoles $role
     */
    public function removeRole(\QbaBit\SecurityBundle\Entity\SecuritySectionsRoles $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     *
     * @return SecurityGroup
     */
    public function addUser(\QbaBit\SecurityBundle\Entity\SecurityUser $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     */
    public function removeUser(\QbaBit\SecurityBundle\Entity\SecurityUser $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
