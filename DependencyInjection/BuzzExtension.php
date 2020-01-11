<?php

namespace Kruczkowski\Bundle\BuzzBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * BuzzExtension.
 *
 * @author Marc Weistroff <marc.weistroff@sensio.com>
 */
class BuzzExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('buzz.xml');

        $container->setParameter('buzz.client.timeout', $config['client_timeout']);
        $container->setParameter('buzz.client.proxy', $config['proxy']);
    }
}
