<ul id="serviceaftaler">
<?php 

$sa = get_posts(array(
    'posts_per_page'   => 3,
    'offset'           => 0,
    'orderby'          => 'menu_order',
    'order'            => 'DESC',
    'post_type'        => 'serviceaftale',
    'post_status'      => 'publish',
    'suppress_filters' => true 
));

foreach($sa as $sa) : 

?>
    <li class="sa-item">
        <div>
            <h3 class="sa-title" role="title"><?php echo get_the_title($sa->ID); ?></h3>
            <div class="sa-price" role="price">
                <span class="dkk">Dkk</span>
                <span class="nmb"><?php echo get_post_meta($sa->ID, 'pris',true) ?></span>
                <span class="prmd">md</span>
            </div>
            <ul class="sa-options" role="options">
                <?php $content = get_post_meta($sa->ID,'indhold',true);?>
                <?php if (is_array($content)): foreach($content as $content): ?>
                <li><?php echo $content; ?></li>
                <?php endforeach; else: ?>
                <li><?php echo $content; ?></li>
                <?php endif; ?>
            </ul>
            <div class="sa-action">
                <a href="#" data-title="<?php echo get_the_title($sa->ID); ?>">
                <?php $sa_link = get_post_meta($sa->ID, 'cta', true);?>
                <?php if (empty($sa_link)) {$sa_link = 'Bestil nu';} ?>
                <?php echo $sa_link;?>
                </a>
            </div>
        </div>
    </li>
<?php endforeach; ?>
</ul>

<form id="bestillingsform" action="#" method="post">
    <h3 class="form-heading">Bestilling af <span></span></h3>
    <p class="form-desc">Udfyld formularen herunder, og bliv kontaktet for nærmere information:</p>
    <input type="hidden" name="bestil" placeholder="bestil"/>
    <input type="text" name="name" placeholder="Indtast dit navn"/><br/>
    <input type="email" name="email" placeholder="Indtast din email"/><br/>
    <input type="tel" name="phone" placeholder="Indtast dit telefonnummer"/><br/>
    <textarea name="besked" placeholder="Tilføj en besked (valgfrit)"></textarea>
    <a href="#" id="price-order">Afgiv Bestilling</a>
</form>

