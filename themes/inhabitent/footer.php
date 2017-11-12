<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

		</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-info-des">
					<div class="contact-info">
						<h3>Contact Info</h3>
							<p>
							<i class="fa fa-envelope icon" aria-hidden="true"></i>
							<a href="">info@inhabitant.com</a>	
						</p>
						<p>
							<i class="fa fa-phone icon" aria-hidden="true"></i>
							<a href="">778-456-7891</a>
						</p>
					</div>
					<div class="business-hours-info">
						<h3>Business Hours</h3>
							<p><span class="date-bold">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="date-bold">Saturday:</span> 10am to 2pm</p>
							<p><span class="date-bold">Sunday:</span> Closed</p>
					</div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		

		<?php wp_footer(); ?>

	</body>
</html>
