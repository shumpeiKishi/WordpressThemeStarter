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
?>