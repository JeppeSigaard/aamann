<?php

$mb[] = array(
    'id' => 'make_page_slider',
    'title' => __( 'Opret en billedslider', 'rwmb' ),
    'pages' => array('page'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tilføj billeder', 'rwmb' ),
            'id'    => "page_slider",
            'type' => 'file_advanced',
            'mime_type' => 'image',
            'desc' => __('<br/>Tilføj flere billeder for at oprette en billedslider. Slideren overskriver thumbnail. Tøm for billeder for at fjerne slideren.','rwmb'),
        ),
        
        array(
            'type' => 'heading',
            'name' => __( 'Indstillinger for slideshow', 'meta-box' ),
            'id'   => 'fake_id', // Not used but needed for plugin
        ),
        
        
        array(
            'name' => __('Antal kollonner','rwmb'),
            'id' => 'columns',
            'type' => 'number',
            'max'   => 4,
            'min'   => 1,
            'std'   => 3,
        
        ),
        array(
            'name' => __('Skift automatisk','rwmb'),
            'id' => 'auto',
            'type' => 'checkbox',
            'std' => 0,
        
        ),
        
        array(
            'name' => __('Autoskift timeout (millisekunder)','rwmb'),
            'id' => 'auto_speed',
            'type' => 'number',
        ),
        
        array(
            'name' => __('Autoskift hastighed (millisekunder)','rwmb'),
            'id' => 'slide_speed',
            'type' => 'number',
        ),
        
    ),


);

?>