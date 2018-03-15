<?php

namespace Printi\AwsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $root = $builder->root('printi_aws');
        $root
            ->children()
                ->arrayNode('s3')
                    ->useAttributeAsKey('name')
                    ->prototype('array')->end()
                ->end()
                ->arrayNode('sqs')
                    ->useAttributeAsKey('name')
                    ->prototype('array')->end()
                ->end()
                ->arrayNode('sns')
                    ->useAttributeAsKey('name')
                    ->prototype('array')->end()
                ->end()
            ->end();

        return $builder;
    }
}
