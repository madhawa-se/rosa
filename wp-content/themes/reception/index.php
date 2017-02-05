<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reception
 */

get_header(); ?>

<div id="main" class="clearfix">
	
	<div id="content" class="clearfix">
	
		<div class="wrapper-content">

			<?php get_template_part('loop', 'archives'); ?>

		</div><!-- .wrapper-content -->
	
	</div><!-- #content -->
	
	<?php get_sidebar(); ?>
	
</div><!-- #main -->
	
<?php get_footer(); ?>