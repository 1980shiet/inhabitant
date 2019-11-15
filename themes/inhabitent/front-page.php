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
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
