<?php 
// Ryd op i admin menuen
function remove_menus(){
  
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );           //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
  
}

// Ryd op i undermenupunkter
function adjust_the_wp_menu() {
	
	
	// Udseende
	remove_submenu_page( 'themes.php', 'themes.php' ); // Temavælger
	remove_submenu_page( 'themes.php', 'theme-editor.php' ); // Editor
	
	// Plugins
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' ); // Editor
    add_submenu_page( 'options-general.php', 'Plugins', 'Plugins', 'manage_options', 'plugins.php'); 
	
	
	// Indstillinger
	remove_submenu_page( 'options-general.php', 'options-discussion.php' ); // Diskussion

}




add_action( 'admin_menu', 'remove_menus' );
add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );


function add_margin_to_titles() {
   echo '<style type="text/css">
           #post-body-content .postarea{margin: -30px 0px 50px;padding-bottom:20px;}
			#post-body-content .postarea:first-child{margin: 0px;padding:0px;}
			.toplevel_page_themes?lang=da {display:none;}
			.toplevel_page_themes?lang=en {display:none;}
         </style>';
}

add_action('admin_head', 'add_margin_to_titles');


?>