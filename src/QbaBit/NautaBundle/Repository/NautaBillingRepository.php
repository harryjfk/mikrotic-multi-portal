<?php

namespace QbaBit\NautaBundle\Repository;

use QbaBit\CoreBundle\Repository\QbaBitBaseRepository;

/**
 * NautaBillingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NautaBillingRepository extends QbaBitBaseRepository
{

    public function getBasicQuery($builder = false)
    {
        return parent::getBasicQuery($builder); // TODO: Change the autogenerated stub
    }

    public function getGraphQuery($params)
    {
        if (array_key_exists("payments", $params)) {
            $query = 'SELECT security_user.name, nauta_billing.amount as value, MONTH(nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_group.name != "Administrador" and security_group.name != "Grupos de usuario"        ';

        } else
            if (array_key_exists("missing_month", $params)) {
                $query =
                    'SELECT su.id, su.name,IF(nauta_tipo_cuenta.name="Compartido",IF((SELECT
COUNT(nauta_user_ip.user_id)
FROM
nauta_user_ip
WHERE nauta_user_ip.user_id = su.id )%2=0,(SELECT
COUNT(nauta_user_ip.user_id)
FROM
nauta_user_ip
WHERE nauta_user_ip.user_id = su.id ),(SELECT
COUNT(nauta_user_ip.user_id)+1
FROM
nauta_user_ip
WHERE nauta_user_ip.user_id = su.id ))/2*nauta_tipo_cuenta.amount,nauta_tipo_cuenta.amount) as value,
IF(
DATE_ADD((SELECT MAX( nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_user.id= su.id), INTERVAL 1 MONTH)  IS NULL, su.date_created,
    DATE_ADD((SELECT MAX( nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_user.id= su.id), INTERVAL 1 MONTH)) as last_time
    
    
    
    FROM `security_user` as su INNER JOIN nauta_tipo_cuenta ON su.account_type_id = nauta_tipo_cuenta.id INNER JOIN security_user_group ON su.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id
WHERE (ABS(datediff((SELECT MAX( nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_user.id= su.id) , NOW()))>=nauta_tipo_cuenta.date-(nauta_tipo_cuenta.date - DAY(LAST_DAY(DATE_ADD((SELECT MAX( nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_user.id= su.id), INTERVAL 1 MONTH))))OR datediff((SELECT MAX( nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_user.id= su.id) , NOW()) IS NULL) and security_group.name != "Administrador" and security_group.name != "Grupos de usuario" ';
            }
            else
                if (array_key_exists("admins", $params)) {
$admins= 'SELECT security_user.name,security_user.id,security_user.percent FROM `security_user` INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_group.name = "Administrador"';
                    $billings = 'SELECT security_user.name,security_user.only_harry, nauta_billing.amount as value, MONTH(nauta_billing.date)as system_month FROM security_user INNER JOIN security_user_group ON security_user.id = security_user_group.user_id INNER JOIN security_group ON security_user_group.group_id = security_group.id LEFT JOIN nauta_billing ON nauta_billing.user_id = security_user.id WHERE security_group.name != "Administrador" and security_group.name != "Grupos de usuario"        ';
                    $b = $this->getEntityManager()->getConnection()->executeQuery($billings)->fetchAll();
                    $ad = $this->getEntityManager()->getConnection()->executeQuery($admins)->fetchAll();

                    $month =array();
                    $result1 = array();


                    foreach ($ad as $t)
                    {
                        $r = array("name"=>$t["name"],"system_month" =>array());

                        foreach ($b as $w)
                        {
                            $v1=  floatval($w["value"]);
                            if(($w["only_harry"]==true && ($t["id"]==4 || $t["id"]==8 )))
                            {
                                if($t["id"]==4)
                                $p = 90;
                                else
                                    $p = 10;
                                $v= $p*$v1/100;
                            }

                            else
                                if($w["only_harry"]==true)
                                $v=0;
                            else
                            {
                                $p = $t["percent"];
                                $v= $p*$v1/100;
                            }

                            if(array_key_exists($w["system_month"],$r["system_month"]))
                                $r["system_month"][$w["system_month"]]+=$v;
                            else
                                $r["system_month"][$w["system_month"]]=$v;
                        }

                        $result1[] = $r;

                    }

                    $result = array();
                    foreach ($result1 as $t)
                    {
                        foreach ($t["system_month"] as $k=>$month)
                        {
                            $result[] = array("name"=> $t["name"],"system_month"=>$k,"value"=>$month);}
                    }


                    return $result;


                }
        $result = $this->getEntityManager()->getConnection()->executeQuery($query)->fetchAll();

        return $result;

    }


}
