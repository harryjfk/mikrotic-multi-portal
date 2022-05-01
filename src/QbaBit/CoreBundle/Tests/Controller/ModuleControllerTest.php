<?php

namespace QbaBit\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Tests\ProjectServiceContainer;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Client;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class ModuleControllerTest extends WebTestCase
{

  public function testStart()
  {
      $client = static::createClient();
      $client->enableProfiler();
      $this->logIn($client);
      $crawler = $client->request(
          'GET',
        "http://localhost/ecommerce/web/app_dev.php/admin/modules"

      );
     // if ($client->getProfile()->getStatusCode() == 500)
     //     echo $client->getResponse()->getContent();

      $this->assertEquals(
          200, $client->getProfile()->getStatusCode()
      );
  }
    private function logIn(Client $client)
    {
        $session = $client->getContainer()->get('session');

        $group = $client->getContainer()->get("doctrine.orm.default_entity_manager")->getRepository("QbaBitSecurityBundle:SecurityGroup")->findOneBy(array("name" => "Administrador"));

        $roles = array();
        foreach ($group->getRole() as $rol) {
            $roles[] = $rol->getRole();
        }
        // the firewall context defaults to the firewall name
        $firewallContext = 'admin_area';

        $token = new UsernamePasswordToken('admin', null, $firewallContext, $roles);
        $session->set('_security_' . $firewallContext, serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $client->getCookieJar()->set($cookie);
    }

}
