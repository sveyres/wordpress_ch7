<?php
    $args = array(
        'posts_per_page'   => 6,
        'category_id'    => 3,
        'order' => 'ASC',
    );
    $posts = get_posts($args);
?>

<div class="container title">
    <h3><?php echo get_cat_name(3) ?></h3>
    <?php echo category_description(3); ?>
</div>

<div class="container whatis">
<?php
    foreach ($posts as $post) {
        setup_postdata( $post );
        $tags = wp_get_post_tags($post->ID);
        ?>
        <article class="">
            <?php the_post_thumbnail(); ?>
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
        </article>

        <?php
    }
?>

</div>
