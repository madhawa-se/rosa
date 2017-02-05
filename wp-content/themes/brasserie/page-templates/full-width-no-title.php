<?php

/*
 * Template Name: Full Width No Title
 * Description: A Page Template with no sidebar. and big title
 *
 * @package brasserie
 * @since brasserie 1.0
 */



get_header();
?>

<header class="entry-header">
	<div class="title-container">
		<h1 class="page-title"></h1>
	</div>
</header> <!-- .entry-header -->

<div id="primary_home" class="content-area">

	<div id="content" class="fullwidth" role="main">
		<div class="section_thumbnails">
			<h3><?php the_title(); ?></h3>
		</div>


		<?php while ( have_posts() ) : the_post(); ?>



		<?php get_template_part( 'content', 'page' ); ?>



		<?php comments_template( '', true ); ?>



		<?php endwhile; // end of the loop. ?>



	</div>
	<!-- #content .site-content -->

</div> <!-- #primary .content-area -->



<?php get_footer(); ?>