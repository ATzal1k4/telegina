<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Widget_Links extends Controller_Widget {

	public $template = 'widget/links';

	public function before() {
		parent::before();
	}

	public function action_index() {
		$links = ORM::factory('link')
				->where('is_deleted', '=', 0)
				->and_where('is_hide', '=', 0)
				->find_all();
		$this->template->links = $links;
	}

}