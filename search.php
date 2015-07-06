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



get_header(); ?>

<section id="content">
    
    <main id="main" role="main" class="main-full">
        
        <div class="page-title">
            <h1><?php echo $wp_query->found_posts; ?> søgeresultater: "<?php the_search_query(); ?>"</h1>
            <div class="title-sep-container">
                <div class="title-sep"></div>
            </div>
        </div>
        
        <div class="archive">
        <ul id="news-list">
        <?php while(have_posts()) : the_post(); ?>
            <li>
                <a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo $post->post_title ?>">
                    <div>
                        <div class="news-date">
                            <span class="date-d"><?php echo get_the_date('d',$post->ID) ?></span>
                            <span class="date-m"><?php echo get_the_date('F',$post->ID) ?></span>
                            <span class="date-y"><?php echo get_the_date('Y',$post->ID) ?></span>
                        </div>
                        <?php if(has_post_thumbnail()) : $excerpt_full = ''; ?>
                        <div class="news-img"><?php echo get_the_post_thumbnail($post->ID,'news-small'); ?></div>
                        <?php else :  $excerpt_full = ' full'; endif; ?>
                        <div class="news-excerpt<?php echo $excerpt_full; ?>">
                            <h3><?php echo $post->post_title; ?></h3>
                            <p><?php echo wp_trim_words(apply_filters('the_excerpt',$post->post_content),$num_words = $news_words, $more = $news_more); ?></p>
                        </div>
                    </div>
                </a>
            </li>
    
         <?php endwhile; ?>
        </ul>
        </div>
            <form class="search" id="searchform" action="<?php echo get_site_url(); ?>" method="get">
               <fieldset>
                  <span class="text">
                      <input name="s" id="s" type="text" value="" placeholder="Søg igen...">
                </span>
               </fieldset>
            </form>
    </main>

</section>


<?php get_footer(); ?>