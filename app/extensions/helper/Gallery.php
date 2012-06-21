<?php

namespace app\extensions\helper;

use lithium\storage\Cache;
use lithium\core\Libraries;

/**
 * Simple helper for showing random (but cached) groups of images inside the nav.
 */
class Gallery extends \lithium\template\helper\Html {

	/**
	 * Path to gallery images.
	 *
	 * @var string
	 **/
	protected $_galleryPath = '';

	/**
	 * Automatically configured class variables.
	 *
	 * @var array
	 **/
	protected $_autoConfig = array('galleryPath');

	/**
	 * List of file paths to gallery images.
	 *
	 * @var array
	 **/
	protected $_galleryFiles = array();

	/**
	 * Gallery constructor. Only option: `'galleryPath'`, points to parent folder for
	 * gallery images.
	 *
	 * @param array $config Configuration options.
	 * @return Gallery
	 */
	public function __construct(array $config = array()) {
		$defaults = array(
			'galleryPath' => Libraries::get('app', 'path') . '/webroot/img/gallery',
		);
		parent::__construct($config + $defaults);
	}

	/**
	 * Gallery init.
	 *
	 * @return void
	 */
	protected function _init() {
		parent::_init();
		$this->_getGalleryFiles();
	}

	/**
	 * Gets and caches gallery file list.
	 *
	 * @return void
	 */
	protected function _getGalleryFiles() {
		$galleryFiles = Cache::read('default', 'gallery_files');
		if($galleryFiles === false) {
			$iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->_galleryPath));
			$filesIter = new \RegexIterator($iterator, '/^.+\.jpg$/i', \RecursiveRegexIterator::GET_MATCH);
			foreach($filesIter as $file) {
				$this->_galleryFiles[] = str_replace(Libraries::get('app', 'path') . '/webroot', '', $file[0]);
			}
			Cache::write('default', 'gallery_files', serialize($this->_galleryFiles));
		} else {
			$this->_galleryFiles = unserialize($galleryFiles);
		}
	}

	/**
	 * Shows a number of random gallery images.
	 *
	 * @param type $count Number of images to show.
	 * @return void
	 */
	public function show($count = 4) {
		shuffle($this->_galleryFiles);
		for($i = 0; $i < $count; $i++) {
			echo $this->image($this->_galleryFiles[$i]);
		}
	}

}