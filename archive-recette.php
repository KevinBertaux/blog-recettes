<?php get_header(); ?>

<h1>ARCHIVE RECETTE</h1>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
    }
} ?>

<?php get_footer(); ?>
