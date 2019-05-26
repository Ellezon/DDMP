<?php
/**
 * DDMP functions and definitions
 *
 * 
 * @package DDMP
 */

 //Enqueue scripts and styles
function my_enqueue(){
    wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.4.1.min.js', false, false, false);
    wp_enqueue_script( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', false, false, true);
    wp_enqueue_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false, false, false);

    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, false, false);
    wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css', false, false, false);
}

add_action( 'wp_enqueue_scripts', 'my_enqueue' );