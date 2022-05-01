<?php

namespace QbaBit\SecurityBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use QbaBit\CoreBundle\Repository\QbaBitBaseRepository;
use Store\StoreBundle\Controller\ProductoController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;


class SecuritySectionsRolesRepository extends QbaBitBaseRepository
{
    public function getListQuery($filter)
    {
        $query = $this->getBasicQuery(true);

        return $query->getQuery();

    }
}
