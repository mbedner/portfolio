<?php

/**
 *  Front Page Hero
 * 
 *  @package Mark_Bedner
 */

// Exit if accessed directly

if (!defined('ABSPATH')) {
    exit;
}
if (function_exists('get_field')) :

    $heroActive = get_field('is_hero_active');

    if ($heroActive == 1) :

        $heroBg = get_field('video_image_option_front_page');
        $heroBgVideo = get_field( 'video_background_front_page' );
        $heroBgImg = get_field('image_background_front_page');
        $heroSubheading = get_field('subheading_front_page');
        $heroHeading = get_field('headline_front_page'); ?>

        

            <!-- Font Page Hero -->
        <div class="bg--gray">
            <section class="hero hero--home">

        <?php if ($heroBg == 'Video' ) : ?>

                <video autoplay="autoplay" muted="muted" loop="loop">
                    <source type="video/mp4" src="<?php echo $heroBgVideo; ?>">
                </video>

        <?php else : ?>

                <figure>
                <?php if( !empty( $heroBgImg ) ): ?>
                    <img src="<?php echo esc_url($heroBgImg['url']); ?>" alt="<?php echo esc_attr($heroBgImg['alt']); ?>" />
                <?php endif; ?>
                </figure>

        <?php endif; ?> 

                <div class="hero__content container">
                    <div class="content-container">
                        <p class="subheading gsap-fade-in"><?php echo $heroSubheading ?></p>
                        <h1 class="gsap-fade-in"><?php echo $heroHeading ?></h1>
                        <a href="#skills" style="text-decoration: none; color: var(--font-color);">
                            <div class="circle-container gsap-fade-in">
                                <i class="fa fa-chevron-down"></i>
                                <p class="scroll-text">Scroll for more</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <?php endif;

endif;
