<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Albums extends Controller_Admin {

	public function getEntity() {
		return 'album';
	}

	public function before() {
		parent::before();
		$title = "Альбомы";
		$this->setupTitle($title, '/admin/albums');
		
	}

	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список альбомов', '/admin/albums/list');
	}
	
	public function action_add() {
		parent::action_add();
		$this->setupTitle("Создание альбома", '/admin/albums/add');
	}
	
	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование альбома "'.$this->getEditedEntity()->title.'"');
	}

	public function getEntityPublicFields() {
		return array('title', 'description');
	}

	public function onAddInShow() {

	}

	public function onAddInPost(ORM $entities) {
		return $this->onAddInPostIsHideDCreateDModif($entities);
	}

	public function onEditInShow() {

	}

	public function onEditInPost(ORM $entities) {
		return $this->onEditInPostIsHideDModif($entities);
	}

}