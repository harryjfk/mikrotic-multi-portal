<?php

namespace QbaBit\CoreBundle\DependencyInjection;

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

    protected function addPaginatorTemplate(ArrayNodeDefinition $Node)
    {

        $Node->children()->scalarNode("pagination")->end()->scalarNode("sortable")->end();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('qba_bit_core');
        $this->initTreeBuilder($rootNode);
        $pagination = $rootNode->children()->arrayNode("pagination");
        $this->addPaginatorTemplate($pagination->children()->
        arrayNode("frontend"));
        $this->addPaginatorTemplate($pagination->children()->arrayNode("backend"));
        $rootNode->children()->arrayNode("app")->children()->
            scalarNode("name")->end()->
            scalarNode("name_mini")->end()->
            scalarNode("image")->end()->

            scalarNode("index_url")->end()
            ->end();
        $rootNode->children()->arrayNode("routing")->children()->
            scalarNode("url")->end()->
            scalarNode("dir")->end()->arrayNode("uploads")->children()->
        scalarNode("url")->end()->scalarNode("dir")->end();
        $this->createGenerator($rootNode);

        $rootNode->children()->arrayNode("modules")->children()->scalarNode("url")->end()->scalarNode("file")->end();
        $rootNode->children()->arrayNode("system_manager")->children()->scalarNode("folder")->end();
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }

    private function createGenerator(ArrayNodeDefinition $root)
    {
        $types = $root->children()->arrayNode('generator')->children()->variableNode("defaultTypes");
        //   $this->appendGeneratorType($types);

    }
}
