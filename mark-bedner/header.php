<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mark_Bedner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5NQ7FM2');</script>
    <!-- End Google Tag Manager -->

    
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php header_theming_updates(); ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NQ7FM2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<!-- Front Page Preloader -->
<?php if(is_front_page()): 

get_template_part('/includes/pages/preloader');
	
endif; ?>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mark-bedner' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation mobile-hide">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

				<a href="tel:+17034772608" class="tel"><i class="fa fa-phone"></i></a>
			</nav><!-- #site-navigation -->
			<div class="mobile-icon-container mobile-only">
				<a href="tel:+17034772608" class="tel"><i class="fa fa-phone"></i></a>
				<a href="/contact-mark" class="em"><i class="fa fa-envelope"></i></a>
			</div>
		</div>
	</header><!-- #masthead -->
