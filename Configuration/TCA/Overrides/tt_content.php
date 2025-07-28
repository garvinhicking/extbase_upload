<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$pluginIdentifier = ExtensionUtility::registerPlugin(
    'extbase_upload',
    'Pi1',
    'Upload plugin for single file property in a domain object'
);

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:extbase_upload/Configuration/FlexForms/flexform.xml',
    $pluginIdentifier
);
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin, pi_flexform',
    $pluginIdentifier,
    'after:palette:headers'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['extbaseupload_pi1'] = 'layout,recursive,pages';
