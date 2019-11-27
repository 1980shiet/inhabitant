<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="product-gallery" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content' ); ?>

<?php endwhile; // End of the loop. ?>
				</main><!-- #main -->
	</div><!-- #primary -->
 <!-- remove sidebar once content is added -->

<?php get_footer(); ?>
