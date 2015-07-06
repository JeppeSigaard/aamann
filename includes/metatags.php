<?php

add_action('wp_head', 'smamo_add_metas');

function smamo_add_metas(){}


// Billede
$meta_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
if (!$meta_img){
    $meta_img = get_header_image();
}

// Beskrivelse
if (!$wp_query){
    $meta_description = wp_trim_words(get_bloginfo('description'), $num_words = 15, $more = ' ...');
}
else {$meta_description = get_excerpt_by_id(get_the_ID()); 
    if(!$meta_description){
        $meta_description = wp_trim_words(get_bloginfo('description'), $num_words = 15, $more = ' ...');
    }
     }

// Link
$meta_url = get_the_permalink();
if (!$meta_url){
    $meta_url = get_bloginfo('url');
}

// Type
$meta_type = 'article';
if(is_archive()){
    $meta_type = 'archive';
}
else if(is_home()){
    $meta_type = 'homepage';
}


echo '<meta itemprop="name" content="'. wp_title(' | ', false, 'right').'">';
echo '<meta property="og:title" content="'. wp_title(' | ', false, 'right').'">';
echo '<meta property="og:site_name" content="'. get_bloginfo('title') .'">';

if ($meta_description) :

    echo '<meta name="description" content="'.  $meta_description .'">';
    echo '<meta itemprop="description" content="'.  $meta_description .'">';
    echo '<meta property="og:description" content="'.  $meta_description  .'">';

endif;

if ($meta_img) :

    echo '<meta itemprop="image" content="'. $meta_img .'">';
    echo '<meta property="og:image" content="'. $meta_img .'">';

endif;

echo '<meta property="og:type" content="'. $meta_type .'">';
echo '<meta property="og:url" content="'. $meta_url .'">';

?>