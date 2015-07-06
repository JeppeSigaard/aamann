<?php 
// Template name: Nyhedsarkiv
get_header(); 
?>
<section id="content">
    <main id="main" role="main" class="main-full">
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
    </main>
    <div class="clear archive">
        <?php $news_words = 50; $news_posts = -1;?>
        <?php include 'includes/news-list.php'; ?>
    </div>
</section>
<?php get_footer(); ?>