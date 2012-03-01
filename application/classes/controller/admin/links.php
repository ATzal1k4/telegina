<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Links extends Controller_Admin {

	public function getEntity() {
		return "link";
	}
	
	public function getEntityPublicFields() {
		return array('title', 'url');
	}
	
	public function onAddInPost(ORM $entities) {
		return $this->onAddInPostIsHideDCreateDModif($entities);
	}
	
	public function onEditInPost(ORM $entities) {
		return $this->onEditInPostIsHideDModif($entities);
	}
		
	public function before() {
		parent::before();
		$this->setupTitle('Наши друзья', '/admin/links');
	}
	
	public function action_list() {
		parent::action_list();
		$this->setupTitle('Ссылки');
		
	}
	
	public function action_add() {
		parent::action_add();
		$this->setupTitle('Добавление новой ссылки');
	}
	
	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование ссылки "'.$this->getEditedEntity()->title.'"');
	}

}