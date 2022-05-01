<?php

namespace QbaBit\NautaBundle\Tests\Admin\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use QbaBit\CoreBundle\Tests\Controller\DefaultAdminControllerTest;

class NautaUserIpControllerTest extends DefaultAdminControllerTest
{
 public function getRepository()
    {
        return 'qbabit.repository.nauta.nauta.user.ip';
    }

    public function getData($type, ContainerInterface $container)
    {
        if ($type == "deleteList")
            return parent::getData($type, $container);
        else {

                                             
$fields = array(

        
        'ip' => 'value',
            
        'user' => 'value',
    );

return array('fields' => array('qbabit_nauta_nautauserip' => $fields), 'files' => array('qbabit_nauta_nautauserip' =>array(

        
)  ));


}
}

public function getBasicUrl()
{
return array('index' => 'qbabit_admin_nauta_nauta_user_ip', 'new' => 'qbabit_admin_nauta_nauta_user_ip_new', 'edit' => 'qbabit_admin_nauta_nauta_user_ip_edit', 'delete' => 'qbabit_admin_nauta_nauta_user_ip_delete', 'deleteList' => 'qbabit_admin_nauta_nauta_user_ip_delete_list');
}

}
