<?php get_header(); ?>
<div class="container">
    <h1><?php the_field('404_title', 'options'); ?></h1>
    <?php the_field('404_content', 'options'); ?>
</div>
<?php get_footer(); ?>
