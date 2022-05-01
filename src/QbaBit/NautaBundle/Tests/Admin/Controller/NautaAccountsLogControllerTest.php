<?php

namespace QbaBit\NautaBundle\Tests\Admin\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use QbaBit\CoreBundle\Tests\Controller\DefaultAdminControllerTest;

class NautaAccountsLogControllerTest extends DefaultAdminControllerTest
{
 public function getRepository()
    {
        return 'qbabit.repository.nauta.nauta.accounts.log';
    }

    public function getData($type, ContainerInterface $container)
    {
        if ($type == "deleteList")
            return parent::getData($type, $container);
        else {

                                                                                                   
$fields = array(

        
        'csrfhw' => 'value',
            
        'ip' => 'value',
            
        'data' => 'value',
            
        'closed' => '1',
            
        'account' => 'value',
    );

return array('fields' => array('qbabit_nauta_nautaaccountslog' => $fields), 'files' => array('qbabit_nauta_nautaaccountslog' =>array(

                    
)  ));


}
}

public function getBasicUrl()
{
return array('index' => 'qbabit_admin_nauta_nauta_accounts_log', 'new' => 'qbabit_admin_nauta_nauta_accounts_log_new', 'edit' => 'qbabit_admin_nauta_nauta_accounts_log_edit', 'delete' => 'qbabit_admin_nauta_nauta_accounts_log_delete', 'deleteList' => 'qbabit_admin_nauta_nauta_accounts_log_delete_list');
}

}
