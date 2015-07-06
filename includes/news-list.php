<?php 

if(!isset($news_words)){
    $news_words = 30;
}

if (!isset($news_posts)){
    $news_posts = 3;
}

if (!isset($news_more)){
    $news_more = ' ...';
}

if (!isset($news_offset)){
    $news_offset = 0;
}


if (!isset($news_type)){
    $news_type = array('post','stilling');
}

?>

<ul id="news-list">
<?php 
$news = get_posts(array(
    'posts_per_page'   => $news_posts,
    'offset'           => $news_offset,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => get_the_id(),
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => $news_type,
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true 
));
?>
        
        <?php foreach ($news as $news) : ?>
        
        <li>
            <a href="<?php echo get_the_permalink($news->ID); ?>" title="<?php echo $news->post_title ?>">
                <div>
                    <div class="news-date">
                        <span class="date-d"><?php echo get_the_date('d',$news->ID) ?></span>
                        <span class="date-m"><?php echo get_the_date('F',$news->ID) ?></span>
                        <span class="date-y"><?php echo get_the_date('Y',$news->ID) ?></span>
                    </div>
                    <?php if (has_post_thumbnail($news->ID)) : ?>
                    <div class="news-img">
                        <?php echo get_the_post_thumbnail($news->ID,'news-small'); ?>
                    </div>
                    <?php else : ?>
                    <div class="news-img">
                        <?php echo get_the_post_thumbnail(55,'news-small'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="news-excerpt">
                        <h3><?php echo $news->post_title; ?></h3>
                        <p><?php echo wp_trim_words(apply_filters('the_excerpt',$news->post_content),$num_words = $news_words, $more = $news_more); ?></p>
                    </div>
                </div>
            </a>
        </li>
        
        
        <?php endforeach; wp_reset_query(); wp_reset_postdata(); ?>
</ul>