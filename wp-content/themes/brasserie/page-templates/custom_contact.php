<?php
/*
 * Template Name: Custom contact Page
 * Description: A home page with slider and widgets.
 *
 * @package brasserie
 * @since brasserie 1.0
 * url=https://www.airbnb.com/?af=43720035&c=A_TC%3Dnycp3r225d%26G_MT%3Dp%26G_CR%3D93149951183%26G_N%3Dg%26G_K%3Dair%20b%20n%20b%26G_P%3D%26G_D%3Dc&atlastest5=true&gclid=Cj0KEQiA5bvEBRCM6vypnc7QgMkBEiQAUZftQGkj7hhFMRqWqTEbBHsI0soVtVOLlBndOU5o9v3kkDkaAtwu8P8HAQ
 */
get_header();
?>

<style>
	.wrapper input {
		margin-bottom: 20px;
	}
	
	.wrapper .btn {
		padding: 10px;
		min-width: 200px;
		background-color: #e43352;
		box-shadow: none;
		border: 1px solid rgba(213, 213, 213, 0);
		text-shadow: none;
		color: #f0f8ff;
	}
	
	.wrapper .mfield {
		padding: 10px;
		min-width: 300px;
	}
	
	.img-list i {
		font-size: 14px;
		width: 38px;
		height: 38px;
		border-radius: 50%;
		text-align: center;
		line-height: 35px;
		margin: 10px 15px;
		vertical-align: middle;
		border: 2px solid #62495E;
	}
	
	.img-list p {
		display: inline-block;
		vertical-align: middle;
		margin: 10px;
	}
	
	.m_template .wrap {
		width: 80%;
	}
	
	.m_template .wrap>.left,
	.m_template .wrap>.right {
		float: left;
		width: 50%;
	}
	.contact-msg{
		/*text-align: center;*/
	}
</style>







<!-- ///////////////////////////////////////////////////////// -->


<?php

get_header();
?>

<header class="entry-header">
	<div class="title-container">
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
	</div>
</header> <!-- .entry-header -->

<div id="primary_home" class="content-area">

	<div id="content" class="fullwidth" role="main">

		<div class="section_thumbnails group">
			<div class="col span_1_of_2">
				<div class="contact-det">
					<h3>Contact Details</h3>
					<div class="img-list"> <i class="fa fa-map-marker" aria-hidden="true"></i>
						<p>
							<span>
								<?php echo get_theme_mod('mad_theam_contact_address1', 'address 1'); ?><br>
								<?php echo get_theme_mod('mad_theam_contact_address2', 'address 2'); ?><br>
								<?php echo get_theme_mod('mad_theam_contact_address3', 'address 3'); ?>
							</span>
						</p>
					</div>
					<div class="img-list"> <i class="fa fa-mobile"></i>
						<p>
							<span>
								<?php echo get_theme_mod('mad_theam_contact_phone1', '+94 - xxxxxxx'); ?><br>
								<?php echo get_theme_mod('mad_theam_contact_phone2', '+94 - xxxxxxx'); ?>
							</span>
						</p>
					</div>
					<div class="img-list"> <i class="fa fa-envelope" style="font-size: 20px;"></i>
						<p>
							<span>
								<?php echo get_theme_mod('mad_theam_contact_email', 'your.email@xmail.com'); ?>
							</span>
						</p>
					</div>
				</div>
			</div>

			<div class="col span_1_of_2">
				<div class="contact-msg">
				
					<h3>Send Us a Message</h3>
				
					<?php 
				  $my_post = get_page_by_title( 'contactform', OBJECT, 'post' );
				  $contactform= $my_post->post_content;
			      echo do_shortcode("$contactform"); 
				?>
				</div>
			</div>
		</div>
		<div class="section_thumbnails group">
		<h3>Find us</h3>
		<div>
				<?php 
				  $my_post = get_page_by_title( 'map', OBJECT, 'post' );
				  $mapcode= $my_post->post_content;
			      echo do_shortcode("$mapcode"); 
				?>
			</div>
		</div>

	</div>
	<!-- #content .site-content -->

</div> <!-- #primary .content-area -->



<?php get_footer(); ?>