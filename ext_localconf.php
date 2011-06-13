<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Shreknet',
	array(
		'Article' => 'show, list, new, create, edit, update, delete',
		'ArticleCategory' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Article' => 'create, update, delete',
		'ArticleCategory' => 'create, update, delete',
		
	)
);

?>