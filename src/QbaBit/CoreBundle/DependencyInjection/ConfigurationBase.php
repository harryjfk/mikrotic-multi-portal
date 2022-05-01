<?php

namespace QbaBit\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ArrayNode;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\VariableNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class ConfigurationBase implements ConfigurationInterface
{
    protected $ormNode = null;

    protected function addNavigatorInformation(ArrayNodeDefinition $node)
    {
        $node->children()->arrayNode("navigator")->children()->
        arrayNode("frontend")->children()->
        scalarNode("priority")->end()->
        scalarNode("render")->end()->end()->end()->
        arrayNode("backend")->children()->
        scalarNode("priority")->end()->
        scalarNode("render")->end()->end();
    }
    protected function addOrmConfig(ArrayNodeDefinition $parent, $tableName)
    {
        if ($this->ormNode == null)
            $this->ormNode = $parent->children()->arrayNode('orm');
        $this->ormNode->children()->arrayNode($tableName)->children()->
        scalarNode('class')->end()->
        scalarNode('entity_manager')->defaultNull()->end()->
        scalarNode('config_path')->end()->
        scalarNode('repository')->defaultNull()->end()->
        arrayNode('parent')->children()->
        scalarNode('class')->defaultNull()->end()->
        scalarNode('config_path')->defaultNull()->end()->
        scalarNode('inheritanceType')->defaultNull()->end()->
        scalarNode('columnName')->defaultNull()->end()->
        scalarNode('parentName')->defaultNull()->end()->
        scalarNode('childName')->defaultNull()->end()->
        scalarNode("childsName")->defaultNull()->end()->
        scalarNode('columnType')->defaultNull()->end();

    }

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        return $treeBuilder;
    }
    protected function initTreeBuilder(ArrayNodeDefinition $node)
    {
        $node->children()->arrayNode("menu")->children()
            ->scalarNode("frontend")->end()
            ->scalarNode("backend")->end()
            ->end();
    }

    public function addUploadConfig(ArrayNodeDefinition $node, $module)
    {
        return $node->children()->arrayNode($module)->children()
            ->scalarNode('web')->end()
            ->scalarNode('dir')->end()
            ->end();
    }

}
