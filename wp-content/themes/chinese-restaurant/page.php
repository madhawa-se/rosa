<?php
get_header(); ?>


    <div id="kt-page-header-simple" class="text-center">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php do_action('chinese_before_main_content'); ?>

                <main id="kt-primary">

                    <div id="kt-content" class="clearfix">

                        <?php get_template_part('framework/templates/content-page-template'); ?>

                    </div>

                </main>
                <?php do_action('chinese_after_main_content'); ?>
            </div>
        </div>
        <!-- primary-page content ends here -->
    </div>
<?php get_footer();