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
 * ArticleCategory
 */
class Tx_BbShreknet_Domain_Model_ArticleCategory extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * articles
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_Article>
	 * @lazy
	 */
	protected $articles;


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
		$this->articles = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_Article> $articles
	 * @return void
	 */
	public function setArticles(Tx_Extbase_Persistence_ObjectStorage $articles) {
		$this->articles = $articles;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_BbShreknet_Domain_Model_Article>
	 */
	public function getArticles() {
		return $this->articles;
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_Article the Article to be added
	 * @return void
	 */
	public function addArticle(Tx_BbShreknet_Domain_Model_Article $article) {
		$this->articles->attach($article);
	}

	/**
	 * @param Tx_BbShreknet_Domain_Model_Article the Article to be removed
	 * @return void
	 */
	public function removeArticle(Tx_BbShreknet_Domain_Model_Article $articleToRemove) {
		$this->articles->detach($articleToRemove);
	}

}
?>