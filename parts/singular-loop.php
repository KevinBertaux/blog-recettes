<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <article class="post">
            <header class="post-header">
                <div class="container">
                    <figure class="post-header-illustration">
                        <?php the_post_thumbnail('image-blog', ['class' => 'post-header-img']); ?>
                    </figure>
                    <div class="post-header-content">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <ul class="post-meta-list">
                            <li class="post-meta-item date">Article publié le 6 septembre 2021</li>
                            <li class="post-meta-item quantity">dans <a href="category.html">Tips</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <section class="post-content">
                <div class="container container-narrow">
                <?php the_content(); ?>
                </div>
            </section>
        </article>
    <?php }
} ?>

