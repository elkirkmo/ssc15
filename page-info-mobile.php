<?php
/**
 * Template Name: Info Page (Mobile)
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
			 <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
		<div class="swiper-container">
			<div class="pagination">
			</div>
  <div class="swiper-wrapper">
      <!--First Slide-->
      <div class="swiper-slide info"> 

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop.  ?>
      </div>	 
       <div class="swiper-slide"> 
	<article id="post-<?php the_ID(); ?>" <?php post_class("bio"); ?>>
		<header class="entry-header">
			 <h1 class="entry-title"><?php echo get_field('koch_bio_header'); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php echo get_field('koch_bio_body'); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
       </div>
        <div class="swiper-slide"> 
	<article id="post-<?php the_ID(); ?>" <?php post_class("qualifying-races"); ?>>
		<header class="entry-header">
			 <h1 class="entry-title"><?php echo get_field('qualifying_races_header'); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php echo get_field('qualifying_races_body'); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
        </div>
         <div class="swiper-slide"> 
	<article id="post-<?php the_ID(); ?>" <?php post_class("applications"); ?>>
		<header class="entry-header">
			 <h1 class="entry-title"><?php echo get_field('application_header'); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php echo get_field('application_body'); ?>
			<?php
				if ( !is_user_logged_in() ) {
						echo 'Please log in or create an account to apply.<br/>';
						echo '<a href="'. get_field('login_link').'" class="button">Log in or Create Account</a>';
					} else {
						echo 'Click on one of the options below to start the application process.';
						$eventid = get_field('event_shortcode');
						echo $eventid;
					}
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
				 <div class="swiper-slide"> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
