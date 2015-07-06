<ul id="ledige-stillinger">
<?php 

$stillinger = get_posts(array(
    'posts_per_page'   => -1,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'stilling',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true 
));

foreach($stillinger as $stilling) : ?>

<li>
    <a href="#" title="<?php echo $stilling->post_title; ?>"><?php echo $stilling->post_title; ?></a>
    <div class="stilling-desc">
    <?php echo apply_filters('the_content',$stilling->post_content); ?>
    </div>
</li>

<?php endforeach; ?>
</ul>