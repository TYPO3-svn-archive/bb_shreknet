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
*  the Free Software Foundation; either version 3 of the License, or
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
 * article desc
 */
class Tx_BbShreknet_Domain_Model_Article extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * articles icon
	 *
	 * @var string
	 */
	protected $icon;

	/**
	 * article link
	 *
	 * @var string
	 */
	protected $link;

	/**
	 * list of all names
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleName>
	 * @lazy
	 */
	protected $names;

	/**
	 * primName
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleName>
	 */
	protected $primName;

	/**
	 * categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleCategory>
	 * @lazy
	 */
	protected $categories;

	/**
	 * entries
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleEntry>
	 * @lazy
	 */
	protected $entries;


	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the extension builder
		* You may modify the constructor of this class instead
		*/
		$this->names = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->primName = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->entries = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * @param string $icon
	 * @return void
	 */
	public function setIcon($icon) {
		$this->icon = $icon;
	}

	/**
	 * @return string
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * @param string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * @return string
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleName> $names
	 * @return void
	 */
	public function setNames(Tx_Extbase_Persistence_ObjectStorage $names) {
		$this->names = $names;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleName>
	 */
	public function getNames() {
		return $this->names;
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleName the ArticleName to be added
	 * @return void
	 */
	public function addName(Tx_BbShreknet_Domain_Model_ArticleName $name) {
		$this->names->attach($name);
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleName the ArticleName to be removed
	 * @return void
	 */
	public function removeName(Tx_BbShreknet_Domain_Model_ArticleName $nameToRemove) {
		$this->names->detach($nameToRemove);
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleName> $primName
	 * @return void
	 */
	public function setPrimName(Tx_Extbase_Persistence_ObjectStorage $primName) {
		$this->primName = $primName;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleName>
	 */
	public function getPrimName() {
		return $this->primName;
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleName the ArticleName to be added
	 * @return void
	 */
	public function addPrimName(Tx_BbShreknet_Domain_Model_ArticleName $primName) {
		$this->primName->attach($primName);
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleName the ArticleName to be removed
	 * @return void
	 */
	public function removePrimName(Tx_BbShreknet_Domain_Model_ArticleName $primNameToRemove) {
		$this->primName->detach($primNameToRemove);
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleCategory> $categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleCategory>
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory the ArticleCategory to be added
	 * @return void
	 */
	public function addCategory(Tx_BbShreknet_Domain_Model_ArticleCategory $category) {
		$this->categories->attach($category);
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory the ArticleCategory to be removed
	 * @return void
	 */
	public function removeCategory(Tx_BbShreknet_Domain_Model_ArticleCategory $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleEntry> $entries
	 * @return void
	 */
	public function setEntries(Tx_Extbase_Persistence_ObjectStorage $entries) {
		$this->entries = $entries;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_ArticleEntry>
	 */
	public function getEntries() {
		return $this->entries;
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleEntry the ArticleEntry to be added
	 * @return void
	 */
	public function addEntry(Tx_BbShreknet_Domain_Model_ArticleEntry $entry) {
		$this->entries->attach($entry);
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_ArticleEntry the ArticleEntry to be removed
	 * @return void
	 */
	public function removeEntry(Tx_BbShreknet_Domain_Model_ArticleEntry $entryToRemove) {
		$this->entries->detach($entryToRemove);
	}

}
?>