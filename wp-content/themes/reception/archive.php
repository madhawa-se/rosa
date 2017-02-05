<?php get_header(); ?>

<div id="main" class="clearfix">

	<div id="content" class="clearfix">
	
		<div class="wrapper-content">

			<div class="hermes-page-intro">
				<?php the_archive_title( '<h1 class="title-post">', '</h1>' ); ?>

				<?php if (category_description()) { ?>
				<div class="post-single category-description clearfix">
				
					<?php echo category_description(); ?>
					
				</div><!-- .post-single -->
		
				<?php } ?>

			</div><!-- .hermes-page-intro -->
			
			<div class="divider">&nbsp;</div>
	
			<?php get_template_part('loop'); ?>
			
		</div><!-- .wrapper-content -->
	
	</div><!-- #content -->
	
	<?php get_sidebar(); ?>
	
</div><!-- #main -->

<?php get_footer(); ?>