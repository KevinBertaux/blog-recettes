<?php get_header(); ?>

<h1>ARCHIVE RECETTE</h1>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
    }
} ?>

<div class="container">
    <h1>Mes recettes</h1>
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
    </div>
</div>

<?php get_footer(); ?>
