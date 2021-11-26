<div class="container">
    <?php if (have_posts()) { ?>
        <h1 class="section-title">
            <?php
            if (get_field('blog_title', 'option')) {
                the_field('blog_title', 'option');
            } else {
                if (is_home()) {
                    single_post_title();
                } elseif (is_category()) {
                    single_cat_title('Catégorie : ');
                } elseif (is_tax()) {
                    $term = get_term(get_queried_object()->term_id);
                    echo 'Taxonomie ' . $term->taxonomy . ' : ' . $term->name;
                }
            } ?>
        </h1>
        <div class="blog-grid">
            <?php while (have_posts()) {
                the_post(); ?>
                <article class="card">
                    <?php the_post_thumbnail('card-blog', ['class' => 'card-illustration']); ?>
                    <div class="card-content">
                        <ul class="card-terms-list">
                            <?php
                            $cats = get_the_category();
                            $siteUrl = site_url();
                            foreach ($cats as $cat) {
                                echo
                                    '<li class="card-terms-item"><a href="' .
                                    $siteUrl .
                                    '/' .
                                    $cat->taxonomy .
                                    '/' .
                                    $cat->slug .
                                    '" class="card-terms-link">' .
                                    $cat->name .
                                    '</a></li>';
                            } ?>
                        </ul>
                        <h2 class="card-title">
                            <?php
                            if (get_field('short_blog_title')) {
                                the_field('short_blog_title');
                            } else {
                                the_title();
                            }
                            ?>
                        </h2>

                        <p class="card-excerpt">
                            <?php
                            if (get_the_excerpt()) {
                                echo wp_trim_words(get_the_excerpt() . ' [...]', 20, ' [...]');
                            } else {
                                echo wp_trim_words(get_the_content() . ' [...]', 20, ' [...]');
                            }
                            ?>
                        </p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="card-link">Lire l'article</a>
                </article>
            <?php } ?>
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
