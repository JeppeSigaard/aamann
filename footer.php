<?php $footer_options = get_option('smamo_options_footer_settings'); ?>
<footer id="footer">
    <div>
        <div class="footer-column">
            <?php dynamic_sidebar('footer-widget-area-1'); ?>   
        </div>

        <div class="footer-column">
            <?php dynamic_sidebar('footer-widget-area-2'); ?>   
        </div>

        <div class="footer-column">
           <?php dynamic_sidebar('footer-widget-area-3'); ?>   
        </div>

        <div class="footer-column">
            <?php dynamic_sidebar('footer-widget-area-4'); ?>   
        </div>
    </div>
<div class="footer-copy">Copyright 2015 Aamann & Wulff ApS | All Rights Reserved</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>