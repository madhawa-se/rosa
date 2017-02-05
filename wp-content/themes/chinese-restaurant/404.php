<?php
get_header(); ?>
<div class="row">
    <div class="col-md-12">
        <?php do_action('chinese_before_main_content'); ?>

        <main id="kt-primary" role="main">

            <div id="kt-content" class="clearfix">
                <div id="error-404" class="text-center">
                    <i id="error-icon" class="fa fa-thumbs-down fa-5x"></i>
                    <h4><?php echo __('Well, this page does not exist. Maybe search
                    something else?','chinese-restaurant'); ?></h4>
                    <?php echo get_search_form(); ?>
                </div>

            </div>

        </main>
        <?php do_action('chinese_after_main_content'); ?>
    </div>
</div>
<!-- primary-page content ends here -->
<?php get_footer();
