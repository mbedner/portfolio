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
    $text = get_sub_field('text_content_flex_content', false, false);
    $image = get_sub_field('image_content_flex_content');
    $positon_toggle = get_sub_field('image_left_or_right');
?>

<!--Two Column Text Layout-->
<section class="gsap-trigger <?php echo get_sub_field('css_classes_flex_content'); ?>">
    <div class="container container--grid-half <?php if($positon_toggle !== 'Image Left'): echo 'flex-reverse'; endif; ?>">
        <div class="content-grid-half copy-content">
            <?php echo $text; ?>
        </div>
        <div class="content-grid-half img-content">
                <div class="img-container">
                <?php if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
    </div>
</section>