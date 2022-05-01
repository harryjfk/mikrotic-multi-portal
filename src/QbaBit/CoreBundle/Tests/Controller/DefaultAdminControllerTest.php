<?php

namespace QbaBit\CoreBundle\Tests\Controller;


use QbaBit\CoreBundle\Entity\Reflection;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Tests\ProjectServiceContainer;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultAdminControllerTest extends DefaultControllerTest
{
    public function getDefaultFiles(ContainerInterface $container)
    {
        $base = $container->getParameter("kernel.project_dir") . "/web/tests";

        return array("image" => $base . "/image.jpg");
    }

    protected function getData($type, ContainerInterface $container)
    {
        if ($type == "delete_list") {
            $t = $this->getRepository($container)->findAll();
            $v = array();
            for ($i = 0; $i < 1; $i++)
                $v[] = $t[$i]->getId();

            return array('idcheck', $v);

        }
    }


    protected function getUrlParams($type, ContainerInterface $container)
    {
        $urls = $this->getBasicUrl();
        $v = "";
        if ($type == 'view')
            $v = array('name' => $urls['view'], 'params' => array());
        else
            if ($type == 'new')
                $v = array('name' => $urls['new'], 'params' => array());
            else
                if ($type == 'edit') {

                    $t = $this->getRepository($container)->findAll();

                    $v = array('name' => $urls['edit'], 'params' => array('id' => $t[count($t) - 1]->getId()));
                } else
                    if ($type == 'delete') {

                        $t = $this->getRepository($container)->findAll();

                        $id = $t[count($t) - 1]->getId();

                        $v = array('name' => $urls['delete'], 'params' => array('id' => $id));

                    } else
                        if ($type == 'delete_list') {
                            $v = array('name' => $urls['delete_list'], 'params' => array());

                        }
        return $v;
    }


    public function getBasicUrl()
    {
        return $this->controller->getUrlRoutes();

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

    public function testIndex()
    {


        $client = static::createClient();
        $this->logIn($client);
        $crawler = $client->request('GET', $this->getUrl('view', $client->getContainer()));
        if ($client->getResponse()->getStatusCode() == 500)
            echo $client->getResponse()->getContent();
        $this->assertEquals(
            200, // or Symfony\Component\HttpFoundation\Response::HTTP_OK
            $client->getResponse()->getStatusCode()
        );
    }

    public function testIndexWithSearch()
    {
        $client = static::createClient();
        $this->logIn($client);
        $crawler = $client->request('GET', $this->getUrl('view', $client->getContainer()), array('dataTables_filter' => 'ninguna'));

        $this->assertEquals(
            200, // or Symfony\Component\HttpFoundation\Response::HTTP_OK
            $client->getResponse()->getStatusCode()
        );


    }

    public function testNewIndex()
    {

        $client = static::createClient();
        $this->logIn($client);
        $client->enableProfiler();
        $crawler = $client->request('GET', $this->getUrl('new', $client->getContainer()));

        $this->assertEquals(
            200, $client->getProfile()->getStatusCode()
        );

    }


    public function testNewData()
    {

        $client = static::createClient();

        $this->logIn($client);
        $client->enableProfiler();
        $this->logIn($client);
        //     $crawler = $client->request('GET', $this->getUrl('new'));
        $data = $this->getData('new', $client->getKernel()->getContainer());

        $url = $this->getUrl('new', $client->getKernel()->getContainer());
        $crawler = $client->request(
            'GET',
            $url,
            $data['fields'],
            $data['files']

        );

        if ($client->getProfile()->getStatusCode() == 500)
            echo $client->getResponse()->getContent();


        $this->assertEquals(
            302, $client->getProfile()->getStatusCode()
        );
        $this->clearFolder($client->getContainer());

    }


    public function testEditIndex()
    {

        $client = static::createClient();
        $client->enableProfiler();
        $this->logIn($client);
        $crawler = $client->request('GET', $this->getUrl('edit', $client->getContainer()));

        if ($client->getProfile()->getStatusCode() == 500)
            echo $client->getResponse()->getContent();
        $this->assertEquals(
            200, $client->getProfile()->getStatusCode()
        );


    }

    protected function clearFolder(ContainerInterface $container)
    {
        $dir = __DIR__;
        $result = array();
        $container->get("qba_bit_core.file.utils")->getFiles($dir, $result);
        foreach ($result as $r)
            if (strpos($r, "DefaultControllerTest.php") === false && strpos($r, "DefaultAdminControllerTest.php") === false)
                unlink($r);
    }

    public function testEditData()
    {

        $client = static::createClient();
        $client->enableProfiler();
        $this->logIn($client);
        //     $crawler = $client->request('GET', $this->getUrl('new'));
        $data = $this->getData('edit', $client->getContainer());

        $crawler = $client->request(
            'GET',
            $this->getUrl('edit', $client->getContainer()),
            $data['fields'],
            $data['files']

        );
        if ($client->getProfile()->getStatusCode() == 500)
            echo $client->getResponse()->getContent();

        $this->assertEquals(
            302, $client->getProfile()->getStatusCode()
        );
        $this->clearFolder($client->getContainer());

    }

    public function testDelete()
    {

        $client = static::createClient();
        $client->enableProfiler();
        $this->logIn($client);
        $crawler = $client->request('GET', $this->getUrl('delete', $client->getContainer()));


        $this->assertEquals(
            302, $client->getProfile()->getStatusCode()
        );

    }

    public function testDeleteSelected()
    {

        $client = static::createClient();
        $client->enableProfiler();
        $this->logIn($client);
        //     $crawler = $client->request('GET', $this->getUrl('new'));
        $data = $this->getData('delete_list', $client->getContainer());

        $crawler = $client->request(
            'POST',
            $this->getUrl('delete_list', $client->getContainer()),
            $data

        );

        $this->assertEquals(
            200, $client->getProfile()->getStatusCode()
        );

    }

}
