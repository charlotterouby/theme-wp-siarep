<?php get_header(); ?> <!--appel de l'en-tête-->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<main class="articleSeul push-5 grid-90 grid-parent"> 
    <!---------------- bannière--------------------->
    <div class="grid-100 grid-parent banner">
        <img src="<?php the_field('img_banner'); ?>" alt="banner" class="img-100"/>
        <h1 class="grid-100 titreArticle">
            <?php the_title(); ?>
        </h1>
    </div>
    
    <!----------- contenu principal----------------->
    <section class="grid-66 grid-parent">
        <div class="grid-100"><?php the_content(); ?></div>
    </section>
    
    <!-------------------- ASIDE-------------------->
    <aside class="grid-33 grid-parent">
        <!----------- .asideUn --------------------->
        <section class="asideUn">
            <h2>Donneurs d'ordre</h2>
            
            <!-- Maître d'ouvrage -->
            <?php if(get_field('maitre_douvrage')): ?>      
                <article class=" grid-100">
                    <h3 class="grid-100">Maître d'ouvrage</h3>
                    <?php if(get_field('logo_maitre_douvrage')): ?> 
                        <div class="grid-33 grid-parent"><img src="<?php the_field('logo_maitre_douvrage'); ?>" alt="logo maitre d'ouvrage" class="img-100"/></div>
                        <div class="grid-66"><?php the_field('maitre_douvrage'); ?></div>
                    <?php else: ?>
                        <div class="grid-100"><?php the_field('maitre_douvrage'); ?></div>
                    <?php endif; ?> 
                </article>
            <?php endif; ?>
            
            <!-- Maître d'oeuvre -->
            <?php if(get_field('maitre_doeuvre')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Maître d'oeuvre</h3>
                    <?php if(get_field('logo_maitre_doeuvre')): ?>
                        <div class="grid-33 grid-parent"><img src="<?php the_field('logo_maitre_doeuvre'); ?>" alt="logo maître d'oeuvre" class="img-100" /></div>
                        <div class="grid-66"><?php the_field('maitre_doeuvre'); ?></div>
                    <?php else: ?>
                        <div class="grid-100"><?php the_field('maitre_doeuvre'); ?></div>
                    <?php endif; ?>
                </article>
            <?php endif; ?>
            
            <!-- Bureau d'étude -->
            <?php if(get_field('maitre_bureau_detude')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Bureau d'étude</h3>
                    <?php if(get_field('logo_bureau_detude')): ?>
                        <div class="grid-33 grid-parent"><img src="<?php the_field('logo_bureau_detude'); ?>" alt="logo bureau d'étude" class="img-100" /></div>
                    <?php endif; ?>
                    <div class="grid-66"><?php the_field('bureau_detude'); ?></div>
                </article>
            <?php endif; ?>
        </section>
        
        <!-------------- .asideDeux---------------->
        <section class="asideDeux">
            <h2>Le chantier en bref</h2>
            
            <!-- Localisation chantier-->
            <?php if(get_field('localisation_du_chantier')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Adresse</h3>
                    <div class="grid-100"><?php the_field('localisation_du_chantier'); ?></div>
                </article>
            <?php endif; ?>
            
            <!-- Calendrier -->
            <?php if(get_field('date_dinstallation')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Calendrier</h3>
                    <div class="grid-100">
                        <p>Date d'installation : <?php the_field('date_dinstallation'); ?></p>
                    </div>
                    <div class="grid-100">
                    <p>Date de livraison : <?php the_field('date_de_livraison'); ?></p>
                    </div>
                </article>
            <?php endif; ?>
            
            <!-- Infos sur le marché -->
            <?php if(get_field('marche')): ?> 
                <article class="grid-100">
                <h3 class="grid-100">Marché</h3>
                <div class="grid-100"><?php the_field('marche'); ?></div>
            </article>
            <?php endif; ?>
            
            <!-- Moyens de production-->
            <?php if(get_field('production')): ?> 
                <article class="grid-100">
                <h3 class="grid-100">Moyens de production</h3>
                <div class="grid-100"><?php the_field('production'); ?></div>
            </article>
            <?php endif; ?>
            
            <!--Matériaux de référence--> 
            <?php if(get_field('materiaux_de_reference')): ?> 
                <article class="grid-100">
                <h3 class="grid-100">Matériaux de référence</h3>
                <div class="grid-100"><?php the_field('materiaux_de_reference'); ?></div>
            </article>
            <?php endif; ?>
            
            <!-- Partenaires sur le chantier-->
            <?php if(get_field('partenaires')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Partenaires</h3>
                    <div class="grid-100"><?php the_field('partenaires'); ?></div>
            </article>
            <?php endif; ?>
        </section>
    </aside>
</main>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> <!-- appel du pied de page-->