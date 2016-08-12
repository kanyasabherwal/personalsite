<?php

/**
* Enqueue styles
*/

function my_styles() {
 	wp_register_style('awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
 	wp_enqueue_style( 'awesome' );
	wp_register_style('style', get_template_directory_uri() . '/dist/css/style.css');
 	wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'my_styles');

?>