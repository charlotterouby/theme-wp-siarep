<?php
//Template Name: Page simple
//Page pleine largeur d'écran sans aucune mise en forme
?>


<!--appel de l'en-tête-->
<?php get_header(); ?> 

    
<!-- contenu principal -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <main id="page-container" class="grid-100 grid-parent contenu-principal">
        <?php the_content(); ?>
    </main>
<?php endwhile; ?>
<?php endif; ?>


<!-- appel du pied de page-->
<?php get_footer(); ?> 