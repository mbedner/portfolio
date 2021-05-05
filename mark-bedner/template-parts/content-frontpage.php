<?php
/**
 * Template part for the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mark_Bedner
 */

if (!defined('ABSPATH')) {
    exit;
}

?>


<main id="main" class="site-main bg--white shadowed">

    <!--Skills Section -->
    <section id="skills" class="skills gsap-trigger">
        <div class="container container--skills">
            <?php the_field('skills_intro_front_page', false, false); ?>
        </div>
    <!--Capabilities Container -->
        <div id="capabilities" class="container">
            <div id="capability-1" class="capabilities__container gsap-fade">
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

    <section class="parallax-container mobile-hide">
        <div class="section-parallax">
            <div class="parallax-content" style="background-image: url('/wp-content/themes/mark-bedner/img/laptop.jpg');">
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="bg--gray-alt gsap-trigger">
        <div class="container container--grid-half">
            <div class="content-grid-half copy-content">
                <?php the_field( 'process_content_front_page', false, false ); ?>
            </div>
            <div class="content-grid-half process-content">
            
                <!-- Process Repeater Loop Starts -->
                <?php if( have_rows('process_list_front_page') ): ?>
                    <ul>
                    <?php // Loop through rows.
                     while( have_rows('process_list_front_page') ) : the_row();

                        // Load sub field value.
                        $process_title = get_sub_field('process_title_front_page');
                        $process_desc = get_sub_field('process_description_front_page');
                        // Do something...
                        $processLoop = '';
                        $processLoop .= '<li class="gsap-fade">';
                        $processLoop .= '<h3>' . $process_title . '</h3>';
                        $processLoop .= '<p>' . $process_desc . '</>';
                        $processLoop .= '</li>';

                        echo $processLoop;



                    // End loop.
                    endwhile;

                    // No value.
                    // else :
                    // Do something...
                    ?>

                    </ul>
                    <?php 
                endif; ?>
                <!-- Process Repeater Loop Ends -->

            </div>

        </div>

    </section>

    <section class="parallax-container">
        <div class="section-parallax">
            <div class="parallax-content" style="background-image: url('/wp-content/themes/mark-bedner/img/pexels-marc-mueller-380769.jpg');">
            </div>
        </div>
    </section>

    <!--Work Section-->
    <section id="work" class="gsap-trigger">
        <div class="section--wide bg--light-gray">
        </div>
        <div class="work-text-container">
            <p class="intro-subheading center gsap-fade">My Work</p>
            <h2 class="center gsap-fade">Just a couple of recent projects<span>.</span></h2>
        </div>

        <?php echo do_shortcode('[work-loop]'); ?>

    </section>

    <!--About Section-->
    <section id="about" class="gsap-trigger">
        <div class="container container--half">
            <div class="content-half copy-content">
                <?php the_field( 'about_content_front_page', false, false ); ?>
            </div>
            <div class="content-half img-content">
                <div class="img-container">
                    <img src="https://mark-bedner.com/wp-content/uploads/2020/12/Bedner-BW3-300x300-1.png" />
                </div>
            </div>
        </div>

        <?php echo do_shortcode('[employers-repeater]'); ?>
    </section>

<?php get_template_part('/includes/pages/footer-cta'); ?>

</main>

