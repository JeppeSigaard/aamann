<?php 

// Tilføj thumbnails
add_theme_support( 'post-thumbnails' );


global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;

// tilføj widgets
add_theme_support('widgets');


// HTML5
add_theme_support( 'html5' );


// Tilføj logo
add_theme_support( 'custom-header', array(
	
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 173,
	'height'                 => 75,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true,
	
	));


?>