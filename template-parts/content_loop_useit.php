<?php
    $args = array(
        'posts_per_page'   => 6,
        'category_name'    => 'useit',
        'order' => 'ASC',
    );
    $posts = get_posts($args);

    foreach ($posts as $post) {
        setup_postdata( $post );
        $tags = wp_get_post_tags($post->ID);
?>
    <section id="useit">
        <div class="container">
            <article class="article">
                <div class="desc">
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <button class="buttonv" type="button" name="button">View Details</button>
                    <button class="buttonb" type="button" name="button">View Website</button>
                </div>
                <div class="pic">
                    <?php the_post_thumbnail(); ?>
                </div>
            </article>
        </div>
    </section>
<?php
    };
?>
