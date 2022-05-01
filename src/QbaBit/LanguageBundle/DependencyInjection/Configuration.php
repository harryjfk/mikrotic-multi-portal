<?php

namespace QbaBit\LanguageBundle\DependencyInjection;

use QbaBit\CoreBundle\DependencyInjection\ConfigurationBase;
use Symfony\Component\Config\Definition\ArrayNode;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration extends ConfigurationBase
{


    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('qba_bit_language');
        $this->initTreeBuilder($rootNode);
        $this->addUploadConfig($rootNode, 'uploads');
        $this->addNavigatorInformation($rootNode);
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
