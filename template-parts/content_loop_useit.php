




<?php foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
<section id="useit">
<div class="container">
    <article class="article">
        <div>
            <h4><?php the_title(); ?></h4>
            
            <?php the_content(); ?>
            <button class="buttonv" type="button" name="button">View Details</button>
            <button class="buttonb" type="button" name="button">View Website</button>
        </div>
        <div class="">
            <?php the_post_thumbnail(); ?>
        </div>
    </article>
</div>
</section>
<?php };?>
