<?php
/**
 * The template used for displaying page content in page-contact_posts.php
 *
 * @package ssc15
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 

$image = get_field('contact_image');

if( !empty($image) ): ?>

	<img class="contact-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
		<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2 class="contact-job-title"><?php the_field('job_title')?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_field('contact_address')?>
		<div class="contact-bottom-buttons">
			<div class="contact-number contact-button">
				<a href="tel:<?php the_field("contact_country_code")?><?php the_field('contact_number'); ?>"><span class="contact-full"><?php the_field('contact_number')?></span><span class="contact-mobile">Call</span></a>
			</div>
			<div class="contact-email contact-button">
				<a href="mailto:<?php the_field('contact_email')?>"><span class="contact-full"><?php the_field('contact_email')?></span><span class="contact-mobile">Email</span></a>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php// edit_post_link( __( 'Edit', 'ssc15' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
