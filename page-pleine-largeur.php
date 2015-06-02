<!--appel de l'en-tête-->
<?php get_header(); ?> 

    
<!-- contenu principal -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <main id="page-container" class="grid-100">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </main>
<?php endwhile; ?>
<?php endif; ?>


<!-- appel du pied de page-->
<?php get_footer(); ?> 