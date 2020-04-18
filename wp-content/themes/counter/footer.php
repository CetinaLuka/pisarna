<?php
/**
 * The template for displaying the footer
 *
 * @package Counter
 */

?>
		</div><!-- #content -->
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_template_part( 'template-parts/widgets-footer' );  if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>

		<div class="site-info">

			<?php counter_footer_text(); ?>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
