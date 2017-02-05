<?php
get_header(); ?>


    <header id="kt-page-header-simple" class="text-center">

        <h1 class="kt-post-entry-title kt-category-title">
            <?php single_tag_title(_e('You are viewing posts tagged with: ', 'chinese-restaurant')); ?>
            <?php if ($paged > 1):
                echo
                    '<small>' . __('   Page:
','chinese-restaurant') . $paged
                    . '</small>'; endif; ?>
        </h1><!-- .entry-title -->
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php do_action('chinese_before_main_content'); ?>

                <section id="kt-primary">

                    <div id="kt-content" class="clearfix">

                        <?php get_template_part('framework/templates/content-tag'); ?>

                    </div>

                </section>
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
    </div>
    <!-- primary-page content ends here -->
<?php
get_footer();