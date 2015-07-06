<?php 

add_action( 'init', 'smamo_add_stilling' );

function smamo_add_stilling() {
	register_post_type( 'stilling', array(
		
        'menu_icon' 		 => 'dashicons-networking',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'stilling' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title','editor','thumbnail'),
        'labels'             => array(
            
            'name'               => _x( 'Ledige Stillinger', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Stilling', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Ledige Stillinger', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Ledige Stillinger', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny stilling', 'stilling', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny stilling', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se stilling', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find stilling', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny stilling.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

?>