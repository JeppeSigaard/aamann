<?php

$mb[] = array(
		'id' => 'info',
		'title' => __( 'Kontaktoplysninger', 'rwmb' ),
		'pages' => array('medarbejder'),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,

		'fields' => array(
            
            array(
                'name'  => __( 'Fornavn', 'rwmb' ),
                'id'    => "fname",
                'type' => 'text',
            ),
            
            array(
                'name'  => __( 'Efternavn', 'rwmb' ),
                'id'    => "lname",
                'type' => 'text',
            ),
            
            array(
                'name'  => __( 'Stilling', 'rwmb' ),
                'id'    => "stilling",
                'type' => 'text',
                'clone' => 'true',
            ),
            
            array(
                'name'  => __( 'Telefonnummer', 'rwmb' ),
                'id'    => "phone",
                'type' => 'text',
            ),
            
            array(
                'name'  => __( 'Email', 'rwmb' ),
                'id'    => "email",
                'type' => 'email',
            ),
            
        ),
        
        
    );  


$mb[] = array(
		'id' => 'prior',
		'title' => __( 'Stor eller lille', 'rwmb' ),
		'pages' => array('medarbejder'),
		'context' => 'side',
		'priority' => 'default',
		'autosave' => true,

		'fields' => array(
            
            array(
                'name'  => __( 'Vis som stor', 'rwmb' ),
                'id'    => "show_large",
                'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
            ),
            
        ),
        
        
    );  


?>