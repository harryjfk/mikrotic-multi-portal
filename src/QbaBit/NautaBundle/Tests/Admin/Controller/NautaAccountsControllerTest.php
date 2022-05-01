<?php

namespace QbaBit\NautaBundle\Tests\Admin\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use QbaBit\CoreBundle\Tests\Controller\DefaultAdminControllerTest;

class NautaAccountsControllerTest extends DefaultAdminControllerTest
{
 public function getRepository()
    {
        return 'qbabit.repository.nauta.nauta.accounts';
    }

    public function getData($type, ContainerInterface $container)
    {
        if ($type == "deleteList")
            return parent::getData($type, $container);
        else {

                                                               
$fields = array(

        
        'nameAccount' => 'value',
            
        'logs' => 'value',
            
        'user' => 'value',
    );

return array('fields' => array('qbabit_nauta_nautaaccounts' => $fields), 'files' => array('qbabit_nauta_nautaaccounts' =>array(

            
)  ));


}
}

public function getBasicUrl()
{
return array('index' => 'qbabit_admin_nauta_nauta_accounts', 'new' => 'qbabit_admin_nauta_nauta_accounts_new', 'edit' => 'qbabit_admin_nauta_nauta_accounts_edit', 'delete' => 'qbabit_admin_nauta_nauta_accounts_delete', 'deleteList' => 'qbabit_admin_nauta_nauta_accounts_delete_list');
}

}
