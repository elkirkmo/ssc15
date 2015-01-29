<?php
/**
 * Template Name: Contact Us
 *
 *This will show the Contacts in order. You can edit the individual contacts by editing content-page
 *
 * @package ssc15
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				$query = new WP_Query( array('post_type' => 'contact_posts', 'posts_per_page' => 10, 'order' => 'ASC' ) );
				while ( $query->have_posts() ) : $query->the_post(); ?>
				
					<?php get_template_part( 'content', 'single-contact_posts' ); ?>
					
				<?php endwhile; wp_reset_postdata();?>
<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
