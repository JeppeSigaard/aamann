<?php 
// Template name: Ledige stillinger
get_header(); 
?>
<section id="content">
    <main id="main" role="main">
        <?php while(have_posts()) : the_post(); ?>
        <div class="page-title">
            <h1><?php the_title(); ?></h1>
            <div class="title-sep-container">
                <div class="title-sep"></div>
            </div>
        </div>
        <?php if ( has_post_thumbnail() ) :?>
        <div class="page-img">
            <?php the_post_thumbnail('slides'); ?>
        </div>
        <?php endif; ?>
        <article>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <?php include 'includes/stillinger.php'; ?>
    </main>
    
    <aside role="complementary" id="aside" class="aside-left">
        
        <?php include 'includes/sidemenu-page.php'; ?>
        
        <?php dynamic_sidebar('primary-widget-area'); ?>
    
    </aside>
</section>
<?php get_footer(); ?>