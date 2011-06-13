<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_bbshreknet_domain_model_articleentry'] = array(
	'ctrl' => $TCA['tx_bbshreknet_domain_model_articleentry']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, text, cached_text, post_time, privat, old',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, text, cached_text, post_time, privat, old,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_bbshreknet_domain_model_articleentry',
				'foreign_table_where' => 'AND tx_bbshreknet_domain_model_articleentry.pid=###CURRENT_PID### AND tx_bbshreknet_domain_model_articleentry.sys_language_uid IN (-1,0)',
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
		'text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articleentry.text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'cached_text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articleentry.cached_text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'post_time' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articleentry.post_time',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'privat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articleentry.privat',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'old' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articleentry.old',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'article' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
?>