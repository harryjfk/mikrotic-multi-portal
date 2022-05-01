<?php

namespace QbaBit\NautaBundle\Tests\FrontEnd\Controller;

use QbaBit\CoreBundle\Tests\Controller\DefaultFrontEndControllerTest;
use Symfony\Component\DependencyInjection\ContainerInterface;

class NautaAccountsControllerTest extends DefaultFrontEndControllerTest
{
public function getBasicUrl()
    {
        return array('index' => 'qbabit_nauta_nauta_accounts');
}
protected function getUrlParams($type, ContainerInterface $container)
{
$urls = $this->getBasicUrl();

if ($type == "index")
$v = array('name' => $urls['index'], 'params' => array());

return $v;
}

}
