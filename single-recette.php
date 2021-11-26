<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <article class="recipe">
            <header class="recipe-header">
                <div class="container">
                    <?php $illustrations = get_field('recette_illustrations'); ?>
                    <div class="recipe-header-img">
                        <?php
                        echo wp_get_attachment_image(
                            $illustrations['recette_image_primary'],
                            'image_recipe',
                            'false',
                            ['class' => 'recipe-illustration']
                        );
                        ?>
                    </div>
                    <?php
                    if ($illustrations['recette_image_secondary']) { ?>
                        <div class="recipe-header-img">
                            <?php
                            echo wp_get_attachment_image(
                                $illustrations['recette_image_secondary'],
                                'image_recipe',
                                'false',
                                ['class' => 'recipe-illustration']
                            );
                            ?>
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
                        <?php
                        $fr1 = get_field('featured_recipe_1');
                        if ($fr1) {
                            $permalink1 = get_permalink($fr1->ID);
                            ?>
                            <article class="card">
                                <?php
                                echo wp_get_attachment_image(
                                    get_field('recette_illustrations',
                                        $fr1->ID)['recette_image_primary'],
                                    'card-blog',
                                    'false',
                                    ['class' => 'card-illustration']
                                );
                                ?>
                                <ul class="card-terms-list">
                                    <?php foreach (get_the_terms($fr1->ID, 'recipetype') as $t) {
                                        $taxo = $t->name; ?>
                                        <li class="card-terms-item">
                                        <a href="<?php echo site_url() . '/recipetype/' . strtolower($taxo) ?>"
                                           class="card-terms-link"><?php echo $taxo; ?></a>
                                        </li><?php
                                    } ?>
                                </ul>
                                <h3 class="card-title"><?php echo $fr1->post_title ?></h3>
                                <ul class="card-meta-list">
                                    <li class="card-meta-item"><?php echo get_field('recette_temps', $fr1->ID); ?></li>
                                    <li class="card-meta-item"><?php echo get_field('recette_portions', $fr1->ID); ?></li>
                                </ul>
                                <a href="<?php echo esc_url($permalink1); ?>" class="card-link">Voir la recette</a>
                            </article>
                        <?php } else {
                            echo 'NOPE 1';
                        } ?>

                        <?php
                        $fr2 = get_field('featured_recipe_2');
                        if ($fr2) {
                            $permalink2 = get_permalink($fr2->ID);
                            ?>
                            <article class="card">
                                <?php
                                echo wp_get_attachment_image(
                                    get_field('recette_illustrations',
                                        $fr2->ID)['recette_image_primary'],
                                    'card-blog',
                                    'false',
                                    ['class' => 'card-illustration']
                                );
                                ?>
                                <ul class="card-terms-list">
                                    <?php foreach (get_the_terms($fr2->ID, 'recipetype') as $t) {
                                        $taxo = $t->name; ?>
                                        <li class="card-terms-item">
                                        <a href="<?php echo site_url() . '/recipetype/' . strtolower($taxo) ?>"
                                           class="card-terms-link"><?php echo $taxo; ?></a>
                                        </li><?php
                                    } ?>
                                </ul>
                                <h3 class="card-title"><?php echo $fr2->post_title ?></h3>
                                <ul class="card-meta-list">
                                    <li class="card-meta-item"><?php echo get_field('recette_temps', $fr2->ID); ?></li>
                                    <li class="card-meta-item"><?php echo get_field('recette_portions', $fr2->ID); ?></li>
                                </ul>
                                <a href="<?php echo esc_url($permalink2); ?>" class="card-link">Voir la recette</a>
                            </article>
                        <?php } else {
                            echo 'NOPE 2';
                        } ?>

                        <?php
                        $fr3 = get_field('featured_recipe_3');
                        if ($fr3) {
                            $permalink3 = get_permalink($fr3->ID);
                            ?>
                            <article class="card">
                                <?php
                                echo wp_get_attachment_image(
                                    get_field('recette_illustrations',
                                        $fr3->ID)['recette_image_primary'],
                                    'card-blog',
                                    'false',
                                    ['class' => 'card-illustration']
                                );
                                ?>
                                <ul class="card-terms-list">
                                    <?php foreach (get_the_terms($fr3->ID, 'recipetype') as $t) {
                                        $taxo = $t->name; ?>
                                        <li class="card-terms-item">
                                        <a href="<?php echo site_url() . '/recipetype/' . strtolower($taxo) ?>"
                                           class="card-terms-link"><?php echo $taxo; ?></a>
                                        </li><?php
                                    } ?>
                                </ul>
                                <h3 class="card-title"><?php echo $fr3->post_title ?></h3>
                                <ul class="card-meta-list">
                                    <li class="card-meta-item"><?php echo get_field('recette_temps', $fr3->ID); ?></li>
                                    <li class="card-meta-item"><?php echo get_field('recette_portions', $fr3->ID); ?></li>
                                </ul>
                                <a href="<?php echo esc_url($permalink3); ?>" class="card-link">Voir la recette</a>
                            </article>
                        <?php } else {
                            echo 'NOPE 3';
                        } ?>
                    </div>
                </div>
            </footer>
        </article>
    <?php }
} ?>
<?php get_footer(); ?>
