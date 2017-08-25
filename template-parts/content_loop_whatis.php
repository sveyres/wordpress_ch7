
<div class="container title">
    <h3><?php foreach (get_the_category() as $category){
            echo $category->cat_name;
        }; ?></h3>
    <p><?php echo category_description(); ?></p>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </article>

<?php };?>

</div>
