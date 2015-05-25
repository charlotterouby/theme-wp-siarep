    <footer id="piedDePage" class="push-5 grid-90">
    <div id="menuFooter" class="grid-100 menuHorizontal">
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