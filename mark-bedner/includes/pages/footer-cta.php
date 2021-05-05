<?php if ( get_field( 'call_to_acton_active' ) == 1 ) : ?>

    <?php get_template_part('/includes/pages/testimonials_random'); ?>

    <!--CTA Section-->
    <section id="cta" class="cta">
        <div class="content-container">
            <?php the_field( 'call_to_action_content', false, false ); ?>
        </div>
    </section>

<?php endif; ?>