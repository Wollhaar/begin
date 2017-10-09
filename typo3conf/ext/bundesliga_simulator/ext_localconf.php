<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Exinit.BundesligaSimulator',
    'leaguemanagement',
    [
        'League' => 'list, show',
    ],
    // non-cacheable actions
    [
    ]
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Exinit.BundesligaSimulator',
    'transfermarket',
    [
        'Transfer' => 'list, show',
    ],
    // non-cacheable actions
    [
    ]
);
