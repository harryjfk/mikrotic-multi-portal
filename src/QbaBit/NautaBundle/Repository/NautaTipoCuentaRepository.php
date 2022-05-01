<?php

namespace QbaBit\NautaBundle\Repository;

use QbaBit\CoreBundle\Repository\QbaBitBaseRepository;

/**
 * NautaTipoCuentaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NautaTipoCuentaRepository extends QbaBitBaseRepository
{

    public function getListQuery($filter)
    {
        $query = $this->getBasicQuery(true);
        $name = "";
        if (array_key_exists("name", $filter))
            $name = $filter["name"];
        return $query->where('a.name LIKE :name')->setParameter('name', '%' . $name . '%')->getQuery();

    }
}
