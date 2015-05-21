<?php get_header(); ?> <!--appel de l'en-tête-->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<main class="articleSeul push-5 grid-90 grid-parent"> 
    <div class="grid-100 grid-parent">
        <img src="<?php the_field('img_banner'); ?>" alt="banner" class="img-100"/>
    </div>
    <section class="grid-66 grid-parent">
        <h1 class="grid-100"><?php the_title(); ?></h1>
        <div class="grid-100"><?php the_content(); ?></div>
    </section>
    <aside class="grid-33 grid-parent">
        <section class="asideUn">
            <h2>Donneurs d'ordre</h2>
            <article class=" grid-100 grid-parent">
                <h3 class="grid-100">Maître d'ouvrage</h3>
                <div class="grid-33 grid-parent"><img src="<?php the_field('logo_maitre_douvrage'); ?>" alt="logo maitre d'ouvrage" class="img-100"/></div>
                <div class="grid-66">
                    <?php the_field('maitre_douvrage'); ?>
                </div>
            </article>
            
            <article class="grid-100 grid-parent">
                <h3 class="grid-100">Maître d'oeuvre</h3>
                <div class="grid-33 grid-parent"><img src="<?php the_field('logo_maitre_doeuvre'); ?>" alt="logo maître d'oeuvre" class="img-100" /></div>
                <div class="grid-66">
                    <?php the_field('maitre_doeuvre'); ?>
                </div>
            </article>
            
            <article class="grid-100 grid-parent">
                <h3 class="grid-100">Bureau d'étude</h3>
                <div class="grid-33 grid-parent"><img src="<?php the_field('logo_bureau_detude'); ?>" alt="logo bureau d'étude" class="img-100" /></div>
                <div class="grid-66">
                    <?php the_field('bureau_detude'); ?>
                </div>
            </article>
        </section>
        
        <section class="asideDeux">
            <h2>Le chantier en bref</h2>
            <article class="grid-100">
                <h3 class="grid-100">Localisation</h3>
                <div class="grid-100">
                    <?php the_field('localisation_du_chantier'); ?>
                </div>
            </article>
            
            <article class="grid-100">
                <h3 class="grid-100">Calendrier</h3>
                <div class="grid-100"><?php the_field('date_dinstallation'); ?></div>
                <div class="grid-100"><?php the_field('date_de_livraison'); ?></div>
            </article>
            
            <article class="grid-100">
                <h3 class="grid-100">Marché</h3>
                <div class="grid-100"><?php the_field('marche'); ?></div>
            </article>
            
            <article class="grid-100">
                <h3 class="grid-100">Production</h3>
                <div class="grid-100"><?php the_field('production'); ?></div>
            </article>
            
            <article class="grid-100">
                <h3 class="grid-100">Matériaux de référence</h3>
                <div class="grid-100"><?php the_field('materiaux_de_reference'); ?></div>
            </article>
            
            <article class="grid-100">
                <h3 class="grid-100">Partenaires</h3>
                <div class="grid-100"><?php the_field('partenaires'); ?></div>
            </article>
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