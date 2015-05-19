<?php get_header(); ?> <!--appel de l'en-tête-->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<main class="articleSeul grid-100 grid-parent"> 
    <div class="grid-100 grid-parent"><?php the_post_thumbnail('large'); ?></div>
    <section class="push-5 grid-50">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </section>
    <aside class="push-5 grid-33">
        <section class="emplacementUn grid-100">
            <h2 class="titre-widget">Donneurs d'ordre</h2>
            <h3>Maître d'ouvrage</h3>
            <?php the_field('logo_maitre_douvrage'); ?>
            <?php the_field('maitre_douvrage'); ?>
            
            <h3>Maître d'oeuvre</h3>
            <?php the_field('logo_maitre_doeuvre'); ?>
            <?php the_field('maitre_doeuvre'); ?>
            
            <h3>Bureau d'étude</h3>
            <?php the_field('logo_bureau_detude'); ?>
            <?php the_field('bureau_etude'); ?>
        </section>
        
        <section class="emplacementDeux grid-100">
            <h2 class="titre-widget">Le chantier en bref</h2>
            <h3>Localisation</h3>
            <?php the_field(''); ?>
            
            <h3>Calendrier</h3>
            <?php the_field(''); ?>
            <?php the_field(''); ?>
            
            <h3>Marché</h3>
            <?php the_field(''); ?>
            
            <h3>Production</h3>
            <?php the_field(''); ?>
            
            <h3>Matériaux de référence</h3>
            <?php the_field(''); ?>
            
            <h3>Partenaires</h3>
            <?php the_field(''); ?>
        </section>
    </aside>
</main>
<?php endwhile; ?>
<?php endif; ?>

<!-- principe pour les articles "Actus du chantier"
    * créé des articles au format "Etat/status"
    *leur associé l'étiquette spécifique au chantier
    * faire une fonction de recherche des articles avec ces deux critères
------------------------------------------------------->

<?php get_footer(); ?> <!-- appel du pied de page-->