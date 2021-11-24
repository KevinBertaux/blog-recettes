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
                            <li class="recipe-terms-item">
                                <a href="recipe-list-category.html" class="recipe-terms-link">Soupe</a>
                            </li>
                            <li class="recipe-terms-item">
                                <a href="recipe-list-category.html" class="recipe-terms-link">Asiatique</a>
                            </li>
                        </ul>
                        <div class="recipe-ingredients-content">
                            <h2>Ingrédients</h2>
                            <ul class="recipe-ingredients-list">
                                <li class="recipe-ingredients-item">2 kg d’os de boeuf détaillés en petits morceaux</li>
                                <li class="recipe-ingredients-item">1 morceau d’environ 250 g d’aiguillette de boeuf
                                </li>
                                <li class="recipe-ingredients-item">2 ciboules chinoises (à défaut, 2 oignons et 6 tiges
                                    de
                                    persil plat)
                                </li>
                                <li class="recipe-ingredients-item">5 cm de racine de gingembre frais</li>
                                <li class="recipe-ingredients-item">2 étoiles de badiane (anis)</li>
                                <li class="recipe-ingredients-item">Gros sel</li>
                                <li class="recipe-ingredients-item">10 grains de poivre noir</li>
                                <li class="recipe-ingredients-item">500 g de nouilles plates de riz</li>
                                <li class="recipe-ingredients-item">½ bouquet de coriandre fraîche</li>
                                <li class="recipe-ingredients-item">½ bouquet de menthe fraîche</li>
                                <li class="recipe-ingredients-item">4 tiges de basilic chinois (ou à défaut 4 cuillères
                                    à café
                                    de basilic traditionnel, haché)
                                </li>
                                <li class="recipe-ingredients-item">2 citrons verts</li>
                                <li class="recipe-ingredients-item">1 petit piment frais (ou à défaut 1 cuillère à café
                                    de purée
                                    de piment)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <section class="recipe-steps">
                <div class="container">
                    <h2>Préparation</h2>
                    <ol class="recipe-steps-list">
                        <li class="recipe-steps-item">Disposer les os de bœuf dans un grand faitout. Les recouvrir de 4
                            litres
                            d’eau froide. Porter à ébullition sur feu doux, en écumant régulièrement la surface.
                        </li>
                        <li class="recipe-steps-item">Y ajouter les ciboules entières, le gingembre épluché et coupé en
                            fines
                            lamelles et la badiane.
                        </li>
                        <li class="recipe-steps-item">Assaisonner avec le gros sel et ajouter les grains de poivre.</li>
                        <li class="recipe-steps-item">Laisser mijoter, à feu doux, en couvrant partiellement le faitout,
                            pendant
                            4 heures.
                        </li>
                        <li class="recipe-steps-item">En fin de cuisson, filtrer le bouillon à l’aide d’un chinois ou
                            d’un
                            tamis. Le laisser refroidir, puis en congeler la moitié (qui pourra servir de base pour la
                            préparation de nombreuses autres recettes) et remettre l’autre moitié à bouillir.
                        </li>
                        <li class="recipe-steps-item">Hacher ensuite finement la moitié des feuilles de menthe, de
                            coriandre et
                            de basilic. Réserver le restant des herbes fraîches pour la présentation finale.
                        </li>
                        <li class="recipe-steps-item">Couper le petit piment en deux, dans le sens de longueur, et en
                            retirer
                            les graines. Emincer ensuite sa chair en fines rondelles. Disposer ce hachis dans une petite
                            coupelle.
                        </li>
                        <li class="recipe-steps-item">Détailler ensuite la viande de bœuf en lamelles, et rajouter
                            celles-ci au
                            bouillon chaud.
                        </li>
                        <li class="recipe-steps-item">Cuire séparément les nouilles de riz dans une casserole d’eau
                            bouillante
                            salée pendant 3 à 5 mn. Les égoutter en fin de cuisson.
                        </li>
                        <li class="recipe-steps-item">Répartir les nouilles dans le fond de 4 bols de service. Y ajouter
                            les
                            herbes ciselées. Y ajouter les lamelles de bœuf prélevées dans le bouillon à l’aide d’une
                            écumoire,
                            puis verser par-dessus le bouillon bouillant.
                        </li>
                        <li class="recipe-steps-item">Servir en accompagnement le restant des herbes dans des coupelles,
                            à
                            ajouter selon les envies de chacun.
                        </li>
                        <li class="recipe-steps-item">Servir bien chaud et rapidement.</li>
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
