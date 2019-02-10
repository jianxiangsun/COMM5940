<?php

add_theme_support('post-thumbnails');

// register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');

//Nav Menus
register_nav_menus(array(
	'primary' => __('Primary Menu')
	));

add_theme_support('menus');

// Excerpt Length Control
function set_excerpt_length(){
	return 30;
}

add_filter('excerpt_length', 'set_excerpt_length');
?>
