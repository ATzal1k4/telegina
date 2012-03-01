<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Guestbook extends Controller_Admin {

	public function getEntity() {
		return 'comment';
	}

	public function before() {
		parent::before();
		$this->setupTitle('Гостевая книга', '/admin/guestbook');
	}

	public function action_list() {

		$comments = ORM::factory($this->getEntity())
				->where('is_deleted', '=', 0)
				->and_where('parent_id', 'IS', NULL)
				->order_by('date_create', 'desc')
				->find_all()
				->as_array();

		$content = View::factory('admin/guestbook/list')
				->bind('comments', $comments);
		$this->setContent($content);
	}

	public function action_delete() {
		$id = abs((int) $this->request->param("id"));
		$entity = ORM::factory($this->getEntity(), $id);

		$comments = ORM::factory('comment')
				->where('parent_id', '=', $id)
				->and_where('is_deleted', '=', 0)
				->find_all()
				->as_array();

		try {
			foreach ($comments as $key) {
				$comments[$key]->set("is_deleted", 1)->save();
			}
		} catch (ORM_Validation_Exception $exc) {
			throw new Exception("В ходе операции произощла ошибка. Тип объекта: " . $this->getEntity() . " :: Ошибка: " . $exc->getMessage());
		}

		if (Entity::delete($entity)) {
			$this->request->redirect("/admin/guestbook/list/");
		} else {
			throw new Exception("В ходе операции произощла ошибка. Тип объекта: " . $this->getEntity());
		}
	}

}