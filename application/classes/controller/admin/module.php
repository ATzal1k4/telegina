<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Controller_Admin_Module extends Controller_Admin {

	abstract public function getEntityType();

	public function getEntity() {
		return 'module';
	}

	public function onListInShow(ORM $entities) {
		return $entities->where('type', '=', $this->getEntityType());
	}

	public function onListWithContent(View $content) {
		return parent::onListWithContent($content)
						->set('entityType', $this->getEntityType());
	}

	public function onEditWithContent(View $content) {
		return parent::onEditWithContent($content)
						->set('entityType', $this->getEntityType());
	}

	public function getEntityPublicFields() {
		return array('title');
	}

	public function action_list() {
		parent::action_list();
	}

	public function action_edit() {
		parent::action_edit();
	}

	public function before() {
		parent::before();
		$this->setControllerNameForList($this->getEntityType());
	}

}