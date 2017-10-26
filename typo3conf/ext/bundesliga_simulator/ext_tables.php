<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Exinit.BundesligaSimulator',
    'leaguemanagement',
    'Bundesliga: Ligaverwaltung'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Exinit.BundesligaSimulator',
    'transfermarket',
    'Bundesliga: Transfermarkt'
);

// add typoscript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('bundesliga_simulator',
    'Configuration/TypoScript', 'Bundesliga-Simulator');

// adding table meta information
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bundesligasimulator_domain_model_club',
    'EXT:bundesliga_simulator/Resources/Private/Language/locallang_csh_tx_bundesligasimulator_domain_model_club.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bundesligasimulator_domain_model_club');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bundesligasimulator_domain_model_player',
    'EXT:bundesliga_simulator/Resources/Private/Language/locallang_csh_tx_bundesligasimulator_domain_model_player.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bundesligasimulator_domain_model_player');
