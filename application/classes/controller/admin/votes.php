<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Votes extends Controller_Admin {

	public function before() {
		parent::before();
		$this->setTitle("Опросы", '/admin/votes');
	}

	public function getEntityPublicFields() {
		return array('question');
	}

	public function onAddInPost(ORM $entities) {
		return $this->onAddInPostIsHideDCreateDModif($entities);
	}

	public function action_add() {
		parent::action_add();
		$this->setupTitle('Добавление вопроса');
	}

	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование вопроса "' . $this->getEditedEntity()->question . '"');
	}

	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список вопросов');
	}

	public function getEntity() {
		return 'vote';
	}

}