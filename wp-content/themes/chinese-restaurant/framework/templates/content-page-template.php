<?php if(have_posts()):while(have_posts()):the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="main">

    <?php do_action('chinese_before_page_content'); ?>

    <div class="row">
        <div class="col-md-8">
            <section class="kt-entry-content clearfix">
                <?php if(has_post_thumbnail()): ?>
                    <figure>
                        <?php
                        the_post_thumbnail('chinese-page-image-col-md-8',array
                        ('class'=>'img-responsive kt-featured-img','alt'=>get_the_title()));
                        ?>
                    </figure>

                <?php endif; ?>

                <?php
                the_content();
                ?>
            </section>

                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'chinese-restaurant') . '</span>', 'after' => '</div>')); ?>

                <div class="clearfix"></div>

            <footer class="entry-meta-footer clearfix">

                <!-- Comments -->

                <div class="kt-comments-area">
                    <?php comments_template( '', true ); ?>
                </div>


            </footer>

            <?php
            do_action('chinese_after_post_content');
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</article>

<?php endwhile;
else: ?>
    <div class="kt-not-found">

        <?php _e('Well, it seems that nothing is here..','chinese-restaurant'); ?>
    </div>
<?php endif; ?>