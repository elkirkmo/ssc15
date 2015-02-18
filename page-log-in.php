<?php
/**
 * Template Name: Login page
 *
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
		
		<?php echo do_shortcode('[pie_register_form]'); ?>
		<a href="#" class="login" title="Log In">Already a member? Log in here.</a>
		</div>		
		<div class="log-in-right my-account-section">
			<h2>Already Registered? Click here to log in</h2>
			<?php echo do_shortcode('[pie_register_login]'); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
