<?php
/**
 * Layout For ACF Hierarchy
 *
 *
 * @package Mark_Bedner
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<?php 
// Variables 
    $text = get_sub_field('text_content_flex_content');
    $image = get_sub_field('image_content_flex_content');
    $positon_toggle = get_sub_field('image_left_or_right');
?>

<!--Three Column Section -->
<section class="gsap-trigger">
<div class="container">
<?php the_field('skills_intro_front_page', false, false); ?>
</div>

<!--Three Column Container -->
<div class="container container--three-col">
            <div class="gsap-fade">
                <figure>
                    <img src="/wp-content/uploads/2020/12/branding-icon.svg" alt="branding icon" />
                </figure>
                <div class="blurb">
                    <h3>Branding<span>.</span></h3>

                    <?php if ( have_rows( 'branding_section_front_page' ) ) : ?>
                        <?php while ( have_rows( 'branding_section_front_page' ) ) : the_row(); ?>
                            <?php the_sub_field( 'branding_content_front_page', false, false); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div id="capability-2" class="capabilities__container gsap-fade">
                <figure>
                    <img src="/wp-content/uploads/2020/12/design-icon.svg" alt="design icon" />
                </figure>
                <div class="blurb">
                    <h3>Design<span>.</span></h3>

                    <?php if ( have_rows( 'design_section_front_page' ) ) : ?>
                        <?php while ( have_rows( 'design_section_front_page' ) ) : the_row(); ?>
                            <?php the_sub_field( 'design_content_front_page', false, false); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div id="capability-3" class="capabilities__container gsap-fade">
                <figure>
                    <img src="/wp-content/uploads/2020/12/dev-icon.svg" alt="development icon" />
                </figure>
                <div class="blurb">

                    <h3>Development<span>.</span></h3>

                    <?php if ( have_rows( 'dev_section_front_page' ) ) : ?>
                        <?php while ( have_rows( 'dev_section_front_page' ) ) : the_row(); ?>
                            <?php the_sub_field( 'dev_content_front_page', false, false ); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>