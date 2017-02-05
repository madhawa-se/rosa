<?php if (chinese_has_active_footer() != false): ?>
    <footer id="kt-footer">

        <?php do_action('chinese_before_footer'); ?>
        <?php

        $chinese_footer_info = chinese_has_active_footer();
        $chinese_footer_class = $chinese_footer_info['class'];
        $chinese_sidebars_count = $chinese_footer_info['sidebars_count'];
        ?>
        <div class="container">
            <div class="row">
                <div id="kt-footer-area">
                    <?php for ($i = 1; $i < $chinese_sidebars_count + 1; $i++): ?>

                        <div class="<?php echo $chinese_footer_class; ?> kt-footer-sidebar">
                            <?php if (!dynamic_sidebar('chinese_footer_' . $i . '_sidebar')): ?>
                                <div class="pre-widget">

                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <?php do_action('chinese_after_footer'); ?>

    </footer>
<?php endif; // if which checks active footer sidebars ?>
<section id="kt-copyright">
    <div class="container">
        <div class="row">


            <div class="col-md-12 text-center">
                <p>
                    <a rel="nofollow" href="<?php echo esc_url(__(
                        'http://ketchupthemes.com/chinese-restaurant-theme/',
                        'chinese-restaurant')); ?>">
                        <small><?php printf(__('Chinese Restaurant Theme', 'chinese-restaurant'));
                            ?></small>
                    </a>,
                    <small><?php echo __('&copy;', 'chinese-restaurant') . date('Y'); ?></small>
                    <small><?php bloginfo('name'); ?></small>

                </p>
            </div>


        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>