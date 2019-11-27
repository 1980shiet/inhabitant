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
		<!-- <div class="item">
  <div class="item-inner">
    <div class="dots-after">
      <span>Title Here</span>
    </div>
    <div class="price">$19929220</div>
  </div>
</div> -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

		<div class="product-info">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			$<?php the_field('price'); ?>
		</div>

</article><!-- #post-## -->


<?php endwhile; // End of the loop. ?>
				</main><!-- #main -->
	</div><!-- #primary -->
 <!-- remove sidebar once content is added -->

<?php get_footer(); ?>
