<?php
/*
 * Template Name: Custom Home Page
 * Description: A home page with slider and widgets.
 *
 * @package brasserie
 * @since brasserie 1.0
 * url=https://www.airbnb.com/?af=43720035&c=A_TC%3Dnycp3r225d%26G_MT%3Dp%26G_CR%3D93149951183%26G_N%3Dg%26G_K%3Dair%20b%20n%20b%26G_P%3D%26G_D%3Dc&atlastest5=true&gclid=Cj0KEQiA5bvEBRCM6vypnc7QgMkBEiQAUZftQGkj7hhFMRqWqTEbBHsI0soVtVOLlBndOU5o9v3kkDkaAtwu8P8HAQ
 */
get_header();
?>
<!-- test mad code-->
<!--  -->


<?php
// Only display if this section is marked for display in customizer	
if ( !get_theme_mod( 'hide_slider_section' ) ):

	// if slider options changed
	if ( get_theme_mod( 'brasserie_slider' ) ):
		if ( get_theme_mod( 'brasserie_slider' ) == 'flexslider' ):
			// include felxslider html
			get_template_part( 'content', 'flexslider' );
endif;

endif;

endif;
?>
<?php
// Only display if this section is marked for display in customizer		
if ( !get_theme_mod( 'hide_feature_text_boxes' ) ):

	$list_featureboxes = array(
		'one' => __( 'slideInLeft', 'brasserie' ),
		'two' => __( 'fadeInUp', 'brasserie' ),
		'three' => __( 'slideInRight', 'brasserie' ),
	);
?>
<?php
// Only display if this section is marked for display in customizer.
if ( !get_theme_mod( 'hide_promo_bar' ) ):
	?>
	<div id="featuretext_container">
		<div class="featuretext_top">
			<h3>
				<?php echo esc_html(get_theme_mod('featured_textbox')); ?>
			</h3>
			<?php if (true or get_theme_mod('featured_button_url')) : ?>
			<div onClick="mad_drop()" class="featuretext_button animated" data-fx="slideInRight">
				<p href="<?php echo esc_url(get_theme_mod('featured_button_url')); ?>">
					<?php if (get_theme_mod('featured_btn_textbox')): echo(get_theme_mod('featured_btn_textbox'));
            else: echo __('Find out more', 'brasserie');
            endif; ?>
				</p>
			</div>
			<?php endif; ?>
			<div class="featuretext_bookpanel" id="featuretext_bookpanel">
				<!-- booking panel -->
				<div class="booking-panel">
					<div class="booking-blocks">
						<h3>Date</h3>
						<p>hello world</p>
					</div>
					<div class="booking-blocks">
						<h3>select</h3>
						<div class="">
							<div class="dropdown">
								<button>select</button>
								<div class="dropdown-content">
									<div class="select-panel">

										<ul>
											<li>
												<div class="select-block">
													<div class="">
														<p>room</p>
													</div>
													<div class="select-check"></div>
													<div class="select-dis">

														<img src="https://s-media-cache-ak0.pinimg.com/736x/e1/b6/1b/e1b61b9798a2aeaf952922b84ecae791.jpg"/>
													</div>
													<br>
												</div>

											</li>
											<li>
												<div class="select-block">
													<div class="">
														<p>room</p>
													</div>
													<div class="select-check"></div>
													<div class="select-dis">

														<img src="https://s-media-cache-ak0.pinimg.com/736x/e1/b6/1b/e1b61b9798a2aeaf952922b84ecae791.jpg"/>
													</div>
													<br>
												</div>

											</li>
											<li>
												<div class="select-block">
													<div class="">
														<p>room</p>
													</div>
													<div class="select-check"></div>
													<div class="select-dis">

														<img src="https://s-media-cache-ak0.pinimg.com/736x/e1/b6/1b/e1b61b9798a2aeaf952922b84ecae791.jpg"/>
													</div>
													<br>
												</div>

											</li>
											<li>
												<div class="select-block">
													<div class="">
														<p>room</p>
													</div>
													<div class="select-check"></div>
													<div class="select-dis">

														<img src="https://s-media-cache-ak0.pinimg.com/736x/e1/b6/1b/e1b61b9798a2aeaf952922b84ecae791.jpg"/>
													</div>
													<br>
												</div>

											</li>

										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="booking-blocks">
						<h3>price</h3>
						<p>hello world</p>
					</div>

				</div>
				<!-- end booking panel -->
			</div>
		</div>
	</div>
<?php endif; ?>

