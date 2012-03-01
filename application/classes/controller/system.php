<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_System extends Controller {

	private $module,
			$url

	;

	public function __construct(Request $request, Response $response) {
		parent::__construct($request, $response);
	}

	public function before() {
		parent::before();
	}

	public function action_index() {
		try {
			$page = $this->getPage();
			$this->module = $page->module->name;


			$className = 'Module_' . ucfirst(strtolower($this->module));

			if (!class_exists($className)) {
				throw new HTTP_Exception_404('Module :module not found', array(':module', $this->module));
			}


			$class = new ReflectionClass($className);

			if ($class->isAbstract()) {
				throw new HTTP_Exception_404('Module :module is abstract', array(':module', $this->module));
			}

			$controller = $class->newInstance($this->request, $this->response);

			$class->getMethod('before')->invoke($controller);
			$class->getMethod('action_index')->invoke($controller);
			$class->getMethod('after')->invoke($controller);
		} catch (Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
			throw $exc;
		}
	}

	public function after() {

		parent::after();
	}

	/**
	 * @return Model_SystemPage 
	 */
	private function getPage() {

		$page = NULL;

		$this->url = new Lib_URL($this->request->param('url'));
		$level = $this->url->getLevel();


		if ($level == 1) {
			$page = ORM_MPTT::factory('systempage')
					->where('alias', '=', $this->url->getSegment(1))
					->and_where('level', '=', $this->url->getLevel())
					->find();
			return $page;
		}

		if ($level == 2) {
			$page = ORM_MPTT::factory('systempage')
					->where('alias', '=', $this->url->getSegment(2))
					->and_where('level', '=', $this->url->getLevel())
					->find();
			if ($page instanceof ORM_MPTT) {
				if ($page->is_root()) {
					throw new Kohana_Exception("Page :title not found", array(
						':title' => $page->title
					));
				} else {
					$parent = $page->parent();
					if ($parent->alias == $this->url->getSegment(1)) {
						return $page;
					} else {
						throw new Kohana_Exception("Page :title not found", array(
							':title' => $page->title
						));
					}
				}
			} else {
				throw new Kohana_Exception("Page :url not found", array(
					':url' => $this->url->getUrl()
				));
			}
		}
		
		if ($level == 3) {
			
		}
		
	}

}