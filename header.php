<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
	<!-- As a link -->
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#">Deno</a>

	</nav>	
<?php echo do_shortcode('[slick-slider]'); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
