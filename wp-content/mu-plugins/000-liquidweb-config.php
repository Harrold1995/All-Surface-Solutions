<?php
/**
 * Plugin Name: Liquid Web Managed WordPress Configuration
 * Plugin URI:  https://www.liquidweb.com
 * Description: Configuration to support the Liquid Web Managed WordPress and WooCommerce platforms.
 * Author:      Liquid Web
 * Author URI:  https://www.liquidweb.com
 * Text Domain: liquid-web-mwp
 * Domain Path: /languages
 * Version:     1.0.0
 *
 * @package LiquidWeb\MWP\Config
 * @author  Liquid Web
 */

/** LW specific constants **/
define( 'LWMWP_SITE', true );
define( 'LWMWP_PLAN_NAME', 'Business: Up to 25 Sites' );
defined( 'LWMWP_SITE_ENDPOINT' ) || define('LWMWP_SITE_ENDPOINT', 'https://app.a9r6yr0c-liquidwebsites.com/api/sites/2884/');
defined( 'LWMWP_API_TOKEN' )     || define('LWMWP_API_TOKEN',     '4aa9e740-7332-495f-a0a1-f236dfb1bff9');

/** Fail2Ban **/
defined('WP_FAIL2BAN_BLOCK_USER_ENUMERATION') || define('WP_FAIL2BAN_BLOCK_USER_ENUMERATION', true);

add_filter( 'plugins_auto_update_enabled', '__return_false' );
