<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mark_Bedner
 */

?>

	<footer id="colophon" class="site-footer mobile-hide">
		<div class="site-info">
			<div class="footer-logo footer-flex-item">
				<a href="/"><img src="https://mark-bedner.com/wp-content/uploads/2020/12/BW-logo.svg" alt="black and white logo" /></a>
			</div>
			<nav id="footer-navigation" class="footer-navigation footer-flex-item gsap-trigger">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="footer-icons footer-flex-item">
			<a href="tel:+17034772608" class="tel footer-icon"><i class="fa fa-phone"></i></a>
			<a href="https://www.linkedin.com/in/mark-bedner-12413294/" target="_blank" class="linkedin footer-icon"><i class="fa fa-linkedin"></i></i></a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php get_template_part('/includes/pages/footer-mobile'); ?>

</div><!-- #page -->
 <a href="/contact-mark" class=" footer-contact mobile-hide"> <i class="fa fa-envelope"></i> </a> <!-- contact button -->
<?php wp_footer(); ?>
</body>
</html>
