<h1>
Plugin</h1>
<form method="post" action ="options.php" novalidate="novalidate">
    <?php settings_fields('plugin_slug'); ?>
    <table class="form-table" role="presentation">
        <?php do_settings_fields('plugin_slug', 'default'); ?>
    </table>
    <?php submit_button(); ?>
</form>
