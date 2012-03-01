<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Module_Pages extends Module {

	public function before() {
		parent::before();
	}

	public function action_index() {

		$alias = $this->request->param("param1");

		$page = ORM::factory("page")
				->where('alias', '=', $alias)
				->cached()
				->find();
		if ($this->checkPage($page)) {


			$content = View::factory('module/pages/show')
					->bind('page', $page);


			$this->setTitle($page->title)
					->setContent($content);
		}
	}

	/**
	 * Проверить страницу на существование/публичность
	 * @param Model_Page $page
	 * @return boolean
	 * @throws HTTP_Exception_404 
	 */
	private function checkPage(Model_Page $page) {
		if ($page instanceof Model_Page) {

			if (!$page->loaded()) {
				throw new HTTP_Exception_404("Запрашиваемой страницы не существует");
				return FALSE;
			}

			if ($page->is_deleted == 1) {
				throw new HTTP_Exception_404("Эта страница была удалена");
				return FALSE;
			}

			if ($page->is_hide == 1) {
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