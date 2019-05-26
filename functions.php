<?php
include_once(get_template_directory().'/inc/nav_walker.php');

 //Enqueue scripts and styles
function my_enqueue(){
    wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.4.1.min.js', false, false, false);
    wp_enqueue_script( 'flickity-js', get_template_directory_uri().'/js/flickity.js', false, false, false);
    wp_enqueue_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('JQuery'),false, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/main.js', false, false, false);

    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, false, false);
    wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2.2.0/dist/flickity.min.css', false, false, false);
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css', false, false, false);
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );

//register menus
function register_menus() {
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu',
	) );
}
add_action( 'after_setup_theme', 'register_menus' );
