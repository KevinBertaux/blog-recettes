<?php get_header(); ?>
<div class="container">
    <h1><?php the_field('404_title', 'options'); ?></h1>
    <img src="<?php the_field('404_image', 'options'); ?>" alt="Perdu ?" width="50%">
</div>
<?php get_footer(); ?>
