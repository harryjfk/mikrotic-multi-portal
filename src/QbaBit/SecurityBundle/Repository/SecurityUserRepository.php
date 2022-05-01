<?php

namespace QbaBit\SecurityBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NoResultException;
use QbaBit\CoreBundle\Repository\QbaBitBaseRepository;

use QbaBit\SecurityBundle\Entity\SecurityUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;


class SecurityUserRepository extends QbaBitBaseRepository
{
    public function getListQuery($filter)
    {
        $query = $this->getBasicQuery(true);
        $name = "";
        $mail = "";
        $telFijo = "";
        $telMovil = "";
        if (array_key_exists("nombre", $filter))
            $name = $filter["nombre"];
        if (array_key_exists("email", $filter))
            $mail = $filter["email"];
        if (array_key_exists("telFijo", $filter))
            $telFijo = $filter["telFijo"];
        if (array_key_exists("telMovil", $filter))
            $telMovil = $filter["telMovil"];
        if ($name != "")
            $query = $query->andWhere('a.name LIKE :name ')->setParameter('name', '%' . $name . '%');
        if ($mail != "")
            $query = $query->andWhere('a.email LIKE :email ')->setParameter('email', '%' . $mail . '%');
        if ($telFijo != "")
            $query = $query->andWhere('a.fixPhone LIKE :telFijo ')->setParameter('telFijo', '%' . $telFijo . '%');
        if ($telMovil != "")
            $query = $query->andWhere('a.movilPhone LIKE :telMovil ')->setParameter('telMovil', '%' . $telFijo . '%');

        return $query->getQuery();
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        $q = $this
            ->createQueryBuilder('u')
            ->select('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery();

        try {
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            //devuelvo una instancia del usuario vacía si no se ha encontrado para que no de error
            $user = new SecurityUser();
        }

        return $user;
    }

    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @param UserInterface $user
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(sprintf('La instancia de "%s" no está soportada.', $class));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * Whether this provider supports the given user class.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
    }


    public function isUnique(SecurityUser $user)
    {
        $username = $this->findOneBy(array('username' => $user->getUsername()));
        $mail = $this->findOneBy(array('email' => $user->getEmail()));

        return count($username) == 0 and (count($mail) == 0);
    }

}
