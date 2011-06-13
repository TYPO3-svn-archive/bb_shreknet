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
 * missing the feUser
 */
class Tx_BbShreknet_Domain_Model_ArticleEntry extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * text
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $text;

	/**
	 * cachedText
	 *
	 * @var string
	 */
	protected $cachedText;

	/**
	 * postTime
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $postTime;

	/**
	 * privat
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $privat = false;

	/**
	 * old
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $old = false;

	/**
	 * @param string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * @param string $cachedText
	 * @return void
	 */
	public function setCachedText($cachedText) {
		$this->cachedText = $cachedText;
	}

	/**
	 * @return string
	 */
	public function getCachedText() {
		return $this->cachedText;
	}

	/**
	 * @param DateTime $postTime
	 * @return void
	 */
	public function setPostTime(DateTime $postTime) {
		$this->postTime = $postTime;
	}

	/**
	 * @return DateTime
	 */
	public function getPostTime() {
		return $this->postTime;
	}

	/**
	 * @param boolean $privat
	 * @return void
	 */
	public function setPrivat($privat) {
		$this->privat = $privat;
	}

	/**
	 * @return boolean
	 */
	public function getPrivat() {
		return $this->privat;
	}

	/**
	 * @return boolean
	 */
	public function isPrivat() {
		return $this->getPrivat();
	}

	/**
	 * @param boolean $old
	 * @return void
	 */
	public function setOld($old) {
		$this->old = $old;
	}

	/**
	 * @return boolean
	 */
	public function getOld() {
		return $this->old;
	}

	/**
	 * @return boolean
	 */
	public function isOld() {
		return $this->getOld();
	}

}
?>