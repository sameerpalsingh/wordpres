<?php if(!defined('ABSPATH')) exit; // Exit if accessed directly
/*
Plugin Name: WooCommerce Skrill Gateway
Plugin URI: http://wordpress.org/support/plugin/woocommerce-skrill-moneybookers-gateway
Description: A payment gateway for Skrill (https://www.skrill.com/). A Skrill merchant account is required for this gateway to work properly.
Version: 1.4.2.161207
Author: Aelia
Author URI: http://aelia.co
Plugin URI: https://aelia.co/shop/skrill-gateway-for-woocommerce/
License: GPLv3
Text Domain: woocommerce-skrill-moneybookers-gateway
Domain Path: /languages
*/
require_once(dirname(__FILE__) . '/src/lib/classes/install/aelia-wc-skrillgateway-requirementscheck.php');
// If requirements are not met, deactivate the plugin
if(Aelia_WC_Skrill_Gateway_RequirementsChecks::factory()->check_requirements()) {
	require_once dirname(__FILE__) . '/src/plugin-main.php';
}
