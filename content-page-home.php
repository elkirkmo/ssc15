<?php
/**
 * The template used for displaying page content in page-home.php
 *
 * @package ssc15
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="home-video">
		<?php echo get_field('homepage_video_link'); ?>
	</div>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ssc15' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php// edit_post_link( __( 'Edit', 'ssc15' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
