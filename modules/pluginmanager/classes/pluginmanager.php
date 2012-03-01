<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PluginManager {

	public static $mediaDir = 'media/application/plugins/';
	private static $_instance = null;
	private $registeredPlugins = array();
	private $pluginContent = '';

	/**
	 *
	 * @return PluginManager
	 */
	public static function getInstance() {
		if (self::$_instance == NULL) {
			self::$_instance = new PluginManager();
		}
		return self::$_instance;
	}

	/**
	 * Зарегестрировать плагин
	 * @param Plugin $plugin
	 * @return \PluginManager 
	 */
	public function registerPlugin(Plugin $plugin) {
		if (!isset($this->registeredPlugins[$plugin->getName()])) {
			$this->registeredPlugins[$plugin->getName()] = $plugin;
		}
		return $this;
	}

	/**
	 * Рендеринг зарегестрированных плагинов 
	 */
	public function render() {		
		
		/* @var $name string */
		foreach ($this->registeredPlugins as $name => $plugin) {
			$this->setPluginContent($plugin->render());
		}
		
		FrontManager::getInstance()->setPluginContent($this->getPluginContent());
		
	}

	/**
	 * Удалить зарегестрированный плагин
	 * @param Plugin $plugin
	 * @return \PluginManager 
	 */
	public function removePlugin(Plugin $plugin) {
		if (isset($this->registeredPlugins[$plugin->getName()])) {
			unset($this->registeredPlugins[$plugin->getName()]);
		}
		return $this;
	}

	/**
	 * Получить содержимое вывода плагинов
	 * @return string 
	 */
	public function getPluginContent() {
		return $this->pluginContent;
	}

	/**
	 * Добавить содержимое в вывод
	 * @param string $pluginContent
	 * @return \PluginManager 
	 */
	public function setPluginContent($pluginContent) {
		$this->pluginContent .= $pluginContent;
		return $this;
	}

	public function __toString() {
		return $this->getPluginContent();
	}
	
	private function __construct() {
		
	}

	private function __clone() {
		
	}

}