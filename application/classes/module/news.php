<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Module_News extends Module{
	
	public function action_index(){
		$this->action_list();
	}
	
	public function action_list(){
		$news = ORM::factory('new')
				->where('is_hide', '=', 0)
				->and_where('is_deleted', '=', 0)
				->order_by('date_create', 'desc')
				->find_all()
				->as_array();
		

		
		$content = View::factory('module/news/list')
				->bind('news', $news);
		$this->setContent($content)->setTitle("Новости");
	}
	
	public function action_show(){
		$id = abs((int) $this->request->param('param1'));
		$new = ORM::factory('new', $id);
		if ($this->checkNew($new)) {
			
			$content = View::factory('module/news/show')
					->bind('new', $new);
			
			$this->setTitle($new->title)
					->setContent($content);
			
		}
	}
	
	/**
	 * Проверить страницу на существование/публичность
	 * @param Model_New $new
	 * @return boolean
	 * @throws HTTP_Exception_404 
	 */
	private function checkNew($new){
		if ($new instanceof Model_New) {
			
			if ($new->new_id == 0) {
				throw new HTTP_Exception_404("Запрашиваемой страницы не существует");
				return FALSE;
			}
			
			if ($new->is_deleted == 1) {
				throw new HTTP_Exception_404("Эта страница была удалена");
				return FALSE;
			}
			
			if ($new->is_hide == 1) {
				throw new HTTP_Exception_404("Эта страница была скрыта от общего доступа");
				return FALSE;
			}
			
			return TRUE;
			
		} else {
			throw new HTTP_Exception_404("Запрашиваемой страницы не существует");
			return FALSE;
		}
	}
	
}