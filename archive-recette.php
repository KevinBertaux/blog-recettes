<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) { ?>
        <h1 class="section-title">a coriger
            <?php if (is_home()) {
                single_post_title();
            } elseif (is_category()) {
                single_cat_title('Catégorie : ');
            } elseif (is_tax()) {
                $term = get_term(get_queried_object()->term_id);
                echo 'Taxonomie ' . $term->taxonomy . ' : ' . $term->name;
            } ?>
        </h1>
        <div class="blog-grid">
            <?php
            while (have_posts()) {
                the_post(); ?>
                <article class="card">
                    <?php the_post_thumbnail('card-blog', ['class' => 'card-illustration']); ?>

<!--                    --><?php //the_terms(the_post()->ID); ?>

                    <ul class="card-terms-list">
                        <li class="card-terms-item">
                            <a href="recipe-list-category.html" class="card-terms-link">Soupe</a>
                        </li>
                        <li class="card-terms-item">
                            <a href="recipe-list-category.html" class="card-terms-link">Asiatique</a>
                        </li>
                    </ul>
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <ul class="card-meta-list">
                        <li class="card-meta-item">45 min</li>
                        <li class="card-meta-item">6-8 portions</li>
                    </ul>
                    <a href="<?php the_permalink(); ?>" class="card-link">Voir la recette</a>
                </article>
                <?php
            } ?>
        </div>
    <?php } else { ?>
        <h1 class="section-title">Désolé, aucun contenu n'a été publié ici.</h1>
    <?php } ?>
    <nav class="pagination">
        <?php
        echo paginate_links([
            'prev_text' => 'Page précédente <span class="screen-reader-text">Précédent</span>',
            'next_text' => 'Page suivante <span class="screen-reader-text">Suivant</span>',
        ]); ?>
    </nav>
</div>

<?php get_footer(); ?>

