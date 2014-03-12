<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/***************
 * Add plugins
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'elements',
	'Tab',
	array('Item' => 'show'),
	array('Item' => ''),
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT // <- this one
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'elements',
	'Accordion',
	array('Item' => 'show'),
	array('Item' => ''),
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT // <- this one
);

/***************
 * Add TsConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TsConfig/pageTsConfig.ts">');