</main>
    <footer class="main-footer">
        <div class="container">
            <div class="copyright">Copyright &copy; Mes recettes 2021</div>
<!--            <nav class="footer-nav">-->
<!--                <ul class="menu">-->
<!--                    <li class="menu-item"><a href="page.html" class="menu-link">Mentions légales</a></li>-->
<!--                    <li class="menu-item"><a href="page.html" class="menu-link">Politique de confidentialité</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--            <nav class="social-nav">-->
<!--                <ul class="menu">-->
<!--                    <li class="menu-item"><a href="#" class="menu-link">Instagram</a></li>-->
<!--                    <li class="menu-item"><a href="#" class="menu-link">Facebook</a></li>-->
<!--                    <li class="menu-item"><a href="#" class="menu-link">Pinterest</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
            <?php wp_nav_menu(array(
                'theme_location'    => 'footer',
                'container'         => 'nav',
                'container_class'   => 'footer-nav',
                'add_link_class'        => 'menu-link',
                'fallback_cb'       => false,
                'depth'             => 1
            )); ?>
            <?php wp_nav_menu([
                'theme_location'    => 'social',
                'container'         => 'nav',
                'container_class'   => 'social-nav',
                'menu_class'        => 'menu',
                'fallback_cb'       => false,
                'depth'             => 1
            ]); ?>
        </div>
    </footer>

</body>
<?php wp_footer(); ?>

</html>