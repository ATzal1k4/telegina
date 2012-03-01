<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Widget_Breadcrumb extends Controller_Widget {

	public $template = 'widget/breadcrumb';

	public function action_index() {
		$items = unserialize(base64_decode($this->request->param('param')));
		$this->template->bind('items', $items);
	}

}