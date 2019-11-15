<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */ 

 // take look at get_the_post_thumbnail_url()

?>
<?php 
if(is_front_page( )):
	if ( has_post_thumbnail() ) : 
	?>
		 <div class='hero-banner' style='background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;'>
			<!-- output the white circle logo for the front-page -->
		</div>
	<?php
	endif;
endif;

if(is_page('about')):
	if ( has_post_thumbnail() ) : 
	?>
		 <div class='hero-banner' style='background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;'>
			<h2 class="hero-banner-title"><?php echo get_the_title(); ?></h2>
		</div>
	<?php
	endif;
endif;
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
			
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
