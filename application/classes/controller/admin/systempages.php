<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_SystemPages extends Controller_Admin {

	public function before() {
		parent::before();
		$this->setupTitle("Страницы", '/admin/systempages');
	}

	/**
	 * Инициализирующие методы
	 */
	
	public function getEntity() {
		return 'systempage';
	}

	public function getEntityPublicFields() {
		return array('alias', 'module_id', 'title', 'parent_id');
	}
	
	
	/**
	 * Создание 
	 */
	
	public function onAddInPost(ORM $entities) {
		return $this->onAddInPostIsHideDCreateDModif($entities)
				->set('show_in_menu', isset($_POST['show_in_menu']));
	}
	
	public function onAddWithContent(View $content) {
		$modules = ORM::factory('module')
				->where('is_hide', '=', 0)
				->and_where('is_deleted', '=', 0)
				->and_where('type', '=', 'module')
				->find_all();
		$content->set('modules', $modules);
		return $content;
	}
	
	public function action_add() {
		parent::action_add();
		$this->setupTitle('Создание новой страницы');
	}
	
	
	/**
	 * редактирование 
	 */
	
	public function onEditInPost(ORM $entities) {
		return parent::onEditInPostIsHideDModif($entities)
				->set('show_in_menu', isset($_POST['show_in_menu']));
	}
	
	public function onEditWithContent(View $content) {
		return $this->onAddWithContent($content);
	}
	
	public function action_edit() {
		parent::action_edit();
		$this->setupTitle("Редактирование страницы \"{$this->getEditedEntity()->title}\"");
	}


	/**
	 * список страниц 
	 */

	public function action_list() {
		parent::action_list();
		$this->setupTitle("Список страниц");
		
		$page1 = ORM_MPTT::factory($this->getEntity(), 1);
		$page2 = ORM_MPTT::factory($this->getEntity(), 2);
		$page3 = ORM_MPTT::factory($this->getEntity(), 3);
		$page4 = ORM_MPTT::factory($this->getEntity(), 4);
		
		
		
		if ($page1 instanceof ORM_MPTT 
				and $page2 instanceof ORM_MPTT 
				and $page3 instanceof ORM_MPTT
				and $page4 instanceof ORM_MPTT) {
			
			
			$page = ORM::factory($this->getEntity());
			
			$page->title = "title";
			$page->alias = "alias";
			$page->module_id = 3;
			$page->position = 1;
			$page->date_create = date(DEFAULT_DATE_FORMAT);
			$page->date_modif = date(DEFAULT_DATE_FORMAT);
			//$page->insert_as_last_child($page1);
		
			
		}
		
		
	}

	
	/**
	 * манипуляуия страницами 
	 */

	public function action_showinmenu() {
		$this->manipulateMenu('show');
	}

	public function action_hideinmenu() {
		$this->manipulateMenu('hide');
	}

	private function manipulateMenu($action = 'show') {

		try {
			$id = abs((int) $this->request->param('id'));
			$entity = ORM::factory($this->getEntity(), $id);

			switch ($action) {
				case 'show':
					$entity->set('show_in_menu', 1)
							->save();
					break;
				case 'hide':
					$entity->set('show_in_menu', 0)
							->save();
					break;
				default:
					throw new Kohana_Exception("Operation :action not defined",
							array(
								':action' => $action
					));
					break;
			}

			$this->goBack();
		} catch (ORM_Validation_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		} catch (Kohana_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}
	
	public function action_subpage() {
		try {
			
			
			$this->setEditedEntity($this->initEntity());
			
			if (isset($_POST['submit'])) {
				$data = Arr::extract($_POST, $this->getEntityPublicFields());

				$entity = ORM::factory($this->getEntity());
				$entity->values($data);
				$entity = $this->onAddInPost($entity);

				try {
					
					
					$entity->insert_as_first_child($this->getEditedEntity());
					
					echo $entity->title;
					
					die;
					$this->goBackUsingSession();
				} catch (ORM_Validation_Exception $exc) {
					$this->getErrorManager()->setErrors($exc->errors(Entity::$errorMsgsDir));
				} catch (Exception $e) {
					$this->getErrorManager()->addException($e);
				}
			}

			if ($this->noErrors())
				$this->getSessionManager()->set(Controller_Admin::$goBackTagURL, $this->request->referrer());

			$this->onAddInShow();

			$content = View::factory("admin/{$this->getEntity()}s/add")
					->set("errors", $this->getErrorManager()->getErrors())
					->set("parent", $this->getEditedEntity())
					->bind('data', $data)
					->set('entityName', $this->getEntity());

			$content = $this->onAddWithContent($content);

			$this->setContent($content);
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
		$this->setupTitle("Помещение страницы в страницу '{$this->getEditedEntity()->title}'");
		
	}
	
	public function action_inpage() {
		
	}
	
	
	/**
	 * управление 
	 */
	
	public function action_manage() {
		
	}

}