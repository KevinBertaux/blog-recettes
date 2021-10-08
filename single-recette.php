<?php get_header(); ?>

<h1>SINGLE RECETTE</h1>
<?php if(have_posts()) {
    while(have_posts()) {
        the_post();
        }
    } ?>

<?php get_footer(); ?>
