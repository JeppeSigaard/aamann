<?php 
// Template name: Kontaktside med medarbejdere
get_header();
$footer_options = get_option('smamo_options_footer_settings');
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
            <div class="list-spacer"></div>
            <?php include 'includes/medarbejdere.php'; ?>
        
        </article>
    
         <?php endwhile; ?>
        <div class="list-spacer"></div>
        <div id="directions" role="navigation">
            
            <div id="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2252.6442274786937!2d12.603687!3d55.625606000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653ab4bd7bad9a3%3A0x37afe28812924826!2sEnglandsvej+358%2C+2770+Kastrup%2C+Danmark!5e0!3m2!1sda!2sus!4v1422444321160" frameborder="0" style="border:0"></iframe>
            </div>
            
            
        </div>
        
    </main>

</section>

<?php get_footer(); ?>