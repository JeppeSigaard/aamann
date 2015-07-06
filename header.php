<?php $social_opt = get_option('smamo_options_social_settings'); ?>
<!doctype html>
<html>
    <head>
        <title><?php wp_title(' | ', true, 'right');?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
        <?php require 'includes/metatags.php'; ?>
        <?php wp_head(); ?>
        <?php include 'includes/analytics.php';?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header" role="navigation">
            <div>     
                <menu id="top-menu">
                    <?php wp_nav_menu(array( 'theme_location' => 'top-menu', 'container' => false));?>
                    <a target="_blank" href="<?php echo $social_opt['smamo_options_social_text_field_0'] ?>" title="Facebook" class="top-facebook"></a>
                    <a target="_blank" href="<?php echo $social_opt['smamo_options_social_text_field_1'] ?>" title="Linkedin" class="top-linkedin"></a>
                </menu>
                <a id="logo" href="<?php echo get_bloginfo('url') ?>">
                   
                   <?php include 'includes/vectorlogo.php'; ?>
                   <!-- <img src="<?php header_image(); ?>"/> -->
                </a>
            </div>
            <menu id="hoved-menu">
                <a href="#" id="menu-mobile"></a>
                <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'container' => false));?>
            </menu>
        </header>