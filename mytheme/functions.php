<?php 

class AddShortCodes {
	function __construct () {
		add_shortcode( 'page_title', array($this, 'page_title'));
	}

	function page_title() {
		return get_the_title();
	}
}
$addShortCodes = new AddShortCodes();


class RegisterNavMenus {
	function __construct () {
		add_action( 'after_setup_theme', array($this, 'register_my_menus'));		
	}
	function register_my_menus() {
		register_nav_menu( 'primary_menu', 'Primary Menu');
		register_nav_menu( 'secondary_menu', 'Secondary Menu');
	}
}
$registerNavMenus = new RegisterNavMenus();






?>

