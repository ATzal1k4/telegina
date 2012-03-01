<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Module_Photos extends Module{
	
	protected static $galleryTypes = array(
		'default' => 'list',
		'fullScreen' => 'fullScreenGallery',
		'adaptive' => 'adaptive',
		'ovalGallery' => 'ovalGallery',
	);
	
	public static $openInNewPage = false;


	public static $galleryType = '';


	public function before() {
		parent::before();
	}
	
	public function action_index(){
		$this->action_list();
	}
	
	public function action_list(){
		$id = abs((int) $this->request->param('param1'));
		$album = ORM::factory('album', $id);
		$photos = $album->photos
				->and_where('is_deleted', '=', 0)
				->and_where('is_hide', '=', 0)
				->find_all();
		
		$this->setGalleryType('ovalGallery');
		
		$content = View::factory('module/photos/'.self::$galleryTypes[self::$galleryType])
				->bind('album', $album)
				->bind('photos', $photos);
		$this->setContent($content);
	}
	
	protected function setGalleryType($type = 'default') {
		
		switch ($type) {
			case 'default':
				self::$galleryType = 'default';
				break;
			case 'fullScreen':
				self::$galleryType = 'fullScreen';
				self::$fullPage = TRUE;
				self::$openInNewPage = TRUE;
				break;
			case 'adaptive':
				self::$galleryType = 'adaptive';
				self::$fullPage = TRUE;
				self::$openInNewPage = FALSE;
				break;
			case 'ovalGallery':
				self::$galleryType = 'ovalGallery';
				self::$fullPage = TRUE;
				self::$openInNewPage = FALSE;
				break;
			default:
				break;
		}
		
	}
	
	
	
}