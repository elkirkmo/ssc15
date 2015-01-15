<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ssc15
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script> -->

 <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style/idangerous.swiper.css">
 <script src="https://platform.twitter.com/widgets.js"></script>
 <script defer src="<?php bloginfo('template_directory');?>/js/idangerous.swiper.js"></script>
<?php wp_head(); 
	add_filter('show_admin_bar', '__return_false');	
?>
<?//overriding the adminbar css bug ?>
<style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0px !important; }
		* html body { margin-top: 0px !important; }
	}
</style>
</head>

<body <?php body_class(); ?>>
	<nav id="mobile_navigation" class="mobile-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
	</nav><!-- #mobile_navigation -->
<div id="page" class="hfeed site">
	<div id="contentLayer" style="display: none;"></div>
	<div class="hamburger-menu">
		<a></a>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<div class="sponsors">
			<ul>
				<li><?php the_field('sponsor_logo_header')?></li>
				<li><?php the_field('venue_logo_header')?></li>
			</ul>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'ssc15' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
