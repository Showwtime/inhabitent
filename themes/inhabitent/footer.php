<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!--end of #content -->
<footer class="site-footer">
	<div class="footer-block container">
			<div class="footer-block-item">
				<div class="contact-info">
					<h3 class="uppercase">contact info</h3>
					<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com"> info@inhabitent.com</a></p>
					<p><i class="fa fa-phone"></i><a href="tel:5557784567891"> 778-456-7891</a></p>
					<p>	<span><i class="fa fa-facebook"></i></span>
						<span><i class="fa fa-twitter"></i></span>
						<span><i class="fa fa-google-plus"></i></span>
					</p>
				</div>
			</div>
			<div class="footer-block-item">
				<div class="business-hours">
					<h3 class="uppercase">business hours</h3>
					<p><span class="bold">Monday-Friday:</span> 9am to 5pm</p>
					<p><span class="bold">Saturday:</span> 10am to 2pm</p>
					<p><span class="bold">Sunday:</span> Closed</p>
				</div>
			</div>
			<div class="footer-block-item">
				<div class="company-logo">
					<a href="#" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg"></a>
				</div>
			</div>
	</div>

	<div class="container">
			<div class="copyright">
				<p class="uppercase">copyright &copy; 2018 inhabitent</p>
			</div>
	</div>
</footer>

		<!--end of .site-info -->
	
					
			<!--end of #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
