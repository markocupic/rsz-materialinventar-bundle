<?php

/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2023 <m.cupic@gmx.ch>
 *
 * @author     Marko Cupic
 * @package    RSZ Materialinventar
 * @license    MIT
 * @see        https://github.com/markocupic/rsz-materialinventar-bundle
 *
 */

$GLOBALS['TL_DCA']['tl_rsz_material_inventar'] = [
    'config'   => [
        'dataContainer'    => 'Table',
        'enableVersioning' => true,
        'sql'              => [
            'keys' => [
                'id' => 'primary',
            ],
        ],
    ],
    'list'     => [
        'sorting'           => [
            'mode'        => 1,
            'fields'      => ['article_name'],
            'flag'        => 1,
            'panelLayout' => 'filter;sort,search,limit',
        ],
        'label'             => [
            'fields' => ['article_name'],
        ],
        'global_operations' => [
            'all' => [
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"',
            ],
        ],
        'operations'        => [
            'edit'   => [
                'label' => &$GLOBALS['TL_LANG']['tl_rsz_material_inventar']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif',
            ],
            'copy'   => [
                'label' => &$GLOBALS['TL_LANG']['tl_rsz_material_inventar']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif',
            ],
            'delete' => [
                'label'      => &$GLOBALS['TL_LANG']['tl_rsz_material_inventar']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\''.($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null).'\'))return false;Backend.getScrollOffset()"',
            ],
            'show'   => [
                'label'      => &$GLOBALS['TL_LANG']['tl_rsz_material_inventar']['show'],
                'href'       => 'act=show',
                'icon'       => 'show.gif',
                'attributes' => 'style="margin-right:3px"',
            ],
        ],
    ],
    'palettes' => [
        'default' => 'article_name,article_description,purchasing_date,original_price,location',
    ],
    'fields'   => [
        'id'                  => [
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ],
        'tstamp'              => [
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ],
        'article_name'        => [
            'exclude'   => false,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'maxlength' => 128],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'article_description' => [
            'exclude'   => false,
            'search'    => true,
            'inputType' => 'textarea',
            'eval'      => ['mandatory' => false, 'maxlength' => 128],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'purchasing_date'     => [
            'exclude'   => false,
            'search'    => true,
            'inputType' => 'select',
            'options'   => range('2007', date('Y'), 1),
            'eval'      => ['mandatory' => true, 'maxlength' => 4],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'original_price'      => [
            'exclude'   => false,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => false, 'maxlength' => 5, 'rgxp' => 'digit'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'location'            => [
            'exclude'   => false,
            'search'    => true,
            'inputType' => 'textarea',
            'eval'      => ['mandatory' => false],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
    ],
];
