<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mark_Bedner
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php 
					// Add in ACF Flexible Content

                    $id = get_the_ID();

                    if( have_rows( 'flexible_content_layouts', $id ) ):
                        while( have_rows( 'flexible_content_layouts', $id ) ): the_row();
                        
                        $layout_name = get_row_layout();
                        get_template_part( "layouts/$layout_name" );

                        endwhile;
					endif; 
				?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'mark-bedner' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
