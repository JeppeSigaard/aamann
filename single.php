<?php get_header(); ?>

<section id="content">
    
    <main id="main" role="main" class="main-left">
        
        <?php while(have_posts()) : the_post(); ?>
        <div class="page-title">
            <h1><?php the_title(); ?></h1>
            <div class="title-sep-container">
                <div class="title-sep"></div>
            </div>
        </div>
        
        
        <?php if ( has_post_thumbnail() ) :?>
        <div class="page-img">
            <?php the_post_thumbnail('page'); ?>
        </div>
        <?php endif; ?>
        
        <article>
           
            <?php the_content(); ?>
        
        </article>
    
         <?php endwhile; ?>
        
        <div class="clear archive">
        <?php $news_words = 30; $news_posts = 12; $news_offset = 2; ?>
        <?php include 'includes/news-list.php'; ?>
    </div>
        
    </main>

    <aside role="complementary" id="aside" >
        
        <?php $news_words = 0; $news_posts = 2; $news_more = ''; $news_offset = 0; ?>
        <?php include 'includes/news-list.php'; ?>
        
        <?php dynamic_sidebar('primary-widget-area'); ?>
    
    </aside>

</section>

<?php get_footer(); ?>