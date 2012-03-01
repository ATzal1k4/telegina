<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Admin_Modules extends Controller_Admin_Module {

	public function before() {
		parent::before();
		$this->setupTitle('Модули', '/admin/modules');
		
	}

	public function getEntityType() {
		return 'module';
	}

	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Радактирование модуля "'.$this->getEditedEntity()->title.'"');
	}

	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список модулей');
	}

}