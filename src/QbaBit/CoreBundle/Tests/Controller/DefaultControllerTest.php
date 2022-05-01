<?php

namespace QbaBit\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Tests\ProjectServiceContainer;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultControllerTest extends WebTestCase
{
    protected $controller;

    public function getRepository(ContainerInterface $container)
    {

        if ($this->controller == null) {
            $controller = $this->getController();
            $c = new $controller();
            $c->setContainer($container);
            $this->controller = $c;
        }

        return $container->get("doctrine.orm.default_entity_manager")->getRepository($this->getCurrentObject());
    }

    public function getCurrentObject()
    {
        throw new \Exception("Sin Implementar");
    }

    public function getBasicUrl()
    {

    }

    protected function getFiles($filenames)
    {
        $added = array();
        $files = array();
        foreach ($filenames as $w) {
            $filename = (new \SplFileInfo($w))->getFilename();
            if (array_search($filename, $added) == false) {
                $new_filename = __DIR__ . "/" . $filename;
                copy($w, $new_filename);
                $pic1 = new UploadedFile(
                    $new_filename,
                    $filename,
                    'image/jpeg',
                    (new \SplFileInfo($w))->getSize()
                );

                $files[] = $pic1;
                $added[] = $filename;
            }

        }
        return $files;
    }

    protected function getData($type, ContainerInterface $container)
    {

    }

    protected function getUrlParams($type, ContainerInterface $container)
    {

    }

    protected function getUrl($type, ContainerInterface $container)
    {
        $this->getRepository($container);
        $v = $this->getUrlParams($type, $container);
        $client = static::createClient();
        return $client->getContainer()->get('router')->generate($v['name'], $v['params']);
    }

    public function getSectionName()
    {

        throw new \Exception("Sin Implementar");
    }

    public function getController()
    {
        throw new \Exception("Sin Implementar");
    }

}
