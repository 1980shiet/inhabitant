<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

		  <footer id="colophon" class="site-footer" role="contentinfo">
			<div class="contact-info">
				<h3>Contact Info</h3>
				<p><i class="fas fa-envelope"></i><a href="info@inhabitent.com">info@inhabitent.com</a></p>
				<p><i class="fas fa-phone-alt"></i>778-465-7891</p>
				<p><i class="fab fa-facebook-square"></i><i class="fab fa-twitter-square"></i><i class="fab fa-google-plus-square"></i></p>	
			</div>
			<div class="business-hours">
				<h3>Business Hours</h3>
				<p>Monday-Friday: 9am to 5pm</p>
				<p>Sat: 10am to 2pm</p>
				<p>Sun: Closed</p>
			</div>

			<div class= "footer-image">
			<img class="header-logo" src = "<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg">
			</div>

				<div class="site-info">
			    <p>COPYRIGHT &copy 2019 INHABITENT</p>
			</div><!-- .site-info -->
		  </footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
