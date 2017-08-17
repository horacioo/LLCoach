<?php

add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
remove_action('init', 'wp_admin_bar_init');
add_theme_support('menus', 'widget');
add_theme_support('post-thumbnails');
//set_post_thumbnail_size(825, 510, true);
add_theme_support('title-tag');
add_theme_support('custom-background', array('default-color' => 'white'));
add_theme_support('custom-logo', array('height' => 90, 'width' => 90, 'flex-width' => true,));
add_filter('show_admin_bar', '__return_false');
register_nav_menu('menu_principal', 'Menu Principal - Topo');

/*******/
add_filter('widget_text','do_shortcode');
/*******/