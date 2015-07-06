<?php

// THEME Setup
add_action( 'after_setup_theme', 'smartmonkey_setup' );
function smartmonkey_setup(){load_theme_textdomain( 'smartmonkey', get_template_directory() . '/languages' );

// Theme support
require('functions/theme-support.php');
                             
// Billeder
require('functions/images.php');

// Tilføj menuer
require('functions/menus.php');

} // END smartmonkey_setup

// Tilføj post types
require('functions/post-types.php');

// Tilføj meta boxes
require('functions/meta-box.php');


// Tilføj scripts
require('functions/scripts.php');

// Tilføj widgets
require('functions/widgets.php');

// Tilføj admin.php
require('functions/admin.php');

// Modificer header
require('functions/header.php');

// Indstillinger
require 'functions/options.php';

// Set title
add_filter( 'the_title', 'smartmonkey_title' );
function smartmonkey_title( $title ) {if ( $title == '' ) {return '&rarr;';} else {return $title;}}
add_filter( 'wp_title', 'smartmonkey_filter_wp_title' );
function smartmonkey_filter_wp_title( $title ){return $title . esc_attr( get_bloginfo( 'name' ) );}

// Get excerpt by id hack
function get_excerpt_by_id($post_id){
    $the_post = get_post($post_id); //Gets post ID
    if($the_post){
        $the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
        $text = apply_filters('the_excerpt', get_post_field('post_excerpt', $post_id));
        if(!empty($text)){return wp_trim_words($text,$num_words = 16, $more = ' ...');}

            else{
            return wp_strip_all_tags(wp_trim_words($the_excerpt, $num_words = 16, $more = ' ...'));
        }
    }
    
}


?>