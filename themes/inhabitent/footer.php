<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-container">
			<div class="contact-info">
			<h3>Contact Info</h3>
			</div>
			<p><i class="fas fa-envelope"></i><a href="info@inhabitent.com">info@inhabitent.com</a></p>
			<p><i class="fas fa-phone-alt"></i><p>778-465-7891</p>
			<div class="socialmedialogos">
			  <ul class= "footer-icons">
			  	<li><i class="fab fa-facebook-square"></i></li>
				<li><i class="fab fa-twitter-square"></i></li>
				<li><i class="fab fa-google-plus-square"></i></li>
			<div class="business-hours">
				<h3>Business Hours</h3>
				<div class="site-info">
				<p>COPYRIGHT &copy 2019 INHABITENT</p>
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
