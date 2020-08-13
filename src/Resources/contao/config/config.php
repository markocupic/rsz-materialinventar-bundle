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

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['rsz_tools']['rsz_materialinventar'] = array(
'tables' => ['tl_rsz_material_inventar']
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_rsz_material_inventar'] = \Markocupic\RszMaterialinventarBundle\Model\RszMaterialInventarModel::class;
