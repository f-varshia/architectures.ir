<?php
	add_theme_support('menus');

	register_nav_menu('mainmenu', "Main Manu");

	add_theme_support('post-thumbnails');	
//================== sidebar for about=================//
register_sidebar(array(
	'name' => 'Sidebar Right',
	'id' => 'sidebar-r',
	'description' => 'Right panel for about',
	'before_widget' => '<article class="widget %2$s">',
	'after_widget' => "</article>\n",
	'before_title' => '<br /><strong class="widgettitle">',
	'after_title' => "<br /><br /></strong>\n"
));

register_sidebar(array(
	'name' => 'Sidebar Left',
	'id' => 'sidebar-l',
	'description' => 'Left panel for about',
	'before_widget' => '<article class="widget %2$s">',
	'after_widget' => "</article>\n",
	'before_title' => '<br /><strong class="widgettitle">',
	'after_title' => "<br /><br /></strong>\n"
));