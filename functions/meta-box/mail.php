<?php 

$mb[] = array(
    'id' => 'from',
    'title' => __( 'Afsender', 'rwmb' ),
    'pages' => array('email'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Afsender', 'rwmb' ),
            'id'    => "from",
            'type' => 'email',
            ),
    ),
);


?>