<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Menuitems extends Controller_Admin {

	public function getEntity() {
		return "menuitem";
	}

	public function getEntityPublicFields() {
		return array('text', 'url');
	}

	public function onEditInPost(ORM $entity) {
		return $this->onEditInPostIsHideDModif($entity);
	}

	public function before() {
		parent::before();
		$this->setupTitle('Меню', '/admin/menus');
	}

	public function action_list() {

		$id = abs((int) $this->request->param('id'));
		$menu = ORM::factory('menu', $id);

		if ($menu->loaded()) {
			$items = $menu->items
					->and_where('is_deleted', '=', 0)
					->and_where('parent_id', 'IS', NULL)
					->order_by("position", 'desc')
					->find_all()
					->as_array();

			$content = View::factory("admin/{$this->getEntity()}s/list")
					->bind('menu', $menu)
					->bind('items', $items);
			$this->setupTitle('Список пунктов меню "' . $menu->title . '"');
			$this->getFrontManager()->addScript('media/js/jquery/jquery.jExpand.js');
		} else {
			$this->addError("Object ['{$this->getEntity()}'] can not loaded");
			$content = View::factory('admin/errors/list')
					->set('errors', $this->getErrors());
		}

		$this->setContent($content);
	}

	public function action_add() {

		$menu_id = $this->request->param("id");
		$menu_id = abs((int) $menu_id);
		$menu = ORM::factory('menu', $menu_id);
		if ($menu->loaded()) {
			if (isset($_POST['submit'])) {


				$data = Arr::extract($_POST, array('text', 'url'), NULL);


				$item = ORM::factory('menuitem');
				$item->values($data)
						->set('is_hide', isset($_POST['is_hide']))
						->set('date_create', date(DEFAULT_DATE_FORMAT))
						->set('date_modif', date(DEFAULT_DATE_FORMAT))
						->set('position', Entity::getNextPosition('menu_items'))
						->set('menu_id', $menu->menu_id);

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
					->bind('menu', $menu)
					->set('errors', $this->getErrors())
					->bind('data', $data);

			$this->setupTitle("Добавление пункта меню к \"{$menu->title}\"");
		} else {
			$this->addError("Object ['{$this->getEntity()}'] can not loaded");
			$content = View::factory('admin/errors/list')
					->set('errors', $this->getErrors());
		}
		$this->setContent($content);
	}

	public function action_edit() {
		parent::action_edit();
		$this->setupTitle('Редактирование пункта меню "' . $this->getEditedEntity()->text . '"');
	}

	public function action_down() {
		$id = $this->request->param("id");
		$id = abs((int) $id);

		$item = ORM::factory($this->getEntity(), $id);

		if (Entity::moveDOWN($item, array('menu_id' => $item->menu_id))) {
			$this->goBack();
		} else {
			throw new Exception("Операция не удалась");
		}
	}

	public function action_up() {
		$id = $this->request->param("id");
		$id = abs((int) $id);

		$item = ORM::factory($this->getEntity(), $id);

		if ($item->parent_id == NULL) {
			$attribs = array(
				'menu_id' => $item->menu_id
			);
		} else {
			$attribs = array(
				'menu_id' => $item->menu_id,
				'parent_id' => $item->parent_id
			);
		}


		if (Entity::moveUP($item, $attribs)) {
			$this->goBack();
		} else {
			throw new Exception("Операция не удалась");
		}
	}

	public function action_addchild() {

		$id = abs((int) $this->request->param('id'));
		$entity = ORM::factory($this->getEntity(), $id);

		if ($entity->loaded()) {

			if (isset($_POST['submit'])) {


				$data = Arr::extract($_POST, array('text', 'url'), NULL);


				$item = ORM::factory('menuitem');
				$item->values($data)
						->set('is_hide', isset($_POST['is_hide']))
						->set('date_create', date(DEFAULT_DATE_FORMAT))
						->set('date_modif', date(DEFAULT_DATE_FORMAT))
						->set('position', Entity::getNextPosition('menu_items'))
						->set('parent_id', $entity->pk())
						->set('menu_id', $entity->menu_id);

				try {
					$item->save();
					$this->goBackUsingSession();
				} catch (ORM_Validation_Exception $exc) {
					$this->setErrors($exc->errors(Entity::$errorMsgsDir));
				}
			}

			if ($this->noErrors())
				$this->getSessionManager()->set(Controller_Admin::$goBackTagURL, $this->request->referrer());
			$content = View::factory("admin/{$this->getEntity()}s/addchild")
					->set('errors', $this->getErrors())
					->bind('entity', $entity);
		} else {
			$this->addError("Object ['{$this->getEntity()}'] not loaded");
			$content = View::factory('admin/errors/list')
					->set('errors', $this->getErrors());
		}
		$this->setContent($content);
	}

}