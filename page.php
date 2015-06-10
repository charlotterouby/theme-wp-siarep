<!--appel de l'en-tête-->
<?php get_header(); ?> 

<!-- Bannière -->
<div id="indexSlider" class="grid-100 grid-parent">
    <?php dynamic_sidebar('banner'); ?>
</div>
<?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs" class="push-5 grid-90">','</p>');
        } 
    ?>
    
<!-- contenu principal -->
<main class="push-5 grid-90 contenu-principal">
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="page">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>
</main>

<!-- appel du pied de page-->
<?php get_footer(); ?> 