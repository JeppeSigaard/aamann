<?php 


// Remove that junk from my wp_head
 remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
 remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
 remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
 remove_action('wp_head', 'feed_links', 2); // Removes the RSS feeds remember to add post feed maunally (if required) to header.php
 remove_action('wp_head', 'feed_links_extra', 3); // Removes all other RSS links
 remove_action('wp_head', 'index_rel_link'); // Removes the index page link
 remove_action('wp_head', 'start_post_rel_link', 10, 0); // Removes the random post link
 remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Removes the parent post link
 remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Removes the next and previous post links




?>