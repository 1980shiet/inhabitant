<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section class="product-info-container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
		 </section>
		 
		<main id="main" class="product-gallery" role="main">


		


		<?php while ( have_posts() ) : the_post(); ?>
	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

		<div class="product-info">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<p class="product-price">$<?php the_field('price'); ?></p>
		</div>

</article><!-- #post-## -->


<?php endwhile; // End of the loop. ?>
				</main><!-- #main -->
	</div><!-- #primary -->
 <!-- remove sidebar once content is added -->

<?php get_footer(); ?>
