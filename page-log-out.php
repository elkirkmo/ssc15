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
							
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page-log_out' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
