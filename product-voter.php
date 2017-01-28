<?php
/**
* Plugin Name: Product Voter
* Plugin URL: https://github.com/Handyfreak011/wordpress-product-voter
* Description: A simple up and down voter
* Author: Sebastian Schaefer
* Version: 0.0.1
* License: GLPv2
*/

//Exit if accessed directly
if( !defined('ABSPATH')){
  exit;
}

require_once(plugin_dir_path(__FILE__)) .  'product-voter-cpt.php';
