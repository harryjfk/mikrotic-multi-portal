<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 25/09/2017
 * Time: 4:31
 */

namespace QbaBit\SecurityBundle\EventListener;



use QbaBit\SecurityBundle\Entity\SecurityUser;

use Symfony\Component\EventDispatcher\Event;

class UserEvent extends Event
{
    protected $user;


    /**
     * Constructs an event.
     *
     * @param SecurityUser $orders The associated form
     *
     */
    public function __construct(SecurityUser $user)
    {
        $this->user = $user;
     
    }

    /**
     * Returns the form at the source of the event.
     *
     * @return SecurityUser
     */
    public function getUser()
    {
        return $this->user;
    }

  
}
