<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header">
    <div class="container">
        <div class="logo">
            <?php
            /* Valeur de $choice :
            1 = Nom du site
            2 = Texte
            3 = Image
            Voir champ ACF */
            $choice = get_field('switch_logo_title', 'options');
            $logo_txt = get_field('site_title', 'options');
            $logo_img = get_field('site_logo', 'options');

            if ($choice === '2' && $logo_txt) {
                $logo_to_display = $logo_txt;
            } else if ($choice === '3' && $logo_img) {
                $logo_to_display = wp_get_attachment_image($logo_img, [120, 50]);
            } else {
                $logo_to_display = get_bloginfo('name');
            }

            if (is_front_page()) {
                echo $logo_to_display;
            } else { ?>
                <a class="menu-link logo-link" href="<?php echo get_home_url(); ?>"><?php echo $logo_to_display; ?></a>
            <?php } ?>

        </div>
        <?php wp_nav_menu([
            'theme_location' => 'main',
            'menu_id' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-nav',
            'add_link_class' => 'menu-link',
            'fallback_cb' => false,
            'depth' => 1
        ]); ?>
        <?php get_search_form(); ?>
    </div>
</header>
<main class="main-content">
