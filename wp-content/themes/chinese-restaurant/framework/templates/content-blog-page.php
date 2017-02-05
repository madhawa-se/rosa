<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="main">

    <?php do_action('chinese_before_page_content'); ?>

    <section class="kt-entry-content kt-blog-list clearfix">
        <?php if (have_posts()):while (have_posts()):the_post(); ?>

        <div class="col-md-6 matchHeight">
            <div class="kt-blog-post">
                <?php if (has_post_thumbnail()): ?>

                <div class="kt-blog-post-image">
                        <a href="<?php the_permalink(); ?>"
                           title="<?php the_title_attribute(); ?>">
                            <figure>
                                <?php
                                the_post_thumbnail('blog-image', array('class' => 'img-responsive kt-featured-img', 'alt' => get_the_title()));
                                ?>
                            </figure>

                            <div class="kt-overlay"></div>
                            </a>
                            <div class="kt-post-meta blog-list-meta clearfix">

                                <?php _e('by ', 'chinese-restaurant') . the_author(); ?>
                                | <?php echo get_the_date(get_option
                                ('date_format')); ?>

                                <div class="kt-post-meta-body">

                                    <i class="fa fa-comment"></i> <a href="<?php
                                    the_permalink();?>#comments"><?php
                                    echo
                                    comments_number(__('No comments',
                                        'chinese-restaurant'), __('1 Comment', 'chinese-restaurant'), __('% Comments',
                                        'chinese-restaurant')); ?></a>
                                    <br/>
                                    <i class="fa fa-tags"></i> <?php echo get_the_category_list(',', ''); ?>

                                </div>

                            </div>


                    </div>

                <?php
                else: ?>

                    <div class="kt-blog-post-image">
                
                        <a href="<?php the_permalink(); ?>"
                           title="<?php the_title_attribute(); ?>">
                            <?php if(get_theme_mod('chinese_no_image_upload','') != ''): ?>
                            <figure>
                                <img alt="No featured image" src="<?php echo get_theme_mod
                                ('chinese_no_image_upload',''
                                    ); ?>"/>
                            </figure>
                        <?php else: ?>
                                <figure>
                                    <img alt="no featured image" src="<?php echo get_template_directory_uri()
                                        .'/img/no-image.jpg'; ?>"/>
                                </figure>
                        <?php endif; ?>

                            <div class="kt-overlay"></div>
                        </a>
                        <div class="kt-post-meta blog-list-meta clearfix">

                            <?php _e('by ', 'chinese-restaurant') . the_author(); ?>
                            | <?php echo get_the_date(get_option
                            ('date_format')); ?>

                            <div class="kt-post-meta-body">

                                <i class="fa fa-comment"></i> <a href="<?php
                                the_permalink();?>#comments"><?php
                                    echo
                                    comments_number(__('No comments',
                                        'chinese-restaurant'), __('1 Comment', 'chinese-restaurant'), __('% Comments',
                                        'chinese-restaurant')); ?></a>
                                <br/>
                                <i class="fa fa-tags"></i> <?php echo get_the_category_list(',', ''); ?>

                            </div>

                        </div>


                    </div>


               <?php
                endif;  ?>



                    <h2 class="h1">
                        <a class="kt-article-title" href="<?php
                        the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php
                            the_title();
                            ?>
                        </a>
                    </h2>
                </div>
            </div>
            <!--kt-blog-post ends here -->
            <?php endwhile;
            else: echo 'No posts';
            endif;
            wp_reset_postdata();
            ?>
    </section>


    <div class="clearfix"></div>
    <div id="kt-pagination">

        <?php
        if (function_exists('chinese_custom_pagination')) {
            chinese_custom_pagination("", "", $paged);
        }
        ?>

    </div>
    <footer class="entry-meta-footer clearfix">

        <!-- Comments -->
        <?php if (comments_open()): ?>
            <div class="kt-comments-area">
                <?php comments_template('', true); ?>
            </div>
        <?php endif; ?>

    </footer>

    <?php
    do_action('chinese_after_post_content');
    ?>

</article>
