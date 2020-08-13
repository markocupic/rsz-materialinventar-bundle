<?php

/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    RSZ Materialinventar
 * @license    MIT
 * @see        https://github.com/markocupic/rsz-materialinventar-bundle
 *
 */

declare(strict_types=1);

namespace Markocupic\RszMaterialinventarBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class MarkocupicRszMaterialinventarExtension
 *
 * @package Markocupic\RszMaterialinventarBundle\DependencyInjection
 */
class MarkocupicRszMaterialinventarExtension extends Extension
{

    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        $loader->load('parameters.yml');
        $loader->load('services.yml');
        $loader->load('listener.yml');
    }
}
