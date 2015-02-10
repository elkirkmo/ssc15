<?php
/**
 * The template used for displaying page content in page-log-out.php
 *
 * @package ssc15
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="my-account ">
		<h2 class="active"> View Progress</h2>
		<h2>Edit Profile</h2>
	</header>
	<div id="view_profile" class="left view-profile my-account-section active">
		<h3>Hi, <?php global $current_user;
			      get_currentuserinfo();
			       echo $current_user->user_firstname; ?>!</h3>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'ssc15' ),
					'after'  => '</div>',
				) );
			?>
			<a href="<?php echo wp_logout_url('index.php'); ?>" class="logout button" title="Logout">Logout From Site</a>
		</div><!-- .entry-content -->
	</div>
	<div id="edit_profile" class="right edit-profile my-account-section">
		<?php echo do_shortcode(get_field("edit_profile")); ?>
	</div>
	<footer class="entry-footer">
		<?php// edit_post_link( __( 'Edit', 'ssc15' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
