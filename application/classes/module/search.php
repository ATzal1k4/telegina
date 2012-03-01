<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Module_Search extends Module {
	
	public function before() {
		parent::before();
	}
	
	public function action_index() {
		
		$this->getFrontManager()->addStyle('media/googlesearch/styles.css')
				->addJQueryJS()
				->addScript('media/googlesearch/script.js');
		
		$content = View::factory('module/search/index')
				->bind('searchPost', $_POST['s']);
		$this->setContent($content);
		
	}
	
}