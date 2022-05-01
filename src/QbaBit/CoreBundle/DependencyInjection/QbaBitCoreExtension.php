<?php

namespace QbaBit\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class QbaBitCoreExtension extends QbaBitBaseExtension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'qba_bit_core';
    }
    public function getConfigurationObject()
    {
        return new Configuration();
    }
    protected function getDir()
    {
        return __DIR__;
    }
}
