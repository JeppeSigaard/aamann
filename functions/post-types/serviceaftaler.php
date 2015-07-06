<?php

add_action( 'init', 'smamo_add_serviceaftale' );

function smamo_add_serviceaftale() {
	register_post_type( 'serviceaftale', array(
		
        'menu_icon' 		 => 'dashicons-portfolio',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'serviceaftale' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 23,
		'supports'           => array( 'title', 'thumbnail'),
        'labels'             => array(
            
            'name'               => _x( 'Serviceaftaler', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Serviceaftale', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Serviceaftaler', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'serviceaftale', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'serviceaftale', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny serviceaftale', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se serviceaftale', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find serviceaftale', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny serviceaftale.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

?>