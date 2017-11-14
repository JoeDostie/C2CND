<?php
/*
 Plugin Name: C2CND Plugin
 Plugin URI: https://CrazyChickenTech.com
 Description: This Plugin is developed for exclusive use for C2CND (Catering to Cats and Dogs)
 Author: Joe Dostie
 Author URI: https://CrazyChickenTech.com
 Version: 0.0.1
 Licence: GPLv2
*/

//Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

require_once ( plugin_dir_path(__FILE__) .'cct_woo_admin.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_add_buttons.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_woo_display.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_woo_default_title.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_woo_second_tab.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_woo_cleanup.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_woo_save_fields.php' );
require_once ( plugin_dir_path(__FILE__) .'cct_woo_second_display.php' );