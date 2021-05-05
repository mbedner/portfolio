<?php

/**
 * Output all theme variables based on options selected in THeme Variables Options
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}


if (function_exists('get_field')) :
    // Color Variables
    $whiteColor = get_field('white_color_theme_option', 'option');
    $blackColor = get_field('black_color_theme_option', 'option');
    $primaryColor = get_field('primary_color_theme_option', 'option');
    $secondaryColor = get_field('secondary_color_theme_option', 'option');
    $tertiaryColor = get_field('tertiary_color_theme_option', 'option');
    $fontColor = get_field('primary_font_color_theme_option', 'option');

    // Font Size Variables
    $paragraphSize = get_field('paragraph_size_theme_option', 'option');
    $h1Size = get_field('h1_size_theme_option', 'option');
    $h2Size = get_field('h2_size_theme_option', 'option');
    $h3Size = get_field('h3_size_theme_option', 'option');
    $h4Size = get_field('h4_size_theme_option', 'option');
    $h5Size = get_field('h5_size_theme_option', 'option');
    $h6Size = get_field('h6_size_theme_option', 'option');
    $h1MobileSize = get_field('mobile_h1_size_theme_option', 'option');
    $h2MobileSize = get_field('mobile_h2_size_theme_option', 'option');
    $h3MobileSize = get_field('mobile_h3_size_theme_option', 'option');

    // Font Variables
    $headerFont = get_field('header_font_theme_option', 'option');
    $headerFontWeight = get_field('headline_font_weight_theme_option', 'option');
    $paragraphFont = get_field('body_font_theme_option', 'option');

    // output styles
    $styleOutput = '<style>';
    $styleOutput .= ':root {';
    $styleOutput .= '--white: ' . $whiteColor . ';';
    $styleOutput .= '--black: ' . $blackColor . ';';
    $styleOutput .= '--primary-color: ' . $primaryColor . ';';
    $styleOutput .= '--secondary-color: ' . $secondaryColor . ';';
    $styleOutput .= '--tertiary-color: ' . $tertiaryColor . ';';

    $styleOutput .= '--p-size: ' . $paragraphSize . ';';
    $styleOutput .= '--h1-size: ' . $h1Size . ';';
    $styleOutput .= '--h1-mobile-size: ' . $h1MobileSize . ';';
    $styleOutput .= '--h2-size: ' . $h2Size . ';';
    $styleOutput .= '--h2-mobile-size: ' . $h2MobileSize . ';';
    $styleOutput .= '--h3-size: ' . $h3Size . ';';
    $styleOutput .= '--h23-mobile-size: ' . $h3MobileSize . ';';
    $styleOutput .= '--h4-size: ' . $h4Size . ';';
    $styleOutput .= '--h5-size: ' . $h5Size . ';';
    $styleOutput .= '--h6-size: ' . $h6Size . ';';
    $styleOutput .= '--h-font-weight: ' . $headlineFontWeight . ';';
    $styleOutput .= '--h-font: ' . $headerFont . ';';
    $styleOutput .= '--p-font: ' . $paragraphFont . ';';

    // variables custom for theme
    if (have_rows('custom_variable_fields_theme_option', 'option')) :
        while (have_rows('custom_variable_fields_theme_option', 'option')) : the_row();
            $variableName = get_sub_field('variable_name_theme_option');
            $variableProperty = get_sub_field('property_value_theme_option');
            $styleOutput .= '--' .$variableName . ': ' . $variableProperty . ';';
        endwhile;
    endif;

    $styleOutput .= '}';
    $styleOutput .= '</style>';

    echo $styleOutput;

endif;
