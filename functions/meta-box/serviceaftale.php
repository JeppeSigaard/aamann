<?php 

$mb[] = array(
    'id' => 'price',
    'title' => __( 'Pris', 'rwmb' ),
    'pages' => array('serviceaftale'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Pris', 'rwmb' ),
            'id'    => "pris",
            'type' => 'text',
            'placeholder' => __( 'Dkr. pr. md.', 'meta-box' ),
        )
        
    ),
);
    
$mb[] = array(
    'id' => 'features',
    'title' => __( 'Pakken indeholder:', 'rwmb' ),
    'pages' => array('serviceaftale'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'indhold', 'rwmb' ),
            'id'    => "indhold",
            'type'  => 'text',
            'clone' => 'true',
            'placeholder' => __( 'Klon med blå knap til højre', 'meta-box' ),
        ),
        
    )
);

$mb[] = array(
    'id' => 'cta',
    'title' => __( 'Navn på knap', 'rwmb' ),
    'pages' => array('serviceaftale'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'knaptekst', 'rwmb' ),
            'id'    => "cta",
            'type'  => 'text',
            'placeholder' => __( 'Bestil nu', 'meta-box' ),
            'desc' => __( 'Skriv teskt, der skal stå på knappen nederst på pakketilbudet. Standard er "bestil nu"', 'meta-box' ),
        ),
        
    )
);

?>