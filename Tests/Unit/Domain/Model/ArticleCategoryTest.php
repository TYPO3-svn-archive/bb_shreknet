<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2011 Bastian Bringenberg <spam@bastian-bringenberg.de>, Bastian Bringenberg
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Test case for class Tx_BbShreknet_Domain_Model_ArticleCategory.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Vampire the Masquerade: Shreknet
 *
 * @author Bastian Bringenberg <spam@bastian-bringenberg.de>
 */
class Tx_BbShreknet_Domain_Model_ArticleCategoryTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_BbShreknet_Domain_Model_ArticleCategory
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_BbShreknet_Domain_Model_ArticleCategory();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getArticlesReturnsInitialValueForObjectStorageContainingTx_BbShreknet_Domain_Model_Article() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getArticles()
		);
	}

	/**
	 * @test
	 */
	public function setArticlesForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleSetsArticles() { 
		$article = new Tx_BbShreknet_Domain_Model_Article();
		$objectStorageHoldingExactlyOneArticles = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneArticles->attach($article);
		$this->fixture->setArticles($objectStorageHoldingExactlyOneArticles);

		$this->assertSame(
			$objectStorageHoldingExactlyOneArticles,
			$this->fixture->getArticles()
		);
	}
	
	/**
	 * @test
	 */
	public function addArticleToObjectStorageHoldingArticles() {
		$article = new Tx_BbShreknet_Domain_Model_Article();
		$objectStorageHoldingExactlyOneArticle = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneArticle->attach($article);
		$this->fixture->addArticle($article);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneArticle,
			$this->fixture->getArticles()
		);
	}

	/**
	 * @test
	 */
	public function removeArticleFromObjectStorageHoldingArticles() {
		$article = new Tx_BbShreknet_Domain_Model_Article();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($article);
		$localObjectStorage->detach($article);
		$this->fixture->addArticle($article);
		$this->fixture->removeArticle($article);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getArticles()
		);
	}
	
}
?>