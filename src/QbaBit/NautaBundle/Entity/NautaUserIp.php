<?php

namespace QbaBit\NautaBundle\Entity;
use QbaBit\CoreBundle\Traits\Identificable;use QbaBit\CoreBundle\Traits\FileUploadable;
/**
 * NautaUserIp
 */
class NautaUserIp
{
use Identificable;    /**
     * @var string
     */
    private $ip;

    /**
     * @var \QbaBit\SecurityBundle\Entity\SecurityUser
     */
    private $user;



    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return NautaUserIp
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     *
     * @return NautaUserIp
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add log
     *
     * @param \QbaBit\NautaBundle\Entity\NautaAccountsLog $log
     *
     * @return NautaUserIp
     */
    public function addLog(\QbaBit\NautaBundle\Entity\NautaAccountsLog $log)
    {
        $this->logs[] = $log;

        return $this;
    }

    /**
     * Remove log
     *
     * @param \QbaBit\NautaBundle\Entity\NautaAccountsLog $log
     */
    public function removeLog(\QbaBit\NautaBundle\Entity\NautaAccountsLog $log)
    {
        $this->logs->removeElement($log);
    }

    /**
     * Get logs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogs()
    {
        return $this->logs;
    }
}
