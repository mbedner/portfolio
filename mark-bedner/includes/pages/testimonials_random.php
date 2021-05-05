<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Output Random Testimonial
 * 
 * @requires Include Testimonial Repeater in Theme options to be checked
 */

    $testimonialsRandomHTML = ' ';

// get rows into variable
$testimonialsRows = get_field('testimonials_repeater', 'option');

if ($testimonialsRows) :

    shuffle($testimonialsRows);
    $i = 0;

    $testimonialsRandomHTML .= '<div id="testimonial">';
    $testimonialsRandomHTML .= '<div class="content-container testimonial__container">';

    foreach ($testimonialsRows as $testimonial) :
        if ($i > 0) :
            break;
        endif;

        $testimonialsQuote = $testimonial['testimonial_quote_default'];
        $testimonialsAttr  = $testimonial['testimonial_attribution_default'];
        $testimonialsTitle = $testimonial['testimonial_attribution_title_company_default'];

        $testimonialsRandomHTML .= '<p class="testimonial__quote">' . $testimonialsQuote . '</p>';
        $testimonialsRandomHTML .= '<div>';
        $testimonialsRandomHTML .= '<p class="testimonial__attr">' . $testimonialsAttr . '</p>';
        $testimonialsRandomHTML .= '<p class="testimonial__title"> — ' . $testimonialsTitle . '</p>';
        $testimonialsRandomHTML .= '</div>';
    
        $i++;
    endforeach;

    $testimonialsRandomHTML .= '</div>';
    $testimonialsRandomHTML .= '</div>';

endif;

echo $testimonialsRandomHTML;