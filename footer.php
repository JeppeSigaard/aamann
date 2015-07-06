<?php $footer_options = get_option('smamo_options_footer_settings'); ?>
<footer id="footer">
    <div>
        <div class="footer-column">
            <a href="<?php echo get_bloginfo('url'); ?>">
                <img src="<?php echo get_header_image(); ?>"/>
            </a>
        </div>

        <div class="footer-column">
            <h2><?php echo get_bloginfo('title') ?></h2>
            <p><strong>Adresse: </strong></p>
            <p><?php echo $footer_options['smamo_options_footer_text_field_0'];  ?></p>
            <p><?php echo $footer_options['smamo_options_footer_text_field_1'];  ?></p>
            <p>Telefon: <?php echo $footer_options['smamo_options_footer_text_field_2'];  ?></p>
            <p><a href="mailto:<?php echo $footer_options['smamo_options_footer_text_field_3'];?>"><?php echo $footer_options['smamo_options_footer_text_field_3'];  ?></a></p>
            <p><a href="mailto:<?php echo $footer_options['smamo_options_footer_text_field_4'];?>"><?php echo $footer_options['smamo_options_footer_text_field_4'];  ?></a></p>
            <p>CVR. nr.: <?php echo $footer_options['smamo_options_footer_text_field_5'];  ?></p>
        </div>

        <div class="footer-column">
            <h2>Vi er også på Facebook</h2>
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Faamannwulff&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:65px;display:inline-block;width:105px;" allowTransparency="true"></iframe>
        </div>

        <div class="footer-column">
            <h2>Søg på vores side</h2>
            <form class="search" id="searchform" action="<?php echo get_site_url(); ?>" method="get">
               <fieldset>
                  <span class="text"><input name="s" id="s" type="text" value="" placeholder="Søg ..."></span>
               </fieldset>
            </form>
            <h2>Vi støtter</h2>
            <a href="https://www.facebook.com/events/428316630637652"> Islands Brygge Familieløb</a>
        </div>
    </div>
<div class="footer-copy">Copyright 2015 Aamann & Wulff ApS | All Rights Reserved</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>