<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Module_Albums extends Module{
	
	public function before() {
		parent::before();
		$this->setTitle("Альбомы");
	}
	
	public function action_index(){
		
		$this->action_list();
		
	}
	
	public function action_list(){
		$albums = ORM::factory('album')
				->where('is_deleted', '=', 0)
				->and_where('is_hide', '=', 0)
				->find_all()
				->as_array();
		
		
		
		$content = View::factory('module/albums/list')
				->bind('albums', $albums);
		
		$this->setContent($content);
	}
	
}