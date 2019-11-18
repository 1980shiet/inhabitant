<?php
/**
 * The template for home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

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
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>

			<section class="fp-journal-section">
				<h2>Inhabitent Journal</h2>
				<?php
				$args = array('post_type'=> 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
				$posts_query = get_posts( $args );
				?>
				<div class="fp-journals">
					<?php foreach ( $posts_query as $post ) : setup_postdata($post) ?>
						<article class="fp-journal">
							<?php the_post_thumbnail('medium'); ?>
							<h3><?php the_title();?></h3>
							<a href="<?php echo get_the_permalink(); ?>">Read Entry</a>
						</article>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
			
			<section class="latest-advens">
				<h2>Latest Adventures</h2>
				<?php
				$args = array('post_type'=> 'Adventure_Type', 'order' => 'ASC', 'posts_per_page' => 4 );
				$Adventure_type_query = get_posts( $args );
				?>
				<div class="latest-adven-posts">
					<?php foreach ( $Adventure_type_query as $post ) : setup_postdata($post) ?>
						<article class="latest-adven">
							<?php the_post_thumbnail('large'); ?>
							<div class="adventure-meta">
								<h3><?php the_title();?></h3>
								<a href="<?php echo get_the_permalink(); ?>">Read Entry</a>
							</div>
						</article>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
				
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
