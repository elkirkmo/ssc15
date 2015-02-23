<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ssc15
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="sponsors">
			<ul>
				<li class="primary-sponsor"><a href="<?php the_field('sponsor_logo_link', 'option')?>" target="_blank"><img src="<?php the_field('sponsor_logo_header', 'option')?>" /></a></li>
				<li class="venue-sponsor"><a href="<?php the_field('venue_logo_link', 'option')?>" target="_blank"><img src="<?php the_field('venue_logo_header', 'option')?>" /></a></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() );?>/js/scripts.js"></script>+

  <script src="<?php echo esc_url( get_template_directory_uri() );?>/js/jquery.fitvids.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() );?>/js/jquery-scrolltofixed-min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/retina.js"></script>
</body>
</html>
