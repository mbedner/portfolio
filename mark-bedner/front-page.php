<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mark_Bedner
 */

get_header();
?>

<?php get_template_part('/includes/pages/hero-fp'); ?>

<?php get_template_part('/template-parts/content', 'frontpage'); ?>

<?php
get_footer();
