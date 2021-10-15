<div class="container">
    <?php if (have_posts()) { ?>
        <h1 class="section-title">
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
            <?php while (have_posts()) {
                the_post(); ?>
                <article class="card">

                    <?php the_post_thumbnail('card-blog', ['class' => 'card-illustration']); ?>
                    <div class="card-content">
                        <?php $termList = get_the_category_list();
                        var_dump($termList);
                        ?>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="card-link">Lire la suite
                        <img loading="lazy"
                             src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-right.svg" alt=""
                             aria-hidden="true">
                    </a>
                </article>
            <?php } ?>
        </div>
    <?php } else { ?>
        <h1 class="section-title">Désolé, aucun contenu n'a été publié ici.</h1>
    <?php } ?>
    <?php the_posts_pagination(array(
        'prev_text' => '&Lt; <span class="screen-reader-text">Précédent</span>',
        'next_text' => '&Gt; <span class="screen-reader-text">Suivant</span>',
    )); ?>
</div>
