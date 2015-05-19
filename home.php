<?php get_header(); ?> <!--appel de l'en-tête-->
<main class="grid-100 grid-parent">
    <div id="homeSlider" class="grid-100 grid-parent">
        <?php
            echo do_shortcode("[metaslider id=100]");
        ?>
    </div>
    <section id="homeTitre">
        <a href="<?php bloginfo('url'); ?>">
            <img src="logo.png"/>
            <h1><?php bloginfo('description'); ?></h1>
        </a>
    </section>
</main>
<?php get_footer(); ?> <!-- appel du pied de page-->