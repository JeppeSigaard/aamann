<?php
add_action( 'admin_menu', 'smamo_options_social_add_admin_menu' );
add_action( 'admin_init', 'smamo_options_social_settings_init' );


function smamo_options_social_add_admin_menu(  ) { 

	add_submenu_page( 'options-general.php', 'Sociale indstillinger', 'Sociale indstillinger', 'manage_options', 'smamo_options_social', 'smamo_options_social_options_page' );

}


function smamo_options_social_settings_init(  ) { 

	register_setting( 'pluginPage_social', 'smamo_options_social_settings' );

	add_settings_section(
		'smamo_options_social_pluginPage_section', 
		__( '', 'smamo' ), 
		'smamo_options_social_settings_section_callback', 
		'pluginPage_social'
	);

	add_settings_field( 
		'smamo_options_social_text_field_0', 
		__( 'Link til Facebook side', 'smamo' ), 
		'smamo_options_social_text_field_0_render', 
		'pluginPage_social', 
		'smamo_options_social_pluginPage_section' 
	);

	add_settings_field( 
		'smamo_options_social_text_field_1', 
		__( 'Link til Linkedin side', 'smamo' ), 
		'smamo_options_social_text_field_1_render', 
		'pluginPage_social', 
		'smamo_options_social_pluginPage_section' 
	);

}


function smamo_options_social_text_field_0_render(  ) { 

	$options = get_option( 'smamo_options_social_settings' );
	?>
	<input class="widefat" type='text' name='smamo_options_social_settings[smamo_options_social_text_field_0]' value='<?php echo $options['smamo_options_social_text_field_0']; ?>'>
	<?php

}


function smamo_options_social_text_field_1_render(  ) { 

	$options = get_option( 'smamo_options_social_settings' );
	?>
	<input class="widefat" type='text' name='smamo_options_social_settings[smamo_options_social_text_field_1]' value='<?php echo $options['smamo_options_social_text_field_1']; ?>'>
	<?php

}




function smamo_options_social_settings_section_callback(  ) { 
    
    echo __( 'Link til Facebook og linkedin', 'smamo' );
}


function smamo_options_social_options_page(  ) { 
    
    
	?>
	<form action='options.php' method='post' style="max-width:960px;display:block;">
		
		<h2>Indstillinger for Facebook og Linkedin</h2>    
        
		<?php
    
		settings_fields( 'pluginPage_social' );
		do_settings_sections( 'pluginPage_social' );
		submit_button();
		?>
		
	</form>
	<?php

}

?>