<footer>
    <section>
        <div class="container">
            <h3>Follow me !</h3>
            <p>Vuoi ricevere news su altri template? <br>
            Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br>
            Go to: <a href="#">andreagalanti.it</a></p>
            <p><a href="#">Flatfy Theme</a> by <a href="#">Andrea Galanti</a> is licensed to the public under</p>
            <p>the <a href="#">Creative Commons Attribution 3.0 License - NOT COMMERCIAL</a>.</p>
        </div>
        <div class="container">
            <h3>Flatfy Theme</h3>
            <ul>
                <li>12 Column Grid Bootstrap</li>
                <li>Form Contact</li>
                <li>Drag Gallery</li>
                <li>Full Responsive</li>
                <li>Lorem Ipsum</li>
            </ul>
            <p>Go to: <a href="#">andreagalanti.it/flatfy</a></p>
        </div>
    </section>

</footer>
<script
     src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>

<script src=" <?php echo get_stylesheet_directory_uri().'/static/js/OwlCarousel2-2.2.1/dist/owl.carousel.min.js'; ?> "></script>

<script type="text/javascript">
$(document).ready(function(){
    if ($(this).parents('.last').length) {
    }
    $('.one').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.two').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

});
</script>
</body>
</html>

</body>

</html>
