<?php 

//template name: Forside
get_header(); 

?>
<?php while(have_posts()) : the_post(); ?>
<section id="content">
    <?php include 'includes/slider.php'; ?>
    <main id="main" role="main">
        <article>
            <?php the_content(); ?>
        </article>
    </main>
    <?php endwhile; ?>
    <aside role="complementary" id="aside" clasS="aside-left">
        <?php dynamic_sidebar('primary-widget-area'); ?>   
    </aside>
    <div style="clear:both;"></div>
    <div class="bottom">
        <div class="page-title">
            <h1>Nyheder</h1>
            <div class="title-sep-container">
                <div class="title-sep"></div>
            </div>
        </div>
        <?php $news_words = 20; $news_posts = 4;?>
        <?php include 'includes/news-list.php'; ?>
        <a id="more-news" href="<?php echo get_bloginfo('url') ?>/nyheder">Flere Nyheder fra <?php echo bloginfo('title') ?></a>
    </div>
</section>
<?php get_footer(); ?>