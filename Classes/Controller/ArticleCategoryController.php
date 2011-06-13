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
 * Controller for the ArticleCategory object
 */
class Tx_BbShreknet_Controller_ArticleCategoryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_BbShreknet_Domain_Repository_ArticleCategoryRepository
	 */
	protected $articleCategoryRepository;

	/**
	 * @param Tx_BbShreknet_Domain_Repository_ArticleCategoryRepository $articleCategoryRepository
 	 * @return void
	 */
	public function injectArticleCategoryRepository(Tx_BbShreknet_Domain_Repository_ArticleCategoryRepository $articleCategoryRepository) {
		$this->articleCategoryRepository = $articleCategoryRepository;
	}



	/**
	 * Displays all ArticleCategories
	 *
	 * @return void
	 */
	public function listAction() {
		
		$articleCategories = $this->articleCategoryRepository->findAll();
		$this->view->assign('articleCategories', $articleCategories);
	}


	/**
	 * Displays a single ArticleCategory
	 *
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory the ArticleCategory to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory) {
		$this->view->assign('articleCategory', $articleCategory);
	}


	/**
	 * Displays a form for creating a new  ArticleCategory
	 *
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory $newArticleCategory a fresh ArticleCategory object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newArticleCategory
	 */
	public function newAction(Tx_BbShreknet_Domain_Model_ArticleCategory $newArticleCategory = NULL) {
		
		$this->view->assign('newArticleCategory', $newArticleCategory);
	}


	/**
	 * Creates a new ArticleCategory and forwards to the list action.
	 *
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory $newArticleCategory a fresh ArticleCategory object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_BbShreknet_Domain_Model_ArticleCategory $newArticleCategory) {
		$this->articleCategoryRepository->add($newArticleCategory);
		$this->flashMessageContainer->add('Your new ArticleCategory was created.');
		
		$this->redirect('list');
	}



	/**
	 * Displays a form for editing an existing ArticleCategory
	 *
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory the ArticleCategory to display
	 * @return string A form to edit a ArticleCategory
	 */
	public function editAction(Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory) {
		$this->view->assign('articleCategory', $articleCategory);
	}



	/**
	 * Updates an existing ArticleCategory and forwards to the list action afterwards.
	 *
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory the ArticleCategory to display
	 */
	public function updateAction(Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory) {
		$this->articleCategoryRepository->update($articleCategory);
		$this->flashMessageContainer->add('Your ArticleCategory was updated.');
		$this->redirect('list');
	}


	/**
	 * Deletes an existing ArticleCategory
	 *
	 * @param Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory the ArticleCategory to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_BbShreknet_Domain_Model_ArticleCategory $articleCategory) {
		$this->articleCategoryRepository->remove($articleCategory);
		$this->flashMessageContainer->add('Your ArticleCategory was removed.');
		$this->redirect('list');
	}


}
?>