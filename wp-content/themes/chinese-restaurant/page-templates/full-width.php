<?php
/*
 * Template Name: 100% Width
 */
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php do_action('chinese_before_main_content'); ?>

                <main id="kt-primary">

                    <div id="kt-content" class="clearfix">
                        <?php if(have_posts()):while(have_posts()):the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>

                </main>
                <?php do_action('chinese_after_main_content'); ?>
            </div>
            <!-- primary-page content ends here -->
        </div>
    </div>

<?php
get_footer();