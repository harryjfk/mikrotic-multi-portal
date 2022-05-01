<?php

namespace QbaBit\NautaBundle\Repository;

use QbaBit\CoreBundle\Repository\QbaBitBaseRepository;
use QbaBit\NautaBundle\Entity\NautaUserIp;

class NautaAccountsLogRepository extends QbaBitBaseRepository

{
    public function getListQuery($filter)
    {
        $query = $this->getBasicQuery(true);
        $name = "";
        if (array_key_exists("name", $filter))
            $name = $filter["name"];
        return $query->where('a.name LIKE :name')->setParameter('name', '%' . $name . '%')->getQuery();

    }
    public function getLastFromUser($user)
    {
        $query= $this->createQueryBuilder("l")->innerJoin("l.account","u");
        $query= $query->where("l.closed=false and u.nameAccount = :user")->setParameter("user",$user)->orderBy("l.id","DESC");
        $result = $query->getQuery()->getArrayResult();


        if(count($result)>0)
        {
            $data =  $result[0];
            $data["data"]=  json_decode($data["data"],true);

            return $data;
        }

        else
            return null;
    }
    public function getForzada(NautaUserIp $ip)
    {

        $query = "SELECT MAX(nauta_accounts_log.id) as id FROM `nauta_accounts_log` 
INNER JOIN nauta_accounts ON nauta_accounts.id = nauta_accounts_log.account_id
INNER JOIN security_user ON nauta_accounts.user_id = security_user.id
WHERE security_user.wlan = '".$ip->getUser()->getInterface()."' and nauta_accounts_log.closed =1 ";
        $result=   $this->getEntityManager()->getConnection()->executeQuery($query)->fetchAll();


        if(count($result)>0)
        {
$data=$result[0]["id"];
if($data!=null)
            $data =  $this->find($data);
            //$data->["data"]=  json_decode($data["data"],true);

            return $data;
        }

        else
            return null;
    }
}
