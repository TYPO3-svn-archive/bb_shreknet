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
 * Test case for class Tx_BbShreknet_Domain_Model_ArticleEntry.
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
class Tx_BbShreknet_Domain_Model_ArticleEntryTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_BbShreknet_Domain_Model_ArticleEntry
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_BbShreknet_Domain_Model_ArticleEntry();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTextForStringSetsText() { 
		$this->fixture->setText('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getText()
		);
	}
	
	/**
	 * @test
	 */
	public function getCachedTextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCachedTextForStringSetsCachedText() { 
		$this->fixture->setCachedText('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCachedText()
		);
	}
	
	/**
	 * @test
	 */
	public function getPostTimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setPostTimeForDateTimeSetsPostTime() { }
	
	/**
	 * @test
	 */
	public function getPrivatReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getPrivat()
		);
	}

	/**
	 * @test
	 */
	public function setPrivatForBooleanSetsPrivat() { 
		$this->fixture->setPrivat(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getPrivat()
		);
	}
	
	/**
	 * @test
	 */
	public function getOldReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getOld()
		);
	}

	/**
	 * @test
	 */
	public function setOldForBooleanSetsOld() { 
		$this->fixture->setOld(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getOld()
		);
	}
	
}
?>