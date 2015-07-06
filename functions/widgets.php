<?php

// Fjern standard Widgets
add_action( 'widgets_init', 'my_unregister_widgets' );

function my_unregister_widgets() {
	 unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     unregister_widget('WP_Widget_Search');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     unregister_widget('WP_Nav_Menu_Widget');
     unregister_widget('Twenty_Eleven_Ephemera_Widget');
}



add_action( 'widgets_init', 'smartmonkey_widgets_init' );
function smartmonkey_widgets_init()
{


    register_sidebar( array (
        'name' => __( 'Sidebar', 'smartmonkey' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    
    
    register_sidebar( array (
        'name' => __( 'Footer 1', 'smartmonkey' ),
        'id' => 'footer-widget-area-1',
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array (
        'name' => __( 'Footer 2', 'smartmonkey' ),
        'id' => 'footer-widget-area-2',
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array (
        'name' => __( 'Footer 3', 'smartmonkey' ),
        'id' => 'footer-widget-area-3',
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array (
        'name' => __( 'Footer 4', 'smartmonkey' ),
        'id' => 'footer-widget-area-4',
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

}


include 'widgets/ct-form.php';

?>