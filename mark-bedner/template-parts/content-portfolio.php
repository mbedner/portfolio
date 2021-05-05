<?php
/**
 * Template part for displaying portfolio content in single-portfolio.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mark_Bedner
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- Background Section -->
	<section id="portfolio-background" class="portfolio-background">
        <div class="container container--portfolio-background gsap-trigger">
            <?php the_field('portfolio_background_portfolio', false, false); ?>
        </div>
	</section>
	
<!-- Screen Image Section -->
	<section id="portfolio-feature-image" class="portfolio-feature-image" style="background-color:<?php the_field( 'background_section_background_color' ); ?>;">
        <div class="container container--portfolio-background gsap-trigger">
			<?php $background_section_image_portfolio = get_field( 'background_section_image_portfolio' ); ?>
				<?php if ( $background_section_image_portfolio ) : ?>
					<img src="<?php echo esc_url( $background_section_image_portfolio['url'] ); ?>" alt="<?php echo esc_attr( $background_section_image_portfolio['alt'] ); ?>" />
			<?php endif; ?>
        </div>
	</section>

<!-- Quick Hitters -->

	<section id="portfolio-quick-hitters" class="portfolio-quick-hitters gsap-trigger">
        <div class="container container--grid-half">
            <div class="content-grid-half copy-content">
                <?php the_field( 'quick_hitter_content_portfolio', false, false ); ?>
            </div>
            <div class="content-grid-half list-content">
				<div class="grid-list-container">
					<h3>Services Employed</h3>

				 <!-- Quick Hitter List -->
				 <?php if( have_rows('quick_hitter_list_portfolio') ):

				// Loop through rows.
				while( have_rows('quick_hitter_list_portfolio') ) : the_row();

					// Load sub field value.
					$quick_hitter_list_item = get_sub_field('quick_hitter_list_item');
					// Do something...
					$quickHitterLoop = '';
					$quickHitterLoop .= '<li class="quck-hitter-list-item">'. $quick_hitter_list_item . '</li>';

					echo $quickHitterLoop;

					// End loop.
				endwhile;

				// No value.
				else :
				// Do something...
				endif; ?>
				<!-- Process Repeater Loop Ends -->


					<?php if( get_field('site_link_portfolio') ): ?>
						<a class="portfolio-link" href="<?php echo get_field('site_link_portfolio'); ?>" target="_blank">Visit Site</a> 
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

<!-- Approach Section -->
<section id="portfolio-approach" class="portfolio-approach" style="background-color:<?php the_field( 'approach_background_color_portfolio' ); ?>;">
	<div class="container container--portfolio-approach gsap-trigger">
		<?php the_field('approach_content_portfolio', false, false); ?>
	</div>
	<div class="container container--portfolio-background gsap-trigger">
		<?php $approach_image_portfolio = get_field( 'approach_image_portfolio' ); ?>
			<?php if ( $approach_image_portfolio ) : ?>
				<img src="<?php echo esc_url( $approach_image_portfolio['url'] ); ?>" alt="<?php echo esc_attr(  $approach_image_portfolio['alt'] ); ?>" />
		<?php endif; ?>
	</div>
</section>

<!-- Outcome Section -->
<section id="portfolio-outcome" class="portfolio-outcome">
	<div class="container container--portfolio-outcome gsap-trigger">
		<?php the_field('outcome_content_portfolio', false, false); ?>
	</div>
</section>

</article><!-- #post-<?php the_ID(); ?> -->
