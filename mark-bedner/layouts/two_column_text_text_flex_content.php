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
    $text_left = get_sub_field('text_content_flex_content');
    $text_right = get_sub_field('text_content_2_flex_content');
?>

<!--Two Column Text Layout-->
<section class="gsap-trigger <?php echo get_sub_field('css_classes_flex_content'); ?>">
    <div class="container container--grid-half">
        <div class="content-grid-half copy-content">
            <?php echo $text_left; ?>
        </div>
        <div class="content-grid-half copy-content">
        <?php echo $text_right; ?>
        </div>
    </div>
</section>