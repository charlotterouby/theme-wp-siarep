<!-- cette page sert à afficher les recherches d'articles, càd modèles archive.php, search.php, et erreur 404  -->
<?php get_header(); ?> <!--appel de l'en-tête-->

<div id="indexSlider" class="grid-100 grid-parent">
    <?php
        echo do_shortcode("[metaslider id=109]");
    ?>
</div>

<div id="articles" class="grid-66">
    <h1>Nos Références</h1>
    <h2>Catégorie : <?php the_category('&bull;'); ?></h2>
    <?php if(have_posts()) : while(have_posts()):the_post(); ?>
    <article class="resultatArticle grid-100 grid-parent">
        <div class="grid-33 img-100"><?php the_post_thumbnail('thumbnail'); ?></div>
        <h3 class="grid-66"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="grid-66"><?php the_excerpt(); ?></p>
        <p class="grid-33"><?php the_field('maitre_douvrage'); ?></p>
        <p class="grid-33"><?php the_field('maitre_doeuvre'); ?></p>
    </article>
    <?php endwhile; ?>
    
    <?php else : //si il n'y a pas d'articles correspondant, affiche le message d'erreur (404 error) ?>
    <article class="erreur grid-100">
        <h3>Désolé mais aucune référence ne correspond à votre demande.</h3>
    </article>
    <?php endif; ?>
</div><!-- fin div#articles-->

<?php get_sidebar(); ?> <!-- appel de la colonne latérale des widgets -->

<?php get_footer(); ?> <!-- appel du pied de page-->