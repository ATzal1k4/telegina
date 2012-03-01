<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class WidgetManager {

	private static $instance = NULL;
	private $wvEntities = array();

	/**
	 * 
	 * @var View default view
	 */
	public static function getInstance() {
		if (self::$instance == NULL)
			self::$instance = new WidgetManager ();
		return self::$instance;
	}

	private function __construct() {
		
	}

	private function __clone() {
		
	}

	/**
	 * Получить виджеты
	 * @return array
	 */
	public function getWidgets() {
		return $this->wvEntities;
	}

	/**
	 * Зарегестрировать виджет
	 * @param Widget $widget
	 * @param View $view
	 * @return \WidgetManager 
	 */
	public function registerWidget(Widget $widget, View $view) {

		array_push($this->wvEntities, new WVContainer($widget, $view));
		return $this;
	}

	/**
	 * Удалить виджет
	 * @param Widget $widget
	 * @param View $view
	 * @return \WidgetManager 
	 */
	public function removeWidget(Widget $widget, View $view) {
		$removeContainer = new WVContainer($widget, $view);
		foreach ($this->wvEntities as $k => $container) {
			if ($container instanceof WVContainer) {
				if ($container->equals($removeContainer)) {
					unset($this->wvEntities[$k]);
				}
			}
		}
		return $this;
	}

	/**
	 * Удалить контейнер
	 * @param WVContainer $container
	 * @return \WidgetManager 
	 */
	public function removeContainer(WVContainer $container) {
		$this->removeWidget($container->getWidget(), $container->getView());
		return $this;
	}
	
	/**
	 * Удалить все виджеты
	 * @return \WidgetManager 
	 */
	public function removeWidgets() {
		$this->wvEntities = array();
		return $this;
	}

	/**
	 * Рендеринг виджетов
	 * @param View $view 
	 */
	public function render(View $view = NULL) {

		foreach ($this->wvEntities as $container) {
			if ($container instanceof WVContainer) {
				if ($view === NULL) {
					$container->render();
				} else {
					if ($container->getView() == $view) {
						$container->render();
					}
				}
				$this->removeContainer($container);
			}
		}
	}

}