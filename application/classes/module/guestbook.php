<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Module_Guestbook extends Module {

	private $captcha = null;

	public function before() {
		parent::before();
	}

	public function action_index() {
		$this->action_list();
	}

	public function action_list() {

		$errors = array();
		$this->captcha = Captcha::instance();

		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array('nick', 'email', 'site', 'text'));
			$comment = ORM::factory('comment');
			$comment->values($data)
					->set('date_create', date(DEFAULT_DATE_FORMAT))
					->set('date_modif', date(DEFAULT_DATE_FORMAT));

			if (!$this->captcha->valid($_POST['captcha'])) {
				$errors['captcha'] = "Код с картинки введен неверно";
			}

			try {

				if (count($errors) == 0) {
					$comment->save();
					Session::instance()->set("nick", $data['nick']);
					$this->request->redirect('/guestbook/success/');
				}
			} catch (ORM_Validation_Exception $exc) {
				$errors = $exc->errors('models');
			}
		}



		$comments = ORM::factory('comment')
				->where('is_deleted', '=', 0)
				->and_where('is_hide', '=', 0)
				->and_where('parent_id', 'IS', NULL)
				->order_by('date_create', 'desc')
				->find_all()
				->as_array();

		$content = View::factory('module/guestbook/list')
				->bind('comments', $comments)
				->bind('data', $data)
				->bind('errors', $errors)
				->set('captcha', $this->captcha->render(TRUE));
		$this->setContent($content);
	}

	public function action_success() {
		
		$this->setContent(View::factory('module/guestbook/success')->set('nick', Session::instance()->get("nick", 'Посетитель')));
		Session::instance()->delete("nick");
	}
	
	public function action_comment(){
		
		$id = abs((int) $this->request->param('id'));
		$parentComment = ORM::factory('comment', $id);
		$errors = array();
		$this->captcha = Captcha::instance();

		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array('nick', 'email', 'site', 'text'));
			$comment = ORM::factory('comment');
			$comment->values($data)
					->set('date_create', date(DEFAULT_DATE_FORMAT))
					->set('date_modif', date(DEFAULT_DATE_FORMAT))
					->set('parent_id', $parentComment->comment_id);

			if (!$this->captcha->valid($_POST['captcha'])) {
				$errors['captcha'] = "Код с картинки введен неверно";
			}

			try {

				if (count($errors) == 0) {
					$comment->save();
					Session::instance()->set("nick", $data['nick']);
					$this->request->redirect('/guestbook/success/');
				}
			} catch (ORM_Validation_Exception $exc) {
				$errors = $exc->errors('models');
			}
		}
		
		$content = View::factory('module/guestbook/comment')
				->bind('comment', $parentComment)
				->bind('data', $data)
				->bind('errors', $errors)
				->set('captcha', $this->captcha->render(TRUE));
		$this->setContent($content);
		
	}

}