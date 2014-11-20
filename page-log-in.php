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
			<h2>Register for the 2015 Sea Scout Cup</h2>
			
		</div>		
		<div class="log-in-right my-account-section">
			<h2>Already Registered? Log in Here</h2>
			<?php wp_login_form( $args ); ?> 
			<?php $args = array(
			        'echo'           => true,
			        'redirect'       => site_url( '/my-account/' ), 
			        'form_id'        => 'loginform',
			        'label_username' => __( 'Username' ),
			        'label_password' => __( 'Password' ),
			        'label_remember' => __( 'Remember Me' ),
			        'label_log_in'   => __( 'Log In' ),
			        'id_username'    => 'user_login',
			        'id_password'    => 'user_pass',
			        'id_remember'    => 'rememberme',
			        'id_submit'      => 'login-submit',
			        'remember'       => true,
			        'value_username' => NULL,
			        'value_remember' => true
			); ?> 
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
