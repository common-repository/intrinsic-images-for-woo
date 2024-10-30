<?php

/**
 * Plugin Name: Intrinsic Images for Woo
 * Plugin URI: https://wizplugins.com/intrinsic-images-woo/
 * Description: Add intrinsic image values to the HTML source code to ensure the correct size image is served
 * Version: 1.0.0
 * Author: Wiz Plugins
 * Author URI: https://wizplugins.com
 * License: GNU General Public License v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: intrinsic-images-for-woo
 * Domain Path: /l10n
**/


// If this file is called directly, abort.
if (!defined("WPINC")){
	die;
}


/**
 * Silent is golden
**/
define("WII_EXEC",true);


/**
 * Plugin File
**/
define("WII_FILE",__FILE__);


/**
 * Plugin Path
**/
define("WII_PATH",dirname(__FILE__));


/**
 * Plugin Base URL
**/
define("WII_URL",plugins_url("/",__FILE__));


/**
 * The plugin class.
**/
require WII_PATH . "/incl/setup.php";
require WII_PATH . "/incl/plugin-options.php";

/** REST-API **/
require WII_PATH . "/incl/rest-api.php";


/**
 * Begins execution of the plugin.
**/
function run_intrinsic_images_for_woo()
{
	$plugin = new IntrinsicImagesForWoo();  
}

run_intrinsic_images_for_woo();
