<div id="slide-container">
    <div  class="loading">
        <div id="slider" class="owl-carousel">
        <?php 

        $slides = get_posts(array(
            'posts_per_page'   => -1,
            'post_type'        => 'slide',
            'post_status'      => 'publish',
            'suppress_filters' => true 
        ));

        foreach($slides as $slide){

            $slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($slide->ID), 'slides' );
            echo '<img src="'.$slide_img[0].'"/>';
        }

        ?>
        </div>
        <div id="slidectrl">
            <div class="next"></div>
            <div class="prev"></div>
        </div>
    </div>
</div>