
<?php 
// Template name: Side med tilmeldingsformular, nyhedsbrev
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
            <?php the_post_thumbnail('page'); ?>
        </div>
        <?php endif; ?>
        
        <article>
           
            <?php the_content(); ?>
        
        </article>
    
         <?php endwhile; ?>
        
        <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<div id="mc_embed_signup">
<form action="//aa-w.us9.list-manage.com/subscribe/post?u=f088aa8a142e0ff06bfa3fc6e&amp;id=ed0e2e6469" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="mc-field-group">
	<input type="email" value="" placeholder="Email" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<input type="text" value="" placeholder="Navn" n name="NAME" class="" id="mce-NAME">
</div>
<div class="mc-field-group">
	<input type="text" value="" placeholder="Virksomhed / Boligforening " name="COMPANY" class="" id="mce-COMPANY">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_f088aa8a142e0ff06bfa3fc6e_ed0e2e6469" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Tilmeld" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>((function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='NAME';ftypes[1]='text';fnames[2]='COMPANY';ftypes[2]='text';
$.extend($.validator.messages, {
	required: "Dette felt er påkrævet.",
	maxlength: $.validator.format("Indtast højst {0} tegn."),
	minlength: $.validator.format("Indtast mindst {0} tegn."),
	rangelength: $.validator.format("Indtast mindst {0} og højst {1} tegn."),
	email: "Indtast en gyldig email-adresse.",
	url: "Indtast en gyldig URL.",
	date: "Indtast en gyldig dato.",
	number: "Indtast et tal.",
	digits: "Indtast kun cifre.",
	equalTo: "Indtast den samme værdi igen.",
	range: $.validator.format("Angiv en værdi mellem {0} og {1}."),
	max: $.validator.format("Angiv en værdi der højst er {0}."),
	min: $.validator.format("Angiv en værdi der mindst er {0}."),
	creditcard: "Indtast et gyldigt kreditkortnummer."
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
        
        
        <div class="clear archive">
        <?php $news_words = 50; $news_posts = 6;?>
        <?php include 'includes/news-list.php'; ?>
    </div>
        
    </main>

    <aside role="complementary" id="aside" class="aside-left">
        <?php include 'includes/sidemenu-page.php'; ?>
        <?php dynamic_sidebar('primary-widget-area'); ?>
        
    </aside>

</section>

<?php get_footer(); ?>