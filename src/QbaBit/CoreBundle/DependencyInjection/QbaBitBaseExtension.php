<?php

namespace QbaBit\CoreBundle\DependencyInjection;

use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Services\FileUtils;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class QbaBitBaseExtension extends Extension
{

    private $config;

    /**
     * {@inheritdoc}
     */
    protected function getDir()
    {
        return __DIR__;
    }

    public function getName()
    {
        return null;
    }

    public function getConfigurationObject()
    {
        return new Configuration();
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfigurationObject();
        $this->config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator($this->getDir() . '/../Resources/config'));
        $loader->load('services.yml');
        /**/
        //     echo json_encode($configs);
        $container->setParameter('config.' . $this->getName(), $this->config);
        if($this->hasForms())
        $this->getForms($container);
    }
    protected function hasForms()
    {
        return true;
    }

    protected function getForms(ContainerBuilder $container)
    {
        $dir = dirname($this->getDir());
        $result = array();
        $utils = new FileUtils($container);
        $utils->searchFile($dir, "*Type*", "php", $result, true);

        $manipulator = new PhpFileManipulator();
        $themes =  $container->getParameter("twig.form.resources");
        for ($i = 0; $i < count($result); $i++) {
            $class = $manipulator->getClassName($result[$i]);
            $namespace = $manipulator->getNameSpace();
            $class_name = $namespace . "\\" . $class;

            $r = new Reflection($class_name);
            $m = $r->getMethod("getRenderTwig");
            $v = $m->invoke(null);
            if ($v != null)
                $themes[] = $v;
            unset($v);
            unset($m);
            unset($r);

        }
        unset($manipulator);


        $container->setParameter("twig.form.resources",$themes);

    }

    public function getConfigs()
    {
        return $this->config;
    }
}
