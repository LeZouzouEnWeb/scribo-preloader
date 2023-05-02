<?php

/**
 * Plugin Name:       Scribo Preloader pour CorbibiCoon
 * Plugin URI:        https://www.corbisier.fr/wordpress/plugins/preloader/
 * Description:       Un plugin preloader pour la page d'accueil des Corbibicoon.
 * Version:           1.1.06
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Eric CORBISIER
 * Author URI:        https://www.corbisier.fr/wordpress/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.corbisier.fr/wordpress/
 * Text Domain:       scribo-preloader
 * Domain Path:       /languages
 */

defined('ABSPATH') or die();
define('WPSPLD_DIR_PLUGIN', 'scribo-preloader');
define('WPSPLD_VERSION', '1.1.06');

$args_version = array(
    WPSPLD_DIR_PLUGIN => WPSPLD_VERSION,
    "css" => "1.0.00",
    "js" => "1.1.02"
);




// absolue : 

define('WPSPLD_PLUGIN', __FILE__);
define('WPSPLD_PLUGIN_BASENAME', plugin_basename(WPSPLD_PLUGIN));
define('WPSPLD_PLUGIN_NAME', trim(dirname(WPSPLD_PLUGIN_BASENAME), '/'));
define('WPSPLD_PLUGIN_DIR', untrailingslashit(dirname(WPSPLD_PLUGIN)));
define('WPSPLD_PLUGIN_INC_DIR', WPSPLD_PLUGIN_DIR . '/inc');
define('WPSPLD_PLUGIN_ADMIN_DIR', WPSPLD_PLUGIN_DIR . '/admin');

// relative : 

define('WPSPLD_R_PLUGIN_DIR', get_option("home") . "/wp-content/plugins/" . WPSPLD_DIR_PLUGIN);
define('WPSPLD_R_PLUGIN_INC_JS', WPSPLD_R_PLUGIN_DIR . '/assets/js');
define('WPSPLD_R_PLUGIN_INC_DIR', WPSPLD_R_PLUGIN_DIR . '/inc');
define('WPSPLD_R_PLUGIN_ADMIN_DIR', WPSPLD_R_PLUGIN_DIR . '/admin');


require_once WPSPLD_PLUGIN_DIR . '/load.php';
