<ul id="news-list">
<?php 
$news = get_posts(array(
    'posts_per_page'   => 12,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true 
));
?>
        
        <?php foreach ($news as $news) : ?>
        
        <li>
            <a href="<?php echo get_the_permalink($news->ID); ?>" title="<?php echo $news->post_title ?>">
            <div class="news-date">
                <span class="date-d"><?php echo get_the_date('d',$news->ID) ?></span>
                <span class="date-m"><?php echo get_the_date('F',$news->ID) ?></span>
                <span class="date-y"><?php echo get_the_date('Y',$news->ID) ?></span>
            </div>
            <div class="news-img"><?php echo get_the_post_thumbnail($news->ID,'news-small'); ?></div>
            <div class="news-excerpt">
                <h3><?php echo $news->post_title; ?></h3>
                <p><?php echo wp_trim_words(apply_filters('the_excerpt',$news->post_content),$num_words = 30, $more = ' ...'); ?></p>
            </div>
            </a>
        </li>
        
        
        <?php endforeach; ?>
</ul>