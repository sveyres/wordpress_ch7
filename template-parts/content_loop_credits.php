<?php
    $arg = array(
        'posts_per_page'   => 4,
        'category_name'    => "credits",
        'order' => 'ASC',
    );
    $posts = get_posts($arg);
?>

<div class="container title">
    <h3><?php echo get_cat_name(5) ?></h3>
    <?php echo category_description(5); ?>
</div>

<div class="container credits">
<?php
    foreach ($posts as $post) {
        setup_postdata( $post );
        $tags = wp_get_post_tags($post->ID);
?>
        <article class="">
            <i class="fa fa-<?php echo get_post_meta($post->ID, 'fa_icon', true) ?>" aria-hidden="true"></i>
            <div class="">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
        </article>
<?php
    };
?>
</div>
