<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Main extends Controller_Admin {

	public function before() {
		parent::before();
		$this->setTitle("Главная панель");
	}

	public function action_index() {
		
	}

	public function action_list() {
		
	}

	public function getEntity() {
		return 'main';
	}

}