<?php if ( get_field( 'turn_on_mobile_footer', 'option' ) == 1 ) : ?>
    <!--Mobile Footer Active-->
        <?php
            // Check rows exists.
            if( have_rows('footer_links', 'option') ): ?>
            <footer class="mobile-only">
                <ul class="mobile-footer__link-container mobile-only-grid">
                <?php // Loop through rows.
                    while( have_rows('footer_links', 'option') ) : the_row();

                        // Load sub field value.
                        $footer_item_title = get_sub_field('footer_link_title', 'option');
                        $footer_item_link = get_sub_field('footer_link', 'option'); ?>

                        <a href="<?php echo $footer_item_link; ?>"><li class="footer-item"><?php echo $footer_item_title; ?></li></a>

                    <?php // End loop.
                    endwhile; ?>
                </ul>
            </footer>
        <?php endif;?>
<?php endif; ?>