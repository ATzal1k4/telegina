<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Widgets extends Controller_Admin_Module {

	public function before() {
		parent::before();
		$this->setupTitle('Виджеты', '/admin/widgets');
	}

	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список виджетов');
	}

	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Радактирование виджета "' . $this->getEditedEntity()->title . '"');
	}

	public function getEntityType() {
		return 'widget';
	}

}