<?php get_header(); ?>


    <div class="container">
        <h1><?php echo get_queried_object()->name; ?></h1>

		<?php
		$related = new WP_Query(
			array(
				'category__in'   => wp_get_post_categories( $post->ID ),
				'posts_per_page' => 5,
				'post__not_in'   => array( $post->ID )
			)
		);

		if ( $related->have_posts() ) {
			while ( $related->have_posts() ) {
				$related->the_post();
				the_title();
                echo '<br>';
			}
			wp_reset_postdata();
		}
		?>


    </div>
<?php get_footer(); ?>