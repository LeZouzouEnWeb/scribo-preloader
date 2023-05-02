<?php
require_once WPSPLD_PLUGIN_INC_DIR . '/variables.php';
require_once WPSPLD_PLUGIN_INC_DIR . '/functions.php';

function wpspld_settings_action_links($links, $file)
{
    // lien vers la page de config de ce plugin
    array_unshift($links, '<a href="' . admin_url('options-general.php?page=wpspld') . '">' . __('Settings') . '</a>');

    return $links;
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'wpspld_settings_action_links', 10, 2);

if (!function_exists('wpspld_setup')) {
    function wpspld_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on CorbyCats, use a find and replace
         * to change 'corbycats' to the name of your theme in all the template files.
         */
        load_theme_textdomain('scribo-preloader', get_template_directory() . '/languages');
    }
}
add_action('after_setup_theme', 'wpspld_setup');

if (!function_exists('wpspld_init')) {
    function wpspld_init()
    {
        global $wpspld_version;
        $v = $wpspld_version;
        wp_register_script('script-scribo-preloader', WPSPLD_R_PLUGIN_INC_JS . '/script.min.js', array('jquery'), $v['js'], true);
    }
}
add_action('wp_enqueue_scripts', 'wpspld_init');

if (!function_exists('wpspld_styles')) {
    function wpspld_styles()
    {
        if (!is_admin())
            wp_enqueue_script('script-scribo-preloader');
    }
}
add_action('wp_enqueue_scripts', 'wpspld_styles');
