<?php
add_action( 'admin_menu', 'smamo_options_footer_add_admin_menu' );
add_action( 'admin_init', 'smamo_options_footer_settings_init' );


function smamo_options_footer_add_admin_menu(  ) { 

	add_submenu_page( 'themes.php', 'Footer', 'Footer', 'manage_options', 'smamo_options_footer', 'smamo_options_footer_options_page' );

}


function smamo_options_footer_settings_init(  ) { 

	register_setting( 'pluginPage_footer', 'smamo_options_footer_settings' );

	add_settings_section(
		'smamo_options_footer_pluginPage_section', 
		__( '', 'smamo' ), 
		'smamo_options_footer_settings_section_callback', 
		'pluginPage_footer'
	);

	add_settings_field( 
		'smamo_options_footer_text_field_0', 
		__( 'Adresselinje 1', 'smamo' ), 
		'smamo_options_footer_text_field_0_render', 
		'pluginPage_footer', 
		'smamo_options_footer_pluginPage_section' 
	);

	add_settings_field( 
		'smamo_options_footer_text_field_1', 
		__( 'Adresselinje 2', 'smamo' ), 
		'smamo_options_footer_text_field_1_render', 
		'pluginPage_footer', 
		'smamo_options_footer_pluginPage_section' 
	);

	add_settings_field( 
		'smamo_options_footer_text_field_2', 
		__( 'Telefonnummer', 'smamo' ), 
		'smamo_options_footer_text_field_2_render', 
		'pluginPage_footer', 
		'smamo_options_footer_pluginPage_section' 
	);

	add_settings_field( 
		'smamo_options_footer_text_field_3', 
		__( 'Email', 'smamo' ), 
		'smamo_options_footer_text_field_3_render', 
		'pluginPage_footer', 
		'smamo_options_footer_pluginPage_section' 
	);
    
    add_settings_field( 
		'smamo_options_footer_text_field_4', 
		__( 'Email 2', 'smamo' ), 
		'smamo_options_footer_text_field_4_render', 
		'pluginPage_footer', 
		'smamo_options_footer_pluginPage_section' 
	);
    
    add_settings_field( 
		'smamo_options_footer_text_field_5', 
		__( 'CVR-nummer', 'smamo' ), 
		'smamo_options_footer_text_field_5_render', 
		'pluginPage_footer', 
		'smamo_options_footer_pluginPage_section' 
	);


}


function smamo_options_footer_text_field_0_render(  ) { 

	$options = get_option( 'smamo_options_footer_settings' );
	?>
	<input type='text' name='smamo_options_footer_settings[smamo_options_footer_text_field_0]' value='<?php echo $options['smamo_options_footer_text_field_0']; ?>'>
	<?php

}


function smamo_options_footer_text_field_1_render(  ) { 

	$options = get_option( 'smamo_options_footer_settings' );
	?>
	<input type='text' name='smamo_options_footer_settings[smamo_options_footer_text_field_1]' value='<?php echo $options['smamo_options_footer_text_field_1']; ?>'>
	<?php

}


function smamo_options_footer_text_field_2_render(  ) { 

	$options = get_option( 'smamo_options_footer_settings' );
	?>
	<input type='text' name='smamo_options_footer_settings[smamo_options_footer_text_field_2]' value='<?php echo $options['smamo_options_footer_text_field_2']; ?>'>
	<?php

}


function smamo_options_footer_text_field_3_render(  ) { 

	$options = get_option( 'smamo_options_footer_settings' );
	?>
	<input type='text' name='smamo_options_footer_settings[smamo_options_footer_text_field_3]' value='<?php echo $options['smamo_options_footer_text_field_3']; ?>'>
	<?php

}

function smamo_options_footer_text_field_4_render(  ) { 

	$options = get_option( 'smamo_options_footer_settings' );
	?>
	<input type='text' name='smamo_options_footer_settings[smamo_options_footer_text_field_4]' value='<?php echo $options['smamo_options_footer_text_field_4']; ?>'>
	<?php

}

function smamo_options_footer_text_field_5_render(  ) { 

	$options = get_option( 'smamo_options_footer_settings' );
	?>
	<input type='text' name='smamo_options_footer_settings[smamo_options_footer_text_field_5]' value='<?php echo $options['smamo_options_footer_text_field_5']; ?>'>
	<?php

}


function smamo_options_footer_settings_section_callback(  ) { 
    
    echo __( 'Oplysninger som vises i hjemmesidens footer', 'smamo' );
}


function smamo_options_footer_options_page(  ) { 
    
    
	?>
	<form action='options.php' method='post'>
		
		<h2>Indstillinger for footer</h2>    
        
		<?php
    
        if( isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true' ) {
            echo '<div id="message" class="updated"><p><strong>Ændringerne er gemt</strong></p></div>';
        }
    
    
		settings_fields( 'pluginPage_footer' );
		do_settings_sections( 'pluginPage_footer' );
		submit_button();
		?>
		
	</form>
	<?php

}

?>