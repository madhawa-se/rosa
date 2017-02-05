<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php do_action('chinese_before_main_content'); ?>

                <main id="kt-primary">

                    <div id="kt-content" class="clearfix">

                        <?php get_template_part('framework/templates/content-blog-page'); ?>

                    </div>

                </main>
                <?php do_action('chinese_after_main_content'); ?>
            </div>

            <div class="col-md-4">
                <aside id="kt-sidebar" style="margin-top:47px">
                    <?php if (!dynamic_sidebar('sidebar')): ?>
                        <div class="pre-widget">

                        </div>
                    <?php endif; ?>
                </aside>
            </div>
        </div>
        <!-- primary-page content ends here -->
    </div>

<?php
get_footer();