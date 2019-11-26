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