<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Widget_Menu extends Controller_Widget {

	public $template = 'widget/menu';

	public function before() {
		parent::before();
	}

	public function action_index() {
		
		$menu = ORM::factory('menu')
				->where('is_main', '=', 1)
				->limit(1)
				->find();
		$this->template
				->bind('menu', $menu);
	}

}