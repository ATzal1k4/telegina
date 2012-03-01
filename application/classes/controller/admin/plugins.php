<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Plugins extends Controller_Admin_Module {

	public function before() {
		parent::before();
		$this->setupTitle('Плагины', '/admin/plugins');
	}

	public function action_list() {
		parent::action_list();
		$this->setupTitle('Список плагинов');
	}

	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Радактирование плагина "' . $this->getEditedEntity()->title . '"');
	}

	public function getEntityType() {
		return 'plugin';
	}

}