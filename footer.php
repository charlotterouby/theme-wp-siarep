    <footer id="piedDePage">
        <p class="push-5 grid-45">
            <?php bloginfo('name'); ?> - Tous droits réservés, 2015.
        </p>
        <div id="menuFooter" class="grid-45 menuHorizontal">
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