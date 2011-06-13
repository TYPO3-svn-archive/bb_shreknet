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
 * Test case for class Tx_BbShreknet_Domain_Model_Article.
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
class Tx_BbShreknet_Domain_Model_ArticleTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_BbShreknet_Domain_Model_Article
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_BbShreknet_Domain_Model_Article();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getIconReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIconForStringSetsIcon() { 
		$this->fixture->setIcon('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIcon()
		);
	}
	
	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink() { 
		$this->fixture->setLink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLink()
		);
	}
	
	/**
	 * @test
	 */
	public function getNamesReturnsInitialValueForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleName() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getNames()
		);
	}

	/**
	 * @test
	 */
	public function setNamesForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleNameSetsNames() { 
		$name = new Tx_BbShreknet_Domain_Model_ArticleName();
		$objectStorageHoldingExactlyOneNames = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneNames->attach($name);
		$this->fixture->setNames($objectStorageHoldingExactlyOneNames);

		$this->assertSame(
			$objectStorageHoldingExactlyOneNames,
			$this->fixture->getNames()
		);
	}
	
	/**
	 * @test
	 */
	public function addNameToObjectStorageHoldingNames() {
		$name = new Tx_BbShreknet_Domain_Model_ArticleName();
		$objectStorageHoldingExactlyOneName = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneName->attach($name);
		$this->fixture->addName($name);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneName,
			$this->fixture->getNames()
		);
	}

	/**
	 * @test
	 */
	public function removeNameFromObjectStorageHoldingNames() {
		$name = new Tx_BbShreknet_Domain_Model_ArticleName();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($name);
		$localObjectStorage->detach($name);
		$this->fixture->addName($name);
		$this->fixture->removeName($name);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getNames()
		);
	}
	
	/**
	 * @test
	 */
	public function getPrimNameReturnsInitialValueForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleName() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPrimName()
		);
	}

	/**
	 * @test
	 */
	public function setPrimNameForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleNameSetsPrimName() { 
		$primName = new Tx_BbShreknet_Domain_Model_ArticleName();
		$objectStorageHoldingExactlyOnePrimName = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePrimName->attach($primName);
		$this->fixture->setPrimName($objectStorageHoldingExactlyOnePrimName);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePrimName,
			$this->fixture->getPrimName()
		);
	}
	
	/**
	 * @test
	 */
	public function addPrimNameToObjectStorageHoldingPrimName() {
		$primName = new Tx_BbShreknet_Domain_Model_ArticleName();
		$objectStorageHoldingExactlyOnePrimName = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePrimName->attach($primName);
		$this->fixture->addPrimName($primName);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePrimName,
			$this->fixture->getPrimName()
		);
	}

	/**
	 * @test
	 */
	public function removePrimNameFromObjectStorageHoldingPrimName() {
		$primName = new Tx_BbShreknet_Domain_Model_ArticleName();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($primName);
		$localObjectStorage->detach($primName);
		$this->fixture->addPrimName($primName);
		$this->fixture->removePrimName($primName);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPrimName()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleCategory() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleCategorySetsCategories() { 
		$category = new Tx_BbShreknet_Domain_Model_ArticleCategory();
		$objectStorageHoldingExactlyOneCategories = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->fixture->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategories,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories() {
		$category = new Tx_BbShreknet_Domain_Model_ArticleCategory();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories() {
		$category = new Tx_BbShreknet_Domain_Model_ArticleCategory();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function getEntriesReturnsInitialValueForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleEntry() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getEntries()
		);
	}

	/**
	 * @test
	 */
	public function setEntriesForObjectStorageContainingTx_BbShreknet_Domain_Model_ArticleEntrySetsEntries() { 
		$entry = new Tx_BbShreknet_Domain_Model_ArticleEntry();
		$objectStorageHoldingExactlyOneEntries = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneEntries->attach($entry);
		$this->fixture->setEntries($objectStorageHoldingExactlyOneEntries);

		$this->assertSame(
			$objectStorageHoldingExactlyOneEntries,
			$this->fixture->getEntries()
		);
	}
	
	/**
	 * @test
	 */
	public function addEntryToObjectStorageHoldingEntries() {
		$entry = new Tx_BbShreknet_Domain_Model_ArticleEntry();
		$objectStorageHoldingExactlyOneEntry = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneEntry->attach($entry);
		$this->fixture->addEntry($entry);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneEntry,
			$this->fixture->getEntries()
		);
	}

	/**
	 * @test
	 */
	public function removeEntryFromObjectStorageHoldingEntries() {
		$entry = new Tx_BbShreknet_Domain_Model_ArticleEntry();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($entry);
		$localObjectStorage->detach($entry);
		$this->fixture->addEntry($entry);
		$this->fixture->removeEntry($entry);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getEntries()
		);
	}
	
}
?>