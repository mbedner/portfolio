<?php
/**
 * The template for displaying all portfolio posts
 *
 * This is the template that displays all porfolio posts by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mark_Bedner
 */

get_header();
?>

<?php get_template_part('/includes/pages/hero-default'); ?>

	<main id="primary" class="site-main bg--white shadowed">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'portfolio' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	<?php get_template_part('/includes/pages/footer-cta'); ?>
	</main><!-- #main -->

<?php
get_footer();
