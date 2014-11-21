<?php
/**
 * Template Name: Info Page
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
		<div class="swiper-container">
  <div class="swiper-wrapper">
      <!--First Slide-->
      <div class="swiper-slide"> 

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
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			 <h1 class="entry-title"><?php echo get_field('koch_bio_header'); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php echo get_field('koch_bio_body'); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
       </div>
        <div class="swiper-slide"> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			 <h1 class="entry-title"><?php echo get_field('qualifying_races_header'); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php echo get_field('qualifying_races_body'); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
        </div>
         <div class="swiper-slide"> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			 <h1 class="entry-title"><?php echo get_field('application_header'); ?></h1>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<?php echo get_field('application_body'); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
				 <div class="swiper-slide"> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