<div class="featuretext_middle">
	<div class="section group">
		<div style="visibility: visible;" class="client animated fadeInUp" data-fx="fadeInUp">
			<h3>Our Gallery</h3>
		</div>
	</div>
	<div class="section group">
		<?php foreach ($list_featureboxes as $key => $value) { ?>
		<div class="col span_1_of_3  box-<?php echo $key; ?> animated" data-fx="<?php echo($value); ?>">
			<div class="featuretext">
				<?php if (get_theme_mod('header-' . $key . '-file-upload')) : ?>
				<a href="<?php echo esc_url(get_theme_mod('header_' . $key . '_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('header-' . $key . '-file-upload')); ?>"  alt="<?php echo esc_attr('feature ' . $key) ?>"></a>
				<?php else : ?>
				<?php echo '<p>' . __('Insert Image', 'brasserie') . '</p>'; ?>
				<?php endif; ?>
				<h2><a href="<?php echo esc_url(get_theme_mod('header_' . $key . '_url')); ?>"><?php echo esc_html(get_theme_mod('featured_textbox_header_' . $key)); ?></a></h2>
				<p>
					<?php echo esc_html(get_theme_mod('featured_textbox_text_' . $key)); ?>
				</p>
			</div>
		</div>

		<!-- /.col span_1_of_3 animated -->
		<?php } ?>
	</div>
	<div style="text-align: center;margin-top: -30px;margin-bottom: 100px;">
		<a class="mad_button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'gallery' ) ) ); ?>">View More → </a>
	</div>
	<!-- /.section group -->

</div> <!-- /.featuretext_middle -->
<?php endif; ?>

<?php
// Only display if this section is marked for display in customizer.
if ( !get_theme_mod( 'hide_recent_posts' ) ):
	?>

<div class="section_thumbnails group">
	<?php echo '<h3>' . __('Our Services', 'brasserie') . '</h3>'; ?>
	<?php
	$the_query = new WP_Query( array(
		'showposts' => 3,
		'category_name' => 'services',
	) );
	?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
	<div class="col span_1_of_3">
		<article class="recent animated" data-fx="fadeInUp">
			<a>
				<?php
				if ( has_post_thumbnail() ) {
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'recent' );
					echo '<img alt="post" class="imagerct_home" src="' . $image_src[ 0 ] . '">';
				}
				?>
				<div class="recent_title">
					<h2>
						<?php the_title(); ?>
					</h2>
					<p>
						<?php echo brasserie_get_recentposts_excerpt(); ?>...</p>
				</div>
			</a>
		</article>
	</div>
	<?php endwhile; ?>
</div> <!-- END section_thumbnails -->

<?php endif; ?>
<?php
// Only display if this section is marked for display in customizer.
if ( !get_theme_mod( 'hide_partner_logos' ) ):
	?>
	<div class="section_clients group">
		<div class="client animated" data-fx="fadeInUp">


			<!--
            <div class="col span_1_of_4">
                <div class="client_recent">
                    <?php if (get_theme_mod('brasserie_one_logo_upload')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('brasserie_one_company_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('brasserie_one_logo_upload')); ?>"  alt="<?php echo __('special one', 'brasserie') ?>"></a>
                    <?php else : ?>
                        <?php echo '<h4>' . __('Insert Image', 'brasserie') . '</h4>'; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="client_recent">
                    <?php if (get_theme_mod('brasserie_two_logo_upload')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('brasserie_two_company_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('brasserie_two_logo_upload')); ?>"  alt="<?php echo __('special two', 'brasserie') ?>"></a>
                    <?php else : ?>
                        <?php echo '<h4>' . __('Insert Image', 'brasserie') . '</h4>'; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="client_recent">
                    <?php if (get_theme_mod('brasserie_three_logo_upload')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('brasserie_three_company_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('brasserie_three_logo_upload')); ?>"  alt="<?php echo __('special three', 'brasserie') ?>"></a>
                    <?php else : ?>
                        <?php echo '<h4>' . __('Insert Image', 'brasserie') . '</h4>'; ?>
                    <?php endif; ?>
                </div>
            </div>
           
            <div class="col span_1_of_4">
                <div class="client_recent">
    <?php if (get_theme_mod('brasserie_four_logo_upload')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('brasserie_four_company_url')); ?>"><img src="<?php echo esc_url(get_theme_mod('brasserie_four_logo_upload')); ?>"  alt="<?php echo __('special four', 'brasserie') ?>"></a>
    <?php else : ?>
        <?php echo '<h4>' . __('Insert Image', 'brasserie') . '</h4>'; ?>
    <?php endif; ?>
                </div>
            </div>
            -->
		</div>
		<!-- .client -->
	</div> <!-- .section_clients -->
<?php endif; ?>

<!-- mad added-->
<div style="background-color: rgb(35, 40, 45)">
<div class="section group">
	<div style="visibility: visible;" class="client animated fadeInUp" data-fx="fadeInUp">
		<h3 style="color:#fff">Guest s comments</h3>
	</div>
</div>
<div class="section group">

	<div class="col span_1_of_3">
		<?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>
		<div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'brasserie') . '</h4>'; ?>
			<?php echo '<p>' . __('This left column is widget ready! Add one in the admin panel.', 'brasserie') . '</p>'; ?>
		</div>
		<?php endif; ?>
	</div>

	<div class="col span_1_of_3">
		<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
		<div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'brasserie') . '</h4>'; ?>
			<?php echo '<p>' . __('This center column is widget ready! Add one in the admin panel.', 'brasserie') . '</p>'; ?>
		</div>
		<?php endif; ?>

	</div>

	<div class="col span_1_of_3">
		<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>
		<div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'brasserie') . '</h4>'; ?>
			<?php echo '<p>' . __('This right column is widget ready! Add one in the admin panel.', 'brasserie') . '</p>'; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
</div>
<!-- mad added-->

<?php get_footer(); ?>