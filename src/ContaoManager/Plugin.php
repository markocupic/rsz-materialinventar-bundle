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

namespace Markocupic\RszMaterialinventarBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 *
 * @package Markocupic\RszMaterialinventarBundle\ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {

        return [
            BundleConfig::create('Markocupic\RszMaterialinventarBundle\MarkocupicRszMaterialinventarBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }

}

