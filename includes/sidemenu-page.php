<?php
    $post = get_post(get_the_ID());
	if($post->post_parent)
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
	else
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	
	$parents = get_post_ancestors( $post->ID );
	$top_id = ($parents) ? $parents[count($parents)-1]: $post->ID;

    $active = 'top';
    if ($top_id == get_the_ID()) {$active = 'top active';}
	
	if ($children) : ?>
    <div class="sidemenu-container" id="side-menu">
    <a href="<?php echo get_the_permalink($top_id); ?>">
        <h4 class="<?php echo $active; ?>"><?php echo get_the_title($top_id); ?></h4>
    </a>
        <ul class="menu">
		<?php echo $children; ?>
    	</ul>
    </div>
<?php endif; ?>