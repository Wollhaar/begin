<?php
declare(strict_types=1);

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$fieldList = 'name, founding_year, stadium_name, stadium_capacity, total_market_value, number_of_fans';
$ll = 'LLL:EXT:bundesliga_simulator/Resources/Private/Language/locallang_be.xlf:tx_bundesligasimulator_domain_model_club';

return [
    'ctrl'      => [
        'title'                    => $ll,
        'label'                    => 'name',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'default_sortby'           => 'ORDER BY name',
        'dividers2tabs'            => true,
        'versioningWS'             => 2,
        'versioning_followPages'   => true,
        'origUid'                  => 't3_origuid',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete'                   => 'deleted',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ],
        'searchFields'             => 'name',
        'iconfile'                 => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('bundesliga_simulator') . 'Resources/Public/Icons/tx_bundesligasimulator_domain_model_club.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ' . $fieldList,
    ],
    'types'     => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden, ' . $fieldList . ';;1,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'],
    ],
    'palettes'  => [
        '1' => ['showitem' => ''],
    ],
    'columns'   => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config'  => [
                'type'                => 'select',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0],
                ],
            ],
        ],
        'l10n_parent'      => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => [
                'type'                => 'select',
                'items'               => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_bundesligasimulator_domain_model_club',
                'foreign_table_where' => 'AND tx_bundesligasimulator_domain_model_club.pid=###CURRENT_PID### AND tx_bundesligasimulator_domain_model_club.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource'  => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label'      => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max'  => 255,
            ],
        ],
        'hidden'           => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'  => [
                'type' => 'check',
            ],
        ],
        'starttime'        => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
            'config'    => [
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => [
                    'lower' => mktime(0, 0, 0, intval(date('m')),
                        intval(date('d')), intval(date('Y'))),
                ],
            ],
        ],
        'endtime'          => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
            'config'    => [
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => [
                    'lower' => mktime(0, 0, 0, intval(date('m')),
                        intval(date('d')), intval(date('Y'))),
                ],
            ],
        ],

        'name'           => [
            'exclude' => 0,
            'label'   => $ll . '.name',
            'config'  => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
            ],
        ],
        'founding_year' => [
        'exclude' => 0,
        'label'   => $ll . '.founding_year',
        'config'  => [
            'type' => 'input',
            'size' => 4,
            'eval' => 'trim, num',
            ],
        ],
        'stadium_name'           => [
            'exclude' => 0,
            'label'   => $ll . '.stadium_name',
            'config'  => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
            ],
        ],
        'stadium_capacity' => [
            'exclude' => 0,
            'label'   => $ll . '.stadium_capacity',
            'config'  => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim, num',
            ],
        ],
        'total_market_value' => [
            'exclude' => 0,
            'label'   => $ll . '.total_market_value',
            'config'  => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim, num',
            ],
        ],
        'number_of_fans' => [
            'exclude' => 0,
            'label'   => $ll . '.numberOfFans',
            'config'  => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim, num',
            ],
        ],
    ],
];
