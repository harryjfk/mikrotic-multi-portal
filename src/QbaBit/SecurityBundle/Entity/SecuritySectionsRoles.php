<?php

namespace QbaBit\SecurityBundle\Entity;
use QbaBit\CoreBundle\Traits\Nameable;
use QbaBit\CoreBundle\Traits\Identificable;

/**
 * SecuritySectionsRoles
 */
class SecuritySectionsRoles
{
   use Identificable,Nameable;

    /**
     * @var string
     */
    private $role;


    /**
     * @var \QbaBit\SecurityBundle\Entity\SecuritySections
     */
    private $section;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $group;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set role
     *
     * @param string $role
     *
     * @return SecuritySectionsRoles
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }



    /**
     * Set section
     *
     * @param \QbaBit\SecurityBundle\Entity\SecuritySections $section
     *
     * @return SecuritySectionsRoles
     */
    public function setSection(\QbaBit\SecurityBundle\Entity\SecuritySections $section = null)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \QbaBit\SecurityBundle\Entity\SecuritySections
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Add group
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityGroup $group
     *
     * @return SecuritySectionsRoles
     */
    public function addGroup(\QbaBit\SecurityBundle\Entity\SecurityGroup $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityGroup $group
     */
    public function removeGroup(\QbaBit\SecurityBundle\Entity\SecurityGroup $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroup()
    {
        return $this->group;
    }
}
