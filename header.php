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
        <div class="logo">Mes recettes</div>
        <?php wp_nav_menu(array(
            'theme_location' => 'main',
            'menu_id' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-nav',
            'add_link_class' => 'menu-link',
            'fallback_cb' => false,
            'depth' => 1
        )); ?>
        <form action="search.html" class="search-form">
            <label for="search" class="sr-only">Rechercher</label>
            <input type="search" id="search" placeholder="Recherche ...">
            <button type="submit">Ok</button>
        </form>
    </div>
</header>
<main class="main-content">
