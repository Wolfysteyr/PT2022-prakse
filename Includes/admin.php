<h1>
Plugin</h1>
<form method="post" action ="options.php" novalidate="novalidate">
    <?php settings_fields('plugin_slug'); ?>
    <table class="form-table" role="presentation">
        <?php do_settings_fields('plugin_slug', 'default'); ?>
    </table>
    <?php submit_button(); ?> <!-- man vajag, lai ar šīs pogas spiedienu varētu izsaukt save_custom_fields() funkciju no mpp-functions.php --> 
</form> 
