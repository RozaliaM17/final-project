<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DX Gutenberg
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php // DXCheck is used to monitor our sites with our internal tools. Remove this if you don't need it ?>
<meta property="autocheck:online" content="true" />

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Replace on a sunny day: -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
/**
 * Execute wp_body_open() but with backwards compatibility.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_body_open/
 */
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dxgutenberg' ); ?></a>

	<div class="header-placeholder"></div>

	<header id="masthead" class="site-header">
		<div class="header-top-container">
			<div class=" site-header-inner">
				<div class="logo-container__top"></div>
				<div class="top-container__wraper">
					<div class="header-contact header-contact-email">
						<i class="fas fa-envelope-open-text"></i>
						<span class="header-contact__text">youremail@gmail.com</span>
					</div>
					<div class="header-contact header-contact-phone">
						<i class="fa-solid fa-mobile-screen-button"></i>
						<span class="header-contact__text">(671) 555-0110</span>
					</div>
				</div>
			</div>
		</div>
		<div class=" header-bottom-container">
			<div class=" site-header-inner">
				<div class="logo-container">
					<?php the_custom_logo(); ?>
					<div class="logo-text">
						<h1 class="site-title"><a class="site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<span class="site-subtitle"><a class="site-subtitle__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></span>
					</div>
				</div>
				<div class="navigation-wraper">
					<nav class="desktop-navigation-container">
						<?php wp_nav_menu( array(
							'name' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul class="navigation-list"> %3$s</ul>'
						) ) ?>
						<?php wp_nav_menu( array(
							'name' => 'main-right-menu',
							'container' => '',
							'theme_location' => 'main-right-menu',
							'items_wrap' => '<div class="button-container"> %3$s</div>'
						) ) ?>
					</nav>
				<!-- Mobile hamburger menu -->
					<?php if ( has_nav_menu( 'mobile-menu' ) ) { ?>
						<button class="menu-toggle-button">
							<i class="fa-solid fa-bars"></i>
						</button>
					<?php } ;?>
				</div>
			</div>
		</div>
		<nav class="mobile-navigation-container">
			<?php  wp_nav_menu( array(
			      'depth' => 6,
			      'sort_column' => 'menu_order',
			      'container' => 'ul',
			      'menu_class' => 'nav mobile-menu',
			      'theme_location' => 'mobile-menu'
			    ) ); 
			;?>
			<div class="button-container mobile-button-container">
				<button class="base-button mobile-base-button" type="button">Sign in</button>
			</div>
		</nav>
	</header><!-- #site-header -->

	<div id="content" class="site-content">
