<?php
/**
 * The template for home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	
		<?php if ( have_posts() && is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
			<?php endif; ?>
			

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<?php
			$args = array('post_type'=> 'post', 'order' => 'ASC' );

			$posts_query = new WP_Query ( $args );
			?>
			<?php foreach ( $posts_query as $post ) : setup_postdata($post) ?>
			<?php the_title();?>

	<?php endforeach; wp_reset_postdata(); ?>

			

			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
