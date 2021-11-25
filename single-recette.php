<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <article class="recipe">
            <header class="recipe-header">
                <div class="container">
                    <?php $illustrations = get_field('recette_illustrations'); ?>
                    <div class="recipe-header-img">
                        <?php echo wp_get_attachment_image($illustrations['recette_image_primary'], 'image_recipe', 'false', ['class' => 'recipe-illustration']); ?>
                    </div>
                    <?php
                    if ($illustrations['recette_image_secondary']) { ?>
                        <div class="recipe-header-img">
                            <?php echo wp_get_attachment_image($illustrations['recette_image_secondary'], 'image_recipe', 'false', ['class' => 'recipe-illustration']); ?>
                        </div>
                    <?php } ?>
                    <div class="recipe-header-content">
                        <h1 class="recipe-title"><?php the_title(); ?></h1>
                        <ul class="recipe-meta-list">
                            <li class="recipe-meta-item quantity"><?php the_field('recette_portions'); ?></li>
                            <li class="recipe-meta-item duration"><?php the_field('recette_temps'); ?></li>
                        </ul>
                        <ul class="recipe-terms-list">
                            <?php foreach (get_the_terms(get_the_id(), 'recipetype') as $t) {
                                $taxo = $t->name; ?>
                                <li class="recipe-terms-item">
                                <a href="<?php echo site_url() . '/recipetype/' . strtolower($taxo) ?>"
                                   class="recipe-terms-link"><?php echo $taxo; ?></a>
                                </li><?php
                            } ?>
                        </ul>

                        <div class="recipe-ingredients-content">
                            <h2>Ingrédients</h2>
                            <ul class="recipe-ingredients-list">
                                <?php
                                if (have_rows('recette_ingredients')) {
                                    while (have_rows('recette_ingredients')) {
                                        the_row();
                                        ?>
                                        <li class="recipe-ingredients-item">
                                            <?php the_sub_field('unique_ingredient'); ?>
                                        </li>
                                    <?php }
                                } else {
                                    echo('no rows found');
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <section class="recipe-steps">
                <div class="container">
                    <h2>Préparation</h2>
                    <ol class="recipe-steps-list">
                        <?php
                        if (have_rows('recette_etapes')) {
                            while (have_rows('recette_etapes')) {
                                the_row();
                                ?>
                                <li class="recipe-steps-item">
                                    <?php the_sub_field('unique_etape'); ?>
                                </li>
                            <?php }
                        } else {
                            echo('no rows found');
                        }
                        ?>
                    </ol>
                </div>
            </section>
            <footer class="related-recipes">
                <div class="container">
                    <h2>Vous pourriez aussi aimer ...</h2>
                    <div class="blog-grid">
                        <article class="card">
                            <img src="img/pho_boeuf_card.jpg" alt="Pho au boeuf" class="card-illustration">
                            <ul class="card-terms-list">
                                <li class="card-terms-item">
                                    <a href="recipe-list-category.html" class="card-terms-link">Soupe</a>
                                </li>
                                <li class="card-terms-item">
                                    <a href="recipe-list-category.html" class="card-terms-link">Asiatique</a>
                                </li>
                            </ul>
                            <h3 class="card-title">Phô au boeuf </h3>
                            <ul class="card-meta-list">
                                <li class="card-meta-item">45 min</li>
                                <li class="card-meta-item">6-8 portions</li>
                            </ul>
                            <a href="recipe.html" class="card-link">Voir la recette</a>
                        </article>
                        <article class="card">
                            <img src="img/pho_boeuf_card.jpg" alt="Pho au boeuf" class="card-illustration">
                            <ul class="card-terms-list">
                                <li class="card-terms-item">
                                    <a href="recipe-list-category.html" class="card-terms-link">Soupe</a>
                                </li>
                                <li class="card-terms-item">
                                    <a href="recipe-list-category.html" class="card-terms-link">Asiatique</a>
                                </li>
                            </ul>
                            <h3 class="card-title">Phô au boeuf </h3>
                            <ul class="card-meta-list">
                                <li class="card-meta-item">45 min</li>
                                <li class="card-meta-item">6-8 portions</li>
                            </ul>
                            <a href="recipe.html" class="card-link">Voir la recette</a>
                        </article>
                        <article class="card">
                            <img src="img/pho_boeuf_card.jpg" alt="Pho au boeuf" class="card-illustration">
                            <ul class="card-terms-list">
                                <li class="card-terms-item">
                                    <a href="recipe-list-category.html" class="card-terms-link">Soupe</a>
                                </li>
                                <li class="card-terms-item">
                                    <a href="recipe-list-category.html" class="card-terms-link">Asiatique</a>
                                </li>
                            </ul>
                            <h3 class="card-title">Phô au boeuf </h3>
                            <ul class="card-meta-list">
                                <li class="card-meta-item">45 min</li>
                                <li class="card-meta-item">6-8 portions</li>
                            </ul>
                            <a href="recipe.html" class="card-link">Voir la recette</a>
                        </article>
                    </div>
                </div>
            </footer>
        </article>
    <?php }
} ?>
<?php get_footer(); ?>
