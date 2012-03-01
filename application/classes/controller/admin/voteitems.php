<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Voteitems extends Controller_Admin {

	public function getEntity() {
		return 'voteitem';
	}

	public function getEntityPublicFields() {
		return array('text');
	}

	public function onEditInPost(ORM $entities) {
		return $this->onEditInPostIsHideDModif($entities);
	}

	public function before() {
		parent::before();
		$this->setupTitle('Вопросы', '/admin/votes');
	}

	public function action_list() {
		$id = abs((int) $this->request->param('id'));
		$vote = ORM::factory('vote', $id);

		if ($vote->loaded()) {
			$this->setupTitle('Список ответов на вопрос "' . $vote->question . '"', '/admin/voteitems/list/' . $id);

			$items = $vote->items
					->and_where('is_deleted', '=', 0)
					->order_by('position', 'desc')
					->find_all()
					->as_array();

			$content = View::factory('admin/voteitems/list')
					->bind('vote', $vote)
					->bind('items', $items);
			$this->setContent($content);
		} else {
			throw new Exception("This vote not found");
		}
	}

	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование ответа "' . $this->getEditedEntity()->text . '"');
	}

	public function action_add() {
		$id = abs((int) $this->request->param('id'));
		$vote = ORM::factory('vote', $id);
		if ($vote->loaded()) {
			if (isset($_POST['submit'])) {

				$data = Arr::extract($_POST, $this->getEntityPublicFields());
				$item = ORM::factory($this->getEntity())
						->values($data)
						->set('date_create', date(DEFAULT_DATE_FORMAT))
						->set('date_modif', date(DEFAULT_DATE_FORMAT))
						->set('is_hide', isset($_POST['is_hide']))
						->set('vote_id', $vote->pk())
						->set('position', Entity::getNextPosition('vote_items', array('vote_id' => $vote->pk())));

				try {
					$item->save();
					$this->goBackUsingSession();
				} catch (ORM_Validation_Exception $exc) {
					$this->setErrors($exc->errors(Entity::$errorMsgsDir));
				}
			}

			if ($this->noErrors()) {
				$this->getSessionManager()->set(Controller_Admin::$goBackTagURL, $this->request->referrer());
			}

			$content = View::factory('admin/' . $this->getEntity() . 's/add')
					->bind('vote', $vote)
					->bind('data', $data)
					->set('errors', $this->getErrors());

			$this->setupTitle('Добавление варианта ответа к вопросу "' . $vote->question . '"');
		} else {
			$this->addError("Object ['{$this->getEntity()}'] can not loaded");
			$content = View::factory('admin/errors/list')
					->set('errors', $this->getErrors());
		}


		$this->setContent($content);
	}

	public function action_down() {
		$this->move(Entity::MOVE_DOWN);
	}

	public function action_up() {
		$this->move(Entity::MOVE_UP);
	}

	private function move($to = Entity::MOVE_UP) {

		try {
			$id = abs((int) $this->request->param("id"));
			$item = ORM::factory($this->getEntity(), $id);

			switch ($to) {
				case Entity::MOVE_UP:
					$result = Entity::moveUP($item, array('vote_id' => $item->vote_id));

					break;
				case Entity::MOVE_DOWN:
					$result = Entity::moveDOWN($item, array('vote_id' => $item->vote_id));
					break;
				default:
					throw new Kohana_Exception("Can not move entity :name", array(':name' => $item->object_name()));
					break;
			}

			if (!$result) {
				throw new Kohana_Exception("Object can not moved");
			}
			
			$this->goBack();
		} catch (Kohana_Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		} catch (Exception $e) {
			ErrorManager::getInstance()->addException($e);
		}

		
	}

}