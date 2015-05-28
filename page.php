<!--appel de l'en-tête-->
<?php get_header(); ?> 

<!-- contenu principal -->
<main class="grid-100 grid-parent">
   <div id="pageSlider" class="grid-100 grid-parent">
    <?php
        echo do_shortcode("[metaslider id=112]");
    ?>
</div>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="pages" class="push-5 grid-90">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>
</main>

<!-- appel du pied de page-->
<?php get_footer(); ?> 