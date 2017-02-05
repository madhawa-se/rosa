<?php if (have_posts()):while (have_posts()):the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="main">

        <?php do_action('chinese_before_page_content'); ?>


        <header class="entry-header clearfix">

            <?php if (has_post_thumbnail()): ?>
                <figure>
                    <?php
                    the_post_thumbnail('chinese-page-image-col-md-8', array
                    ('class' => 'img-responsive kt-featured-img', 'alt' => get_the_title
                        ()));
                    ?>
                </figure>
            <?php endif; ?>

            <div class="kt-post-meta entry-meta clearfix">

                <?php _e('by ', 'chinese-restaurant') . the_author(); ?>
                | <?php echo get_the_date(get_option
                ('date_format')); ?>

                <div class="kt-post-meta-body">

                    <i class="fa fa-comment"></i> <?php echo comments_number(__('No comments',
                        'chinese-restaurant'), __('1 Comment', 'chinese-restaurant'), __('% Comments',
                        'chinese-restaurant')); ?>
                    <i class="fa fa-tags"></i> <?php echo get_the_category_list(',', ''); ?>

                </div>

            </div>
        </header>

        <section class="kt-entry-content clearfix">

            <?php
            the_content();
            ?>
        </section>

        <?php if(has_tag()): ?>
            <i class="fa fa-check"></i> <?php echo get_the_tag_list('',','); ?>
        <?php endif; ?>
        <div class="clearfix"></div>

        <footer class="entry-meta-footer clearfix">

            <!-- Comments -->

            <div class="kt-comments-area">
                <?php comments_template('', true); ?>
            </div>


        </footer>

        <?php
        do_action('chinese_after_post_content');
        ?>

    </article>
<?php endwhile; endif; ?>