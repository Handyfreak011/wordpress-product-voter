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
require_once(plugin_dir_path(__FILE__)) .  'product-voter-render-admin.php';
require_once(plugin_dir_path(__FILE__)) .  'project-voter-fields.php';


function iddt_voter_admin_enqueue_scripts(){
  //Variables to target the post type and post screen
  global $pagenow, $typenow;
  var_dump($typenow);

  if (($pagenow == 'post.php' || $pagenow == 'post-new.php') &&  $typenow == 'produktart'){
    //Main plugin css file
    wp_enqueue_style('iddt-admin.css', plugins_url('css/admin-voter.css', __FILE__));
    //Main plugin js file
    wp_enqueue_script('iddt-admin.css', plugins_url('js/admin-voter.js', __FILE__), array('jquery'), '02021017', true);
  }
}

add_action('admin_enqueue_scripts', 'iddt_voter_admin_enqueue_scripts');
?>
