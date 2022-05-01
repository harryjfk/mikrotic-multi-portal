<?php

namespace QbaBit\CoreBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;


class QbaBitBaseRepository extends EntityRepository
{

    public function getBasicQuery($builder = false)
    {
        if ($builder)
            return $this->createQueryBuilder('a');
        return $this->createQueryBuilder('a')->getQuery();

    }
    public function getListQuery($filter)
    {
        throw new \Exception("Sin Implementar");
    }
    public function getGraphQuery($params)
    {
        
    }
    public function getCount($builder = false)
    {
        $t = $this->getEntityName();
        $dql = "SELECT COUNT (a.id)  c from  $t a";
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute()[0]['c'];
    }

    
}
