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
 * Controller for the Article object
 */
class Tx_BbShreknet_Controller_ArticleController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_BbShreknet_Domain_Repository_ArticleRepository
	 */
	protected $articleRepository;

	/**
	 * @param Tx_BbShreknet_Domain_Repository_ArticleRepository $articleRepository
 	 * @return void
	 */
	public function injectArticleRepository(Tx_BbShreknet_Domain_Repository_ArticleRepository $articleRepository) {
		$this->articleRepository = $articleRepository;
	}



	/**
	 * Displays a single Article
	 *
	 * @param Tx_BbShreknet_Domain_Model_Article $article the Article to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_BbShreknet_Domain_Model_Article $article) {
		$this->view->assign('article', $article);
	}


	/**
	 * Displays all Articles
	 *
	 * @return void
	 */
	public function listAction() {
		
		$articles = $this->articleRepository->findAll();
		$this->view->assign('articles', $articles);
	}


	/**
	 * Displays a form for creating a new  Article
	 *
	 * @param Tx_BbShreknet_Domain_Model_Article $newArticle a fresh Article object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newArticle
	 */
	public function newAction(Tx_BbShreknet_Domain_Model_Article $newArticle = NULL) {
		
		$this->view->assign('newArticle', $newArticle);
	}


	/**
	 * Creates a new Article and forwards to the list action.
	 *
	 * @param Tx_BbShreknet_Domain_Model_Article $newArticle a fresh Article object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_BbShreknet_Domain_Model_Article $newArticle) {
		$this->articleRepository->add($newArticle);
		$this->flashMessageContainer->add('Your new Article was created.');
		
		$this->redirect('list');
	}



	/**
	 * Displays a form for editing an existing Article
	 *
	 * @param Tx_BbShreknet_Domain_Model_Article $article the Article to display
	 * @return string A form to edit a Article
	 */
	public function editAction(Tx_BbShreknet_Domain_Model_Article $article) {
		$this->view->assign('article', $article);
	}



	/**
	 * Updates an existing Article and forwards to the list action afterwards.
	 *
	 * @param Tx_BbShreknet_Domain_Model_Article $article the Article to display
	 */
	public function updateAction(Tx_BbShreknet_Domain_Model_Article $article) {
		$this->articleRepository->update($article);
		$this->flashMessageContainer->add('Your Article was updated.');
		$this->redirect('list');
	}


	/**
	 * Deletes an existing Article
	 *
	 * @param Tx_BbShreknet_Domain_Model_Article $article the Article to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_BbShreknet_Domain_Model_Article $article) {
		$this->articleRepository->remove($article);
		$this->flashMessageContainer->add('Your Article was removed.');
		$this->redirect('list');
	}


}
?>