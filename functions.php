<?php

/* Chargement des feuilles de style et des scripts JS */
function ecfwp_enqueue_stylesheets_and_scripts() {
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('reset'), '1.0');
}
add_action('wp_enqueue_scripts','ecfwp_enqueue_stylesheets_and_scripts');

function ecfwp_register_menus() {
    /* Création des emplacements de menu */
    register_nav_menus( array(
        'main'      => 'Menu principal',
        'footer'    => 'Menu de pied de page',
        'social'    => 'Menu des réseaux sociaux'
    ) );
}
add_action('init', 'ecfwp_register_menus');

