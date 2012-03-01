<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class WVContainer {

	/**
	 *
	 * @var Widget
	 */
	private $widget = NULL;

	/**
	 *
	 * @var View
	 */
	private $view = NULL;

	function __construct(Widget $widget, View $view) {
		$this->widget = $widget;
		$this->view = $view;
	}

	/**
	 *
	 * @return Widget
	 */
	public function getWidget() {
		return $this->widget;
	}

	/**
	 *
	 * @return View
	 */
	public function getView() {
		return $this->view;
	}

	/**
	 *
	 * @param Widget $widget
	 * @return \WVContainer 
	 */
	public function setWidget(Widget $widget) {
		$this->widget = $widget;
		return $this;
	}

	/**
	 *
	 * @param View $view
	 * @return \WVContainer 
	 */
	public function setView(View $view) {
		$this->view = $view;
		return $this;
	}

	public function render() {
		$this->getView()->set($this->getWidget()->getName(), $this->getWidget()->render());
	}

	/**
	 *
	 * @param WVContainer $container
	 * @return boolean 
	 */
	public function equals(WVContainer $container) {
		if ($this->getView() == $container->getView() and $this->getWidget() == $container->getWidget()) {
			return TRUE;
		}
		return FALSE;
	}

}