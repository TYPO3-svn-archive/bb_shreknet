<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_bbshreknet_domain_model_article'] = array(
	'ctrl' => $TCA['tx_bbshreknet_domain_model_article']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, icon, link, names, prim_name, categories, entries',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, icon, link, names, prim_name, categories, entries,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_bbshreknet_domain_model_article',
				'foreign_table_where' => 'AND tx_bbshreknet_domain_model_article.pid=###CURRENT_PID### AND tx_bbshreknet_domain_model_article.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' =>array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'icon' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article.icon',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_bbshreknet',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'link' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article.link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'names' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article.names',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bbshreknet_domain_model_articlename',
				'MM' => 'tx_bbshreknet_article_articlename_mm',
				'maxitems' => 99999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'prim_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article.prim_name',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bbshreknet_domain_model_articlename',
				'foreign_field' => 'article',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'categories' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article.categories',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bbshreknet_domain_model_articlecategory',
				'MM' => 'tx_bbshreknet_article_articlecategory_mm',
				'maxitems' => 99999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'entries' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article.entries',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bbshreknet_domain_model_articleentry',
				'foreign_field' => 'article',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
	),
);
?>