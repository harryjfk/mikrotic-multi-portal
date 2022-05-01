<?php

namespace QbaBit\NautaBundle\Repository;

use QbaBit\CoreBundle\Repository\QbaBitBaseRepository;

class NautaUserIpRepository extends QbaBitBaseRepository

{
    public function getListQuery($filter)
    {
        $query = $this->getBasicQuery(true);
        $name = "";
        if (array_key_exists("name", $filter))
            $name = $filter["name"];
        return $query->where('a.name LIKE :name')->setParameter('name', '%' . $name . '%')->getQuery();

    }
    public function hasUserFromIp($ip)
    {

        $query = $this->getBasicQuery(true);
        $query = $query->where("a.ip = :ip")->setParameter("ip",$ip);
        $result = $query->getQuery()->getResult();

       if( count($result)>0)
       return $result[0];
       return null;

    }
    public function getIpFromWlan($wlan)
    {
        $query = $this->getBasicQuery(true);
        $query = $query->innerJoin("a.user","u")->where("u.interface = :wlan")->setParameter("wlan",$wlan);
        return $query->getQuery()->getResult();


    }
}
