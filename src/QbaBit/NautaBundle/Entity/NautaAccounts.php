<?php

namespace QbaBit\NautaBundle\Entity;
use QbaBit\CoreBundle\Traits\Identificable;use QbaBit\CoreBundle\Traits\FileUploadable;
/**
 * NautaAccounts
 */
class NautaAccounts
{
use Identificable;    /**
     * @var string
     */
    private $nameAccount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logs;

    /**
     * @var \QbaBit\SecurityBundle\Entity\SecurityUser
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logs = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nameAccount
     *
     * @param string $nameAccount
     *
     * @return NautaAccounts
     */
    public function setNameAccount($nameAccount)
    {
        $this->nameAccount = $nameAccount;

        return $this;
    }

    /**
     * Get nameAccount
     *
     * @return string
     */
    public function getNameAccount()
    {
        return $this->nameAccount;
    }

    /**
     * Add log
     *
     * @param \QbaBit\NautaBundle\Entity\NautaAccountsLog $log
     *
     * @return NautaAccounts
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

    /**
     * Set user
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityUser $user
     *
     * @return NautaAccounts
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
