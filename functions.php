<?php

function ecfwp_setup_theme() {
	/* Activation de la gestion du <title> par WordPress */
	add_theme_support( 'title-tag' );

	/* Activation du support des images mises en avant */
	add_theme_support( 'post-thumbnails' );

	/* Définition des tailles d'images personnalisées */
	add_image_size( 'card-blog', 320, 480, true );
	add_image_size( 'image_recipe', 485, 600, true );
	add_image_size( 'image-blog', 1020, 680, true );
}

add_action( 'after_setup_theme', 'ecfwp_setup_theme' );

function ecfwp_enqueue_stylesheets_and_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', [], '1.0' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', [ 'reset' ], '1.0' );
}

add_action( 'wp_enqueue_scripts', 'ecfwp_enqueue_stylesheets_and_scripts' );

function ecfwp_register_menus() {
	register_nav_menus( [
		'main'   => 'Menu principal',
		'footer' => 'Menu de pied de page',
		'social' => 'Menu des réseaux sociaux'
	] );
}

add_action( 'init', 'ecfwp_register_menus' );

/* Limit max menu depth in admin panel to 1 */
function ecfwp_limit_depth( $hook ) {
	if ( $hook !== 'nav-menus.php' ) {
		return;
	}

	// override default value right after 'nav-menu' JS
	wp_add_inline_script( 'nav-menu', 'wpNavMenu.options.globalMaxDepth = 0;', 'after' );
}

add_action( 'admin_enqueue_scripts', 'ecfwp_limit_depth' );

function ecfwp_menu_add_class( $classes, $item, $args ) {
	if ( isset( $args->add_link_class ) ) {
		$classes['class'] = $args->add_link_class;
	}

	return $classes;
}

add_filter( 'nav_menu_link_attributes', 'ecfwp_menu_add_class', 10, 3 );

/* Déclaration des pages d'options ACF du thème */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( [
		'page_title' => 'Paramétrage du thème',
		'menu_title' => 'Paramétrage',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_others_posts',
		'redirect'   => true
	] );

	acf_add_options_sub_page( [
		'page_title'  => 'Paramétrage généraux',
		'menu_title'  => 'Général',
		'parent_slug' => 'theme-general-settings',
	] );

	acf_add_options_sub_page( [
		'page_title'  => 'Paramétrage blog',
		'menu_title'  => 'Blog',
		'parent_slug' => 'theme-general-settings',
	] );

	acf_add_options_sub_page( [
		'page_title'  => 'Paramétrage recettes',
		'menu_title'  => 'Recette',
		'parent_slug' => 'theme-general-settings',
	] );

	acf_add_options_sub_page( [
		'page_title'  => 'Paramétrage de la 404',
		'menu_title'  => '404',
		'parent_slug' => 'theme-general-settings',
	] );
}

/* Remove p and br autogenerated by CF7 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/* Limit the_excerpt to 20 words */
function ecfwp_custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'ecfwp_custom_excerpt_length', 999 );

/* Modification de la boucle de WP */
function ecfwp_override_query( $wp_query ) {
	if ( ! $wp_query->is_admin() and $wp_query->is_main_query() and is_post_type_archive( 'recette' ) ) {
		$recipePerPage = get_field( 'recipe_per_page', 'options' );
		if ( $recipePerPage ) {
			$wp_query->set( 'posts_per_page', $recipePerPage );
		}
		$wp_query->set( 'orderby', 'date' );
		$wp_query->set( 'order', 'DESC' );
	}
}

add_action( 'pre_get_posts', 'ecfwp_override_query' );
