<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Exinit.BundesligaSimulator',
    'leaguemanagement',
    [
        'League' => 'list',
    ],
    // non-cacheable actions
    [
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Exinit.BundesligaSimulator',
    'transfermarket',
    [
        'Player' => 'list',
    ],
    // non-cacheable actions
    [
    ]
);
