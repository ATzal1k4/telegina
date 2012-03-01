<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Plugin_ScrollToTopButton extends Plugin {

	public function __construct(Controller_Base $controller) {
		parent::__construct($controller);
	}

	public function getResult() {


		$this->getBaseController()
				->getFrontManager()
				->addJQueryJS();
		$this->addStyle('style.css')
				->addScript('script.js');
		$return = View::factory('plugin/' . $this->getName())->render();


		return $return;
	}

	public function getName() {
		return 'ScrollToTopButton';
	}

}