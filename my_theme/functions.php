<?php 
class ClassImporter {
	const CLASSPATH = 'classes/';
	function __construct() {
		require_once(self::CLASSPATH . 'add_theme_support.php');
		require_once(self::CLASSPATH . 'add_short_codes.php');
		require_once(self::CLASSPATH . 'register_nav_menus.php');
	}
}
$classImporter = new ClassImporter();