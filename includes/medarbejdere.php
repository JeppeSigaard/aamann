<ul id="mb-list"><div>
<?php 

$mb = get_posts(array(
        'posts_per_page'   => -1,
        'orderby'          => 'menu_order',
        'order'            => 'DESC',
        'post_type'        => 'medarbejder',
    ));

$tipover = 1;
$three_count = 1;

foreach($mb as $mb) :

$class="mb_small";
$image_size = 'medarbejder-small';
if(get_post_meta($mb->ID,'show_large',true) == 1){
    $class = 'mb_large';
    $image_size = 'medarbejder-large';
}


// Stilling: ét resultat eller array?
$pos_string = '';
$positions = get_post_meta($mb->ID,'stilling',true);

// array
if (is_array($positions)){
    foreach($positions as $pos => $name){
        $pos_string .='<span role="position">'.$name.'</span>';
    }

}

// ét reultat
else { $pos_string = '<span role="position">'.$positions.'</span>';}

// Opret spacer inden første lille
if ($class == 'mb_small') :
    if ($tipover == 1):
        $tipover --; ?>
    
    </div><li class="list-spacer"></li><div>

    <?php endif;

endif;

?>    
    
    <li class="<?php echo $class ?>">
        <?php echo get_the_post_thumbnail( $mb->ID, $image_size);?>
        <h5 role="name"><?php echo get_the_title($mb->ID) ?></h5>
        <?php echo $pos_string; ?>
        
        <?php $tlf = get_post_meta($mb->ID,'phone',true); if ($tlf): ?>
        <br/><p><a href="tel:<?php echo $tlf ?>"><?php echo $tlf ?></a></p>
        <?php endif; ?>
        
        <?php $email = get_post_meta($mb->ID,'email',true); if ($email): ?>
        <p><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
        <?php endif; ?>
    </li>    
    <?php 

if ($tipover == 0){
    $three_count ++;
    if($three_count == 4){
    
        echo '</div><div>';
        $three_count = 1;
    }

}

endforeach; 
while($three_count < 4){

    echo '<li></li>';
    $three_count ++;
}
?>        
</div></ul>