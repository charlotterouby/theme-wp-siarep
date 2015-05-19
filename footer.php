    <footer id="piedDePage">
        <p class="push-5 grid-45">
            <?php bloginfo('name'); ?> - <?php the_author();?> &copy; Tous droits réservés, 2015.
        </p>
        <div id="menuSecondaire" class="grid-45">
                    <?php wp_nav_menu(array(
                        'sort_column'=>'menu_order',
                        'theme_location'=>'secondaire')
                                     ); ?>
        </div>
        <div class="grid-100"><?php wp_footer(); ?></div>
    </footer>
    </div> <!-- fin #conteneur -->
    </body>
</html>