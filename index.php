<!-- cette page sert à afficher les recherches d'articles, càd modèles archive.php, search.php, et erreur 404  -->
<?php get_header(); ?> <!--appel de l'en-tête-->

<div id="indexSlider" class="push-5 grid-90 grid-parent">
    <?php dynamic_sidebar('banner'); ?>
</div>

<main class="push-5 grid-90">
    <div id="articles" class="grid-66">
        <h1>Nos Références</h1>
        <p>Catégorie : <?php the_category(' &bull; '); ?></p>
    
        <?php if(have_posts()) : while(have_posts()):the_post(); ?>
        <article class="resultatArticle grid-100 grid-parent">
            <div class="grid-33"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
            <div class="grid-66">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
                
                <!-- Maître d'ouvrage -->
                <?php if(get_field('maitre_douvrage')): ?>      
                <div class="donneurDordres grid-50">
                <h6 class="grid-100">Maître d'ouvrage</h3>
                    
                <?php if(get_field('logo_maitre_douvrage')): ?> 
                <div class="grid-33 grid-parent">
                        <img src="<?php the_field('logo_maitre_douvrage'); ?>" alt="logo maitre d'ouvrage" class="img-100"/>
                    </div>
                <div class="grid-66">
                            <?php the_field('maitre_douvrage'); ?>
                    </div>
                    
                <?php else: ?>
                <div class="grid-100">
                    <?php the_field('maitre_douvrage'); ?>
                </div>
                <?php endif; ?> 
            </div>
                <?php endif; ?>
            
                <!-- Maître d'oeuvre -->
                <?php if(get_field('maitre_doeuvre')): ?> 
                <div class="donneurDordres grid-50">
                    <h6 class="grid-100">Maître d'oeuvre</h6>
                    
                    <?php if(get_field('logo_maitre_doeuvre')): ?>
                    <div class="grid-33 grid-parent">
                        <img src="<?php the_field('logo_maitre_doeuvre'); ?>" alt="logo maître d'oeuvre" class="img-100" />
                    </div>
                    <div class="grid-66">
                        <?php the_field('maitre_doeuvre'); ?>
                    </div>
                    
                    <?php else: ?>
                    <div class="grid-100">
                        <?php the_field('maitre_doeuvre'); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            
            </div>
        </article>
        <?php endwhile; ?>
        <?php else : 
        //si il n'y a pas d'articles correspondant, affiche le message d'erreur (404 error) ?>
        <article class="erreur grid-100">
        <p>Désolé mais aucune référence ne correspond à votre demande.</p>
    </article>
        <?php endif; ?>
    </div><!-- fin div#articles-->

    <?php get_sidebar(); ?> <!-- appel de la colonne latérale des widgets -->
</main>

<?php get_footer(); ?> <!-- appel du pied de page-->