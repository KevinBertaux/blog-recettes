<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) { ?>
        <h1 class="section-title">
            <?php if (get_field('recipe_title', 'option')) {
                the_field('recipe_title', 'option');
            } else {
                echo get_post_type_object('recette')->labels->singular_name;
            } ?>
        </h1>
        <div class="blog-grid">
            <?php
            while (have_posts()) {
                the_post();
                $illustrations = get_field('recette_illustrations'); ?>
                <article class="card">
                    <?php echo wp_get_attachment_image($illustrations['recette_image_primary'], 'card-blog', 'false', ['class' => 'card-illustration']); ?>
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

