<?php

/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2023 <m.cupic@gmx.ch>
 *
 * @license    MIT
 *
 * @see        https://github.com/markocupic/rsz-materialinventar-bundle
 */

declare(strict_types=1);

/*
 * This file is part of RSZ Benutzerverwaltung Bundle.
 *
 * (c) Marko Cupic 2023 <m.cupic@gmx.ch>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/rsz-materialinventar-bundle
 */

namespace Markocupic\RszMaterialinventarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MarkocupicRszMaterialinventarBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
