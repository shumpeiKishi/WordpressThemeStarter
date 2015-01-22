<?php 
class AddThemeSupport {
	function __construct () {
		$this->addCustomHeader();
		$this->addThumbnails();
	}
	function addCustomHeader() {
		$args= array(
			'default-image'          => '',
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => true,
			'flex-width'             => true,
			'uploads'                => true,
			'random-default'         => false,
			'header-text'            => false,
			'default-text-color'     => '',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
			);
		add_theme_support( 'custom-header', $args );
	}
	function addThumbnails() {
		add_theme_support( 'post-thumbnails' ); 
	}
}
$addThemeSupport = new AddThemeSupport();