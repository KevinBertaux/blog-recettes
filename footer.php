</main>
<footer class="main-footer">
    <div class="container">
        <div class="copyright">Copyright &copy;
            <?php
            $currentYear = get_the_date('Y');
            bloginfo('name');
            echo ' ' . $currentYear;
            ?>
        </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'add_link_class' => 'menu-link',
            'fallback_cb' => false,
            'depth' => 1
        ]);
        wp_nav_menu([
            'theme_location' => 'social',
            'container' => 'nav',
            'container_class' => 'social-nav',
            'add_link_class' => 'menu-link',
            'fallback_cb' => false,
            'depth' => 1
        ]); ?>
    </div>
</footer>

</body>
<?php wp_footer(); ?>

</html>