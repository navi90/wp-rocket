<?php
defined( 'ABSPATH' ) or die( 'No direct access here, kiddo.' );
/**
 * Plugin Name: WP Rocket | Disable Notifications
 * Description: Disable .htaccess and advanced-cache.php notifications.
 * Plugin URI:  https://github.com/navi90/wp-rocket/wp-rocket-disable-notifications
 * Author:      Puzic Ivan
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Disables .htaccess and advanced-cache.php notifications for WP Rocket.
 */
add_action( 'wp_loaded', function(){
	remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );
	rocket_dismiss_box( 'rocket_warning_advanced_cache_permissions' );
} );