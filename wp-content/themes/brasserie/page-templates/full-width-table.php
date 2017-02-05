<style>
	.card {
		border: 1px solid #B1B1B1;
		margin-bottom: 50px;
		padding: padding: ;
		padding: 50px;
		border-radius: 10px;
		max-width: 400px;
		border: 1px solid #EFEFEF;
		border-radius: 0.2em;
		-webkit-box-shadow: 0 5px 12px rgba(0, 0, 0, 0.06);
		box-shadow: 0 5px 12px rgba(0, 0, 0, 0.06);
	}
	
	.card .pac-title {
		background-color: #f55353;
		padding: 10px;
		color: #fff;
		border-radius: 10px;
	}
	
	.card .pac-price p {
		font-size: 50px;
		margin: 0px;
		color: #020202;
	}
</style>
<?php

/*
 * Template Name: Full Width Table
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
			<h3>
				<?php the_title(); ?>
			</h3>
		</div>
		<div class="section group">
		<?php if(!empty(get_theme_mod('mad_pricing_block1_title', ''))){?>
			<div class="col span_1_of_3  box-one animated slideInLeft">
				<div class="card">
					<h2 class="pac-title" style="background-color:<?php echo get_theme_mod('mad_pricing_block1_color', '#F55353'); ?>">
					<?php echo get_theme_mod('mad_pricing_block1_title', 'Plan Title'); ?></h2>
					<div class="pac-price">
						<P>RS.<?php echo get_theme_mod('mad_pricing_block1_price', '1000'); ?></P>
					</div>
					<div class="pac-det">

						<P><?php echo get_theme_mod('mad_pricing_block1_description', 'description'); ?></P>

					</div>
				</div>
			</div>
			<?php }?>
			
			<?php if(!empty(get_theme_mod('mad_pricing_block2_title', ''))){?>
			<div class="col span_1_of_3  box-one animated slideInLeft">
				<div class="card">
					<h2 class="pac-title" style="background-color:<?php echo get_theme_mod('mad_pricing_block1_color', '#F55353'); ?>">
					<?php echo get_theme_mod('mad_pricing_block2_title', 'Plan Title'); ?></h2>
					<div class="pac-price">
						<P>RS.<?php echo get_theme_mod('mad_pricing_block2_price', '1000'); ?></P>
					</div>
					<div class="pac-det">

						<P><?php echo get_theme_mod('mad_pricing_block2_description', 'description'); ?></P>

					</div>
				</div>
			</div>
			<?php }?>
			
			
			<?php if(!empty(get_theme_mod('mad_pricing_block3_title', ''))){?>
			<div class="col span_1_of_3  box-one animated slideInLeft">
				<div class="card">
					<h2 class="pac-title" style="background-color:<?php echo get_theme_mod('mad_pricing_block3_color', '#F55353'); ?>">
					<?php echo get_theme_mod('mad_pricing_block3_title', 'Plan Title'); ?></h2>
					<div class="pac-price">
						<P>RS.<?php echo get_theme_mod('mad_pricing_block3_price', '1000'); ?></P>
					</div>
					<div class="pac-det">

						<P><?php echo get_theme_mod('mad_pricing_block3_description', 'description'); ?></P>

					</div>
				</div>
			</div>
			<?php }?>

		</div>

	</div>
	<!-- #content .site-content -->

</div> <!-- #primary .content-area -->



<?php get_footer(); ?>