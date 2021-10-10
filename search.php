<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) {
        global $wp_query;
        $total_results = $wp_query->found_posts; ?>
        <h1>Résultats de la recherche "<?php the_search_query(); ?>"</h1>
        <p>Votre recherche a retourné <?php echo $total_results; ?> résultat<?php echo ($total_results > 1) ? 's' : '';?></p>
        <ul class="search-results-list">
            <?php while (have_posts()) {
                the_post(); ?>
                <li class="search-results-item">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Lire la suite</a>
                </li>
            <?php } ?>
        </ul>
        <?php /* posts_nav_link(); Pagination à l'ancienne */ ?>
        <?php the_posts_pagination([
            'prev_text' => '&Lt; <span class="screen-reader-text">Précédent</span>',
            'next_text' => '&Gt; <span class="screen-reader-text">Suivant</span>',
        ]); ?>
    <?php } else { ?>
        <h1>Aucun résultat pour la recherche "<?php the_search_query(); ?>"</h1>
    <?php } ?>
</div>
<?php get_footer(); ?>
