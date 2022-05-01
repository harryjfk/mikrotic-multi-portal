<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 15/03/2017
 * Time: 22:43
 */

namespace QbaBit\SecurityBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\DependencyInjection\Container;

class UserManager {

    use ServiceContainer;
 
    public function getUser()
    {
        if (!$this->container->has('security.token_storage')) {
            throw new \LogicException('The SecurityBundle is not registered in your application.');
        }

        if (null === $token = $this->container->get('security.token_storage')->getToken()) {
            return;
        }

        if (!is_object($user = $token->getUser())) {
            // e.g. anonymous authentication
            return;
        }

        return $user;
    }

    public function setUserPassword($entity, $passOriginal)
    {

        if ($entity->getPassword() != NULL) {
            //cifrando la contraseña
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($entity);
            $salt = sha1(time() . rand(1, 999999));
            $entity->setSalt($salt);
            $passCodif = $encoder->encodePassword($entity->getPassword(), $salt);

            $entity->setPassword($passCodif);
            //fin cifrando la contraseña
        } else {
            $entity->setPassword($passOriginal);

        }
    }
}