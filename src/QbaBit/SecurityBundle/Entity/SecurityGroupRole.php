<?php

namespace QbaBit\SecurityBundle\Entity;

/**
 * SecurityGroupRole
 */
class SecurityGroupRole
{
    /**
     * @var string
     */
    private $role = '';

    /**
     * @var \QbaBit\SecurityBundle\Entity\SecurityGroup
     */
    private $group;


    /**
     * Set role
     *
     * @param string $role
     *
     * @return SecurityGroupRole
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
     * Set group
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityGroup $group
     *
     * @return SecurityGroupRole
     */
    public function setGroup(\QbaBit\SecurityBundle\Entity\SecurityGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \QbaBit\SecurityBundle\Entity\SecurityGroup
     */
    public function getGroup()
    {
        return $this->group;
    }
}
