<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Plugin_WonderSerfing extends Plugin {

	public function getName() {
		return 'WonderSerfing';
	}

	public function getResult() {
		$this->getBaseController()->getFrontManager()->addJQueryJS();
		$this->addScript('script.js');
	}

}