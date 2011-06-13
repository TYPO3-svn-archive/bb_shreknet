<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Shreknet',
	'Shreknet'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . shreknet;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .shreknet. '.xml');






t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Vampire the Masquerade: Shreknet');


t3lib_extMgm::addLLrefForTCAdescr('tx_bbshreknet_domain_model_article', 'EXT:bb_shreknet/Resources/Private/Language/locallang_csh_tx_bbshreknet_domain_model_article.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_bbshreknet_domain_model_article');
$TCA['tx_bbshreknet_domain_model_article'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_article',
		'label' => 'icon',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Article.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_bbshreknet_domain_model_article.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_bbshreknet_domain_model_articlename', 'EXT:bb_shreknet/Resources/Private/Language/locallang_csh_tx_bbshreknet_domain_model_articlename.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_bbshreknet_domain_model_articlename');
$TCA['tx_bbshreknet_domain_model_articlename'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articlename',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ArticleName.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_bbshreknet_domain_model_articlename.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_bbshreknet_domain_model_articlecategory', 'EXT:bb_shreknet/Resources/Private/Language/locallang_csh_tx_bbshreknet_domain_model_articlecategory.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_bbshreknet_domain_model_articlecategory');
$TCA['tx_bbshreknet_domain_model_articlecategory'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articlecategory',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ArticleCategory.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_bbshreknet_domain_model_articlecategory.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_bbshreknet_domain_model_articleentry', 'EXT:bb_shreknet/Resources/Private/Language/locallang_csh_tx_bbshreknet_domain_model_articleentry.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_bbshreknet_domain_model_articleentry');
$TCA['tx_bbshreknet_domain_model_articleentry'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bb_shreknet/Resources/Private/Language/locallang_db.xml:tx_bbshreknet_domain_model_articleentry',
		'label' => 'text',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ArticleEntry.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_bbshreknet_domain_model_articleentry.gif'
	),
);

?>