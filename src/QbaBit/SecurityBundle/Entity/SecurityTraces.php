<?php

namespace QbaBit\SecurityBundle\Entity;

/**
 * SecurityTraces
 */
class SecurityTraces
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $table;

    /**
     * @var string
     */
    private $record;

    /**
     * @var string
     */
    private $observation;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $metaData;


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
     * Set userId
     *
     * @param string $userId
     *
     * @return SecurityTraces
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return SecurityTraces
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return SecurityTraces
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
     * Set table
     *
     * @param string $table
     *
     * @return SecurityTraces
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get table
     *
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set recordId
     *
     * @param string $recordId
     *
     * @return SecurityTraces
     */
    public function setRecord($record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Get recordId
     *
     * @return string
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return SecurityTraces
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return SecurityTraces
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
     * Set metaData
     *
     * @param string $metaData
     *
     * @return SecurityTraces
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;

        return $this;
    }

    /**
     * Get metaData
     *
     * @return string
     */
    public function getMetaData()
    {
        return $this->metaData;
    }
}
