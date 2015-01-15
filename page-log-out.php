<?php
/**
 * Template name: My Account
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssc15
 */

get_header();

 ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<header class="my-account ">
					<h2 class="active"> View Progress</h2>
					<h2>Edit Profile</h2>
				</header>
			<div id="view_profile" class="left view-profile my-account-section active">
				<h3>Hi, <?php echo the_author_meta('first_name', $current_user->ID ); ?>!</h3>
					<ul class="reg-complete">
						<h2>The following items have been completed</h2>
						<li>Registration Form</li>
						<li>Medical Form</li>
					</ul>			
					<ul class="reg-incomplete">
						<h2>The following items still need to be completed</h2>
						<li>Payment</li>
						<li>Create Login</li>				
					</ul>
					<a href="<?php echo wp_logout_url('index.php'); ?>" class="logout button" title="Logout">Logout From Site</a>
			</div>
			<div id="edit_profile" class="right edit-profile my-account-section">
	            <?php //echo do_shortcode('[pie_register_forgot_password]'); ?>
	            
	            		<?php if ( have_posts() ) : ?>

			<?php ssc15_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
			</div>
			
			
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
