<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package brasserie
 * @since brasserie 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer_container">

        </div><!-- footer container -->
        <div class="site-info">
            <?php _e('rosa villa guest house','brasserie'); ?><a href="https://madhawa-se.github.io/">
            <?php echo __( ' | © 2017 developed at zeros lab', 'brasserie' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
    <a href="#top" id="smoothup"></a>
</div><!-- #page .hfeed .site -->
</div><!-- end of wrapper -->
<?php wp_footer(); ?>
</body>
</html>