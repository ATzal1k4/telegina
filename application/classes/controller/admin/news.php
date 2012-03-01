<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_News extends Controller_Admin {

	public function getEntity() {
		return "new";
	}

	public function onAddInPost(ORM $entity) {
		return $this->onAddInPostIsHideDCreateDModif($entity);
	}

	public function onAddInShow() {
		$this->getFrontManager()
				->addCKEditor()
				->addCKEditorOn('announce')
				->addCKEditorOn('text');
	}

	public function onEditInShow() {
		
		$this->getFrontManager()
				->addCKEditor()
				->addCKEditorOn('announce')
				->addCKEditorOn('text');
		
	}

	public function onEditInPost(ORM $entity) {
		return $this->onEditInPostIsHideDModif($entity);
	}

	public function getEntityPublicFields() {
		return array('title', 'announce', 'text', 'author');
	}
	
	public function before() {
		parent::before();
		$this->setupTitle('Новости', '/admin/news');
	}
	
	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список новостей');
	}
	
	public function action_add() {
		parent::action_add();
		$this->setupTitle('Добавление новости');
	}
	
	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование новости "'.$this->getEditedEntity()->title.'"');
	}

}