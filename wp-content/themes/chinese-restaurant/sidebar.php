<aside id="kt-sidebar" <?php echo (is_single() || is_page() ? 'style="margin-top:47px;"' : '');
?>>
    <?php if (!dynamic_sidebar('sidebar')): ?>
        <div class="pre-widget">
            <h3><?php _e('Widgetized Sidebar', 'chinese-restaurant'); ?></h3>
            <p><?php _e('This panel is active and ready for you to add
            some widgets via the WP Admin', 'chinese-restaurant'); ?></p>
        </div>
    <?php endif; ?>
</aside>