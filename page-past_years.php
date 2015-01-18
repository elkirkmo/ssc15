<?php
/**
 *Template Name: Past Years
 * Template Desc: The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ssc15
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>


		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				$query = new WP_Query( array('post_type' => 'past_years_posts', 'posts_per_page' => 10, 'order' => 'ASC' ) );
				while ( $query->have_posts() ) : $query->the_post(); ?>
				
					<?php get_template_part( 'content', 'page-past_years' ); ?>
					
				<?php endwhile; wp_reset_postdata();?>
<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
