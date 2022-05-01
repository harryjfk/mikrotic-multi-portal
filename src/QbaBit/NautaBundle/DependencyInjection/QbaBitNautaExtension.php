<?php

namespace QbaBit\NautaBundle\DependencyInjection;

use QbaBit\CoreBundle\DependencyInjection\QbaBitBaseExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class QbaBitNautaExtension extends QbaBitBaseExtension
{
     public function getName()
    {
        return 'qba_bit_nauta';
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
