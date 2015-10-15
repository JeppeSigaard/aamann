<?php
add_action( 'init', 'smamo_add_slides' );

function smamo_add_slides() {
	register_post_type( 'slide', array(
		
        'menu_icon' 		 => 'dashicons-format-gallery',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 23,
		'supports'           => array( 'title', 'thumbnail', 'editor'),
        'labels'             => array(
            
            'name'               => _x( 'Slideshow', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Slide', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Slideshow', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Slideshow', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj nyt ', 'slide', 'smamo' ),
            'add_new_item'       => __( 'Tilføj nyt', 'smamo' ),
            'new_item'           => __( 'Nyt slide', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se slide', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find slide', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt slide.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            )
	   )
    );
    
}
?>