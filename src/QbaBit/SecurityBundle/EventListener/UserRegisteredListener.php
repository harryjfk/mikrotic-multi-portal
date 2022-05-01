<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 29/10/2016
 * Time: 16:54
 */

namespace QbaBit\SecurityBundle\EventListener;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Traits\DateRegistrable;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\SecurityBundle\EventListener\UserEvent;
use QbaBit\SecurityBundle\EventListener\UserEvents;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Validator\Constraints\DateTime;


class UserRegisteredListener implements EventSubscriberInterface
{
    use ServiceContainer;
    public static function getSubscribedEvents()
    {
        return array(

            UserEvents::USER_REGISTRED => array(array('onUserRegistered', 10)),
        );
    }

    public function onUserRegistered(UserEvent $event)
    {
        $event->getUser()->setDateCreated(new \DateTime());
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $em->persist($event->getUser());
        $em->flush();

       /* $url=$this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
        $url=($url["app"]["index_url"]);

        $this->get('qba_bit_mail.sender')->System('system_registration', array('activate_url' => $url, "customer_user"=>$event->getUser()->getEmail(),"customer_fullname"=>$event->getUser()->getFullName() ), $event->getUser()->getEmail());
*/

    }

}