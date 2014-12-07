<?php
/**
 * Template Name: Login page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssc15
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<header class="my-account ">
					<h2 class="active">Create Account</h2>
					<h2>Log In</h2>
				</header>
		<div class="log-in-left my-account-section active">
			
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page-log-in' ); ?>

		<?php endwhile; // end of the loop. ?>			
		
		<?php echo do_shortcode('[wppb-register]'); ?>
		
		</div>		
		<div class="log-in-right my-account-section">
			<h2>Already Registered? Log in Here</h2>
			<?php echo do_shortcode('[wppb-login]'); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
