<?php

namespace YDD\VebraApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('vebra');
        $rootNode
            ->children()
                ->scalarNode('username')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('password')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('data_feed_id')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('token_storage_class')->end()
                ->scalarNode('token_storage_directory')->end()
                ->scalarNode('client_class')->end()
            ->end();

        return $treeBuilder;
    }
}
