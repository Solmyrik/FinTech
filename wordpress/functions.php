<?php

register_nav_menus( array(
	'top' => 'Top menu',
	'footer_menu_1' => 'Footer menu 1',
) );



if ( function_exists('register_sidebar') ) register_sidebar();

// Style & Scripts
if (!is_admin()) {
	function theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	}
	function theme_js() {
		wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), NULL, true);
		wp_enqueue_script( 'popup', get_template_directory_uri() . '/assets/js/popup.js', array(), 'null', true );
		wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', array(), 'null', true );
		wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array(), 'null', true );
		wp_enqueue_script( 'reviews', get_template_directory_uri() . '/assets/js/reviews.js', array(), 'null', true );
		wp_enqueue_script( 'coingecko', get_template_directory_uri() . '/assets/js/coingecko.js', array(), 'null', true );

	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );
	add_action( 'wp_enqueue_scripts', 'theme_js' );
}


?>