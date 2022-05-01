<?php

namespace QbaBit\NautaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use QbaBit\CoreBundle\DependencyInjection\ConfigurationBase;

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
        $rootNode = $treeBuilder->root('qba_bit_nauta');
        $this->initTreeBuilder($rootNode);
        $this->addNavigatorInformation($rootNode);
        $this->addUploadConfig($rootNode, 'uploads');
        $upload = $rootNode->children()->arrayNode('uploads');
        $this->addUploadConfig($upload, "nauta_accounts_log");
        $this->addUploadConfig($upload, "nauta_user_ip");
        $this->addUploadConfig($upload, "nauta_accounts");
        $options = $rootNode->children()->arrayNode('options');
        $options->children()->scalarNode("address")->end()
            ->scalarNode("releaseType")->end()
            ->scalarNode("user")->end()
            ->scalarNode("phone")->end()
            ->scalarNode("email")->end()
            ->scalarNode("password")->end()
            ->scalarNode("dhcp_server")->end()

        ;
        return $treeBuilder;
    }
}
