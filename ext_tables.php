<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/***************
 * Add plugins
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Tab',
	'LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:plugin.tab'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Accordion',
	'LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:plugin.accordion'
);


/***************
 * Add fields to TCA
 */
$tempColumns = Array(
	'element_relation' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_be.xml:tt_content.element_relation',
		'config' => array(
			'type' => 'inline',
			'allowed' => 'tt_content',
			'foreign_table' => 'tt_content',
			'foreign_record_defaults' => array(
				'colPos' => '99'
			),
			'minitems' => 0,
			'maxitems' => 10,
			'appearance' => array(
				'collapseAll' => 1,
				'expandSingle' => 1,
				'levelLinksPosition' => 'bottom',
				'useSortable' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showRemovedLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1,
				'showSynchronizationLink' => 1,
				'enabledControls' => array(
					'info' => FALSE,
				)
			)
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns, 1);
$TCA['tt_content']['types']['elements_tab']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general, element_relation, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility, --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';
$TCA['tt_content']['types']['elements_accordion']['showitem'] = $TCA['tt_content']['types']['elements_tab']['showitem'];


/***************
 * Default TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Elements');
