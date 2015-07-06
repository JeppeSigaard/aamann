<?php

add_action( 'init', 'smamo_add_medarbejder' );

function smamo_add_medarbejder() {
	register_post_type( 'medarbejder', array(
		
        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'medarbejder' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Medarbejdere', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Medarbejder', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Medarbejdere', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Medarbejdere', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'medarbejder', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny medarbejder', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se medarbejder', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find medarbejder', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny medarbejder.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

?>