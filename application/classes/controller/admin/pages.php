<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Pages extends Controller_Admin {

	public function before() {
		parent::before();
		$this->setupTitle('Страницы', '/admin/pages');
	}
	
	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список страниц');
	}
	
	public function action_add() {
		parent::action_add();
		$this->setupTitle('Создание новой страницы');
	}
	
	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование страницы "'.$this->getEditedEntity()->title.'"');
	}

	public function getEntity() {
		return "page";
	}

	public function getEntityPublicFields() {
		return array('title', 'alias', 'text');
	}

	public function onEditInPost(ORM $entity) {
		$entity->set('is_hide', isset($_POST['is_hide']))
				->set('date_modif', date(DEFAULT_DATE_FORMAT));
		return $entity;
	}

	public function onEditInShow() {
		$this->getFrontManager()->addCKEditor();
		$this->getFrontManager()->addCKEditorOn('text');
	}

	public function onAddInPost(ORM $entity) {
		return $entity->set('date_create', date(DEFAULT_DATE_FORMAT))
						->set('date_modif', date(DEFAULT_DATE_FORMAT))
						->set('is_hide', isset($_POST['is_hide']));
	}

	public function onAddInShow() {
		$this->getFrontManager()->addCKEditor();
		$this->getFrontManager()->addCKEditorOn('text');
	}

}