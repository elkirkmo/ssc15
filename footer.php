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
					<h6>Event sponsors:</h6>
			<ul>
				<li class="primary-sponsor"><a href="<?php the_field('sponsor_logo_link', 'option')?>" target="_blank"><img src="<?php the_field('sponsor_logo_header', 'option')?>" /></a></li>
				<li class="venue-sponsor"><a href="<?php the_field('venue_logo_link', 'option')?>" target="_blank"><img src="<?php the_field('venue_logo_header', 'option')?>" /></a></li>
			</ul>
		</div>
		<!--
<div class="site-info">
			Design and Development by <a href="http://chriskirkham.com/ck">CKMM</a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/scripts.js"></script>+

  <script src="<?php bloginfo('template_directory');?>/js/jquery.fitvids.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/jquery-scrolltofixed-min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/retina.js"></script>
</body>
</html>
