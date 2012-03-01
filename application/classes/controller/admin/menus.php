<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Menus extends Controller_Admin {

	public function before() {
		parent::before();
		$this->setupTitle('Меню', '/admin/menus');
	}
	
	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список меню');
	}
	
	public function action_add() {
		parent::action_add();
		$this->setupTitle('Добавление нового меню');
	}
	
	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование меню "'.$this->getEditedEntity()->title.'"');
	}

	public function getEntity() {
		return "menu";
	}

	public function getEntityPublicFields() {
		return array('title');
	}

	public function onAddInPost(ORM $entity) {
		return $entity->set("date_create", date(DEFAULT_DATE_FORMAT))
						->set("date_modif", date(DEFAULT_DATE_FORMAT))
						->set('is_hide', isset($_POST['is_hide']));
	}

	public function onAddInShow() {
		;
	}

	public function onEditInPost(ORM $entity) {
		return $entity->set("date_modif", date(DEFAULT_DATE_FORMAT))
						->set('is_hide', isset($_POST['is_hide']));
	}

	public function onEditInShow() {
		;
	}

}