<?php 

$page_slides = get_post_meta($post->ID,'page_slider',false);

if(!empty($page_slides)) : 

$slide_col = get_post_meta($post->ID,'columns',true);
if($slide_col == ''){$slide_col = 3;}

$image_slide_size = 'slide-col-'.$slide_col;

$slide_auto = get_post_meta($post->ID,'auto',true);
if($slide_auto == ''){$slide_auto = true;}

$slide_timeout = get_post_meta($post->ID,'auto_speed',true);
if($slide_timeout == ''){$slide_speed = 8000;}

$slide_speed = get_post_meta($post->ID,'slide_speed',true);
if($slide_speed == ''){$slide_speed = 100;}

?>
<div class="list-spacer"></div>
<div class="page-slider-container">
    <div id="page-slider" class="owl-carousel" data-col="<?php echo $slide_col ?>" data-auto="<?php echo $slide_auto ?>" data-timeout="<?php echo $slide_timeout ?>" data-speed="<?php echo $slide_speed ?>">

        <?php foreach($page_slides as $slide) :?>

        <?php $slide_link = wp_get_attachment_image_src($slide,$image_slide_size); 

        $full_link = wp_get_attachment_image_src($slide,'full'); 
        
        $size = getimagesize($full_link[0]);

        $width = floor($size[0] / $size[1] * 350);

        ?>
            <a rel="prettyPhoto" href="<?php echo $full_link[0]; ?>" class="ps-item">
                <img src="<?php echo $slide_link[0]; ?>"/>
            </a>
        <?php endforeach; ?>

    </div>
    <div id="slidectrl">
        <div class="next"></div>
        <div class="prev"></div>
    </div>
</div>
<div class="list-spacer"></div>
<?php endif; ?>