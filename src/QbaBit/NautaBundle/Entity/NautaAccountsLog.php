<?php

namespace QbaBit\NautaBundle\Entity;
use QbaBit\CoreBundle\Traits\Identificable;use QbaBit\CoreBundle\Traits\FileUploadable;
/**
 * NautaAccountsLog
 */
class NautaAccountsLog
{
use Identificable;    /**
     * @var string
     */
    private $csrfhw;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $data;

    /**
     * @var boolean
     */
    private $closed;

    /**
     * @var \QbaBit\NautaBundle\Entity\NautaAccounts
     */
    private $account;



    /**
     * Set csrfhw
     *
     * @param string $csrfhw
     *
     * @return NautaAccountsLog
     */
    public function setCsrfhw($csrfhw)
    {
        $this->csrfhw = $csrfhw;

        return $this;
    }

    /**
     * Get csrfhw
     *
     * @return string
     */
    public function getCsrfhw()
    {
        return $this->csrfhw;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return NautaAccountsLog
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
     * Set data
     *
     * @param string $data
     *
     * @return NautaAccountsLog
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set closed
     *
     * @param boolean $closed
     *
     * @return NautaAccountsLog
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set account
     *
     * @param \QbaBit\NautaBundle\Entity\NautaAccounts $account
     *
     * @return NautaAccountsLog
     */
    public function setAccount(\QbaBit\NautaBundle\Entity\NautaAccounts $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \QbaBit\NautaBundle\Entity\NautaAccounts
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * @var \QbaBit\NautaBundle\Entity\NautaUserIp
     */
    private $lanIp;


    /**
     * Set lanIp
     *
     * @param \QbaBit\NautaBundle\Entity\NautaUserIp $lanIp
     *
     * @return NautaAccountsLog
     */
    public function setLanIp(\QbaBit\NautaBundle\Entity\NautaUserIp $lanIp = null)
    {
        $this->lanIp = $lanIp;

        return $this;
    }

    /**
     * Get lanIp
     *
     * @return \QbaBit\NautaBundle\Entity\NautaUserIp
     */
    public function getLanIp()
    {
        return $this->lanIp;
    }
    /**
     * @var \DateTime
     */
    private $forzada;


    /**
     * Set forzada
     *
     * @param \DateTime $forzada
     *
     * @return NautaAccountsLog
     */
    public function setForzada($forzada)
    {
        $this->forzada = $forzada;

        return $this;
    }

    /**
     * Get forzada
     *
     * @return \DateTime
     */
    public function getForzada()
    {
        return $this->forzada;
    }
    /**
     * @var int
     */
    private $typeClose;


    /**
     * Set forzada
     *
     * @param int $typeClose
     *
     * @return NautaAccountsLog
     */
    public function setTypeClose($typeClose)
    {
        $this->typeClose = $typeClose;

        return $this;
    }

    /**
     * Get forzada
     *
     * @return int
     */
    public function getTypeClose()
    {
        return $this->typeClose;
    }

}
