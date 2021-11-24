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
                the_post();
                $illustrations = get_field('recette_illustrations'); ?>
                <article class="card">
                    <img src="<?php echo $illustrations['recette_image_primary']; ?>" class="card-illustration">
                    <ul class="card-terms-list">
                        <?php foreach (get_the_terms(get_the_id(), 'recipetype') as $t) {
                            $taxo = $t->name; ?>
                            <li class="card-terms-item">
                            <a href="<?php echo site_url() . '/recipetype/' . strtolower($taxo) ?>"
                               class="card-terms-link"><?php echo $taxo; ?></a>
                            </li><?php
                        } ?>
                    </ul>
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <ul class="card-meta-list">
                        <li class="card-meta-item"><?php the_field('recette_temps'); ?></li>
                        <li class="card-meta-item"><?php the_field('recette_portions'); ?></li>
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

