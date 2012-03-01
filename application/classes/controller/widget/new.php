<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Widget_New extends Controller_Widget {
	
	public $template = 'widget/new';
	
	public function before() {
		parent::before();
	}
	
	public function action_index() {
		
		$news = Entity::listsNonHidable('new', 5, NULL, 'date_create', 'desc');
		
		$this->template->bind('news', $news);
		
	}
	
}