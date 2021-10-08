<?php

function ecfwp_enqueue_stylesheets_and_scripts()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', [], '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', ['reset'], '1.0');
}

add_action('wp_enqueue_scripts', 'ecfwp_enqueue_stylesheets_and_scripts');

function ecfwp_register_menus()
{
    register_nav_menus([
        'main' => 'Menu principal',
        'footer' => 'Menu de pied de page',
        'social' => 'Menu des réseaux sociaux'
    ]);
}

add_action('init', 'ecfwp_register_menus');

function ecfwp_menu_add_class($classes, $item, $args)
{
    if (isset($args->add_link_class)) {
        $classes['class'] = $args->add_link_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'ecfwp_menu_add_class', 10, 3);

/* Déclaration des pages d'options ACF du thème */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Paramétrage du thème',
        'menu_title' => 'Paramétrage',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_others_posts',
        'redirect' => true
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Paramétrage généraux',
        'menu_title' => 'Général',
        'parent_slug' => 'theme-general-settings',
    ]);

//    acf_add_options_sub_page([
//        'page_title' 	=> 'Paramétrage des modules',
//        'menu_title'	=> 'Modules',
//        'parent_slug'	=> 'theme-general-settings',
//    ]);

    acf_add_options_sub_page([
        'page_title' => 'Paramétrage de la 404',
        'menu_title' => '404',
        'parent_slug' => 'theme-general-settings',
    ]);
}
