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

        $heroSubheading = get_field('subheading_default');
        $heroHeading = get_field('headline_default'); 
        $heroBgImg = get_field( 'background_image_dafault' );
        $serviceActive = get_field( 'is_page_or_portfolio_item' );
        $servicesList = get_field('services_default'); 
        
        ?>

        

            <!-- Font Page Hero -->
        <div class="bg--gray">
            <section class="hero hero--default">
                <figure>
                    <?php if( !empty( $heroBgImg ) ): ?>
                        <img src="<?php echo esc_url($heroBgImg['url']); ?>" alt="<?php echo esc_attr($heroBgImg['alt']); ?>" />
                    <?php endif; ?>
                </figure>
                <div class="hero__content container">
                    <div class="content-container">
                        <p class="gsap-fade-in"><?php echo $heroSubheading ?></p>
                        <h1 class="gsap-fade-in"><?php echo $heroHeading ?></h1>
                        <?php 
                        if ( $serviceActive == 'Portfolio' ) : ?>
                            <p class="gsap-fade-in page-hero-services"><?php echo $servicesList ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>

    <?php endif;

endif;
