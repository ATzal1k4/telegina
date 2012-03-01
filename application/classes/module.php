<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Module extends Controller_Base {

	public $template = "public";
	public static $fullPage = false;

	public function before() {
		parent::before();

		$this->getPluginManager()
		//->registerPlugin(new Plugin_ScrollToTopButton($this))
		//->registerPlugin(new Plugin_WonderSerfing($this))
		//->render()
		;

		
		$this->getWidgetManager()
					->registerWidget(new Widget('menu'), $this->template)
					->registerWidget(new Widget('vote'), $this->template)
					->registerWidget(new Widget('links'), $this->template)
					->registerWidget(new Widget('visitor'), $this->template)
					->registerWidget(new Widget('new'), $this->template)
					->registerWidget(new Widget('ulogin'), $this->template)
					->registerWidget(new Widget('search'), $this->template)
					->registerWidget(new Widget('weather'), $this->template)
			;
		
		




		$this->getFrontManager()->add99Line(TRUE);
	}
	
	public function after() {
		
		/**
		 * Если вывод будет производиться в PDF формате. 
		 */
		if ($this->request->param('param6') == md5(Module_Pdf::PDF_SALT)) {
			$this->getWidgetManager()
					->removeWidgets()
					->registerWidget(new Widget('menu'), $this->template);
		}
		
		parent::after();
	}

}