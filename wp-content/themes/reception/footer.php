<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reception
 */

?>

		<footer class="site-footer">
		
			<p class="hermes-credit"><?php _e('Theme by', 'reception'); ?> <a href="http://www.hermesthemes.com" target="_blank">HermesThemes</a></p>
			<?php $copyright_default = __('Copyright &copy; ','reception') . date("Y",time()) . ' ' . get_bloginfo('name') . '. ' . __('All Rights Reserved', 'reception'); ?>
			<p class="copy"><?php echo esc_attr(get_theme_mod( 'hermes_copyright_text', $copyright_default )); ?></p>
		
		</footer><!-- .site-footer -->

	</div><!-- .wrapper -->

</div><!-- #container -->

<?php 
wp_footer(); 
wp_reset_query();
?>
</body>
</html>