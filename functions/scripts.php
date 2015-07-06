<?php 

add_action( 'wp_enqueue_scripts', 'smartmonkey_load_scripts' );
function smartmonkey_load_scripts()
{
	// Stylesheets
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.min.css', false, false, 'all' );
	
	// Scripts
	// wp_enqueue_script( 'jq-min', get_template_directory_uri() . '/js/jq.min.js', false, false, false );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array(), '1.0.0', true );
    
    wp_localize_script('main','PG_ROOT',get_site_url());
}



// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

?>