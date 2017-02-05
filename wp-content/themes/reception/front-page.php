<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear. Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reception
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

?>

	<?php get_header(); ?>
	
	<div id="main" class="clearfix">
	
		<?php if ( get_option( 'show_on_front' ) == 'posts' ) {
		
			include( get_home_template() );
	
		} elseif ( get_option ( 'page_on_front' ) != get_option ( 'page_for_posts' ) ) { 
		
			get_template_part('content', 'page');
		
		}
		?>
		
	</div><!-- #main -->
		
	<?php get_footer(); ?>

<?php endif; ?>