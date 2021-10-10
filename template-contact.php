<?php
/* Template Name: Modèle page Contact */
get_header(); ?>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <div class="map">
            <?php echo get_field('map'); ?>
        </div>
    </div>
<?php get_footer(); ?>