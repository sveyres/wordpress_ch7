
<?php get_header()  ?>
    <main>
        <section>
            <nav>
                <h2><?php bloginfo( 'name' ); ?></h2>
                <?php
                $args = array (
                    'container' => 'ul',
                );
                wp_nav_menu($args) ?>
            </nav>
        </section>

        <section id="whatis">
                <?php
                    get_template_part( 'template-parts/content_loop_whatis');
                ?>
        </section>

        <?php
            get_template_part( 'template-parts/content_loop_useit');
        ?>


        <section id="screenshot">
            <div class="container title">
                <h3>Screen App</h3>
                <p>A special thanks to Death.</p>
                <div class="owl-carousel two owl-theme">
                    <div class="item"><img class="cursor" src="<?php echo get_stylesheet_directory_uri().'/static/img/slide/1.png'; ?>" alt=""></div>
                    <div class="item"><img class="cursor" src="<?php echo get_stylesheet_directory_uri().'/static/img/slide/2.png'; ?>" alt=""></div>
                    <div class="item"><img class="cursor" src="<?php echo get_stylesheet_directory_uri().'/static/img/slide/3.png'; ?>" alt=""></div>
                    <div class="item"><img class="cursor" src="<?php echo get_stylesheet_directory_uri().'/static/img/slide/1.png'; ?>" alt=""></div>
                    <div class="item"><img class="cursor" src="<?php echo get_stylesheet_directory_uri().'/static/img/slide/2.png'; ?>" alt=""></div>
                    <div class="item"><img class="cursor" src="<?php echo get_stylesheet_directory_uri().'/static/img/slide/3.png'; ?>" alt=""></div>
                </div>
            </div>
            <div class="container">
                <img class="cursor" src="" alt="">
            </div>
        </section>

        <section class ="update">
            <div class="container title">
                <h3>Get Live Updates</h3>
                <p>A special thanks to Death.</p>
                <button class="buttonv" type="button" name="button">Subscribe to our Newsletter</button>
            </div>
        </section>

        <section id="credits">
            <?php
            get_template_part( 'template-parts/content_loop_credits');

            ?>
        </section>

        <section class ="download">
            <div class="container title">
                <h3>Download Free</h3>
                <button class="buttonv" type="button" name="button">Pay with a tweet</button>
            </div>
        </section>

        <section id="contact">
            <div class="container title">
                <h3>Contact us</h3>
                <p>A special thanks to Death.</p>
            </div>
            <div class="container contactus">
                <form class="" action="index.html" method="post">
                    <label for="name">Your name</label>
                    <input type="text" name="name" value="Enter Name">
                    <label for="email">Your email</label>
                    <input type="text" name="email" value="Enter Email">
                    <label for="message">Your message</label>
                    <textarea name="message" rows="8" cols="80"></textarea>
                    <button class="buttonv" type="submit" name="button">Submite</button>
                </form>
                <div class="adress">
                    <h4>Office Location</h4>
                    <p>The Pentagon <br>
                        Washington, DC 20301 <br>
                        Phone: XXX-XXX-XXXX <br>
                        Fax: XXX-XXX-YYYY
                    </p>
                    <h4>Social</h4>
                    <ul>
                        <li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-flickr" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer() ?>
