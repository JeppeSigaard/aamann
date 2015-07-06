<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require 'meta-box/mail.php';
    require 'meta-box/medarbejdere.php';
    require 'meta-box/serviceaftale.php';
    require 'meta-box/billedslider.php';
    
return $mb;

}




?>