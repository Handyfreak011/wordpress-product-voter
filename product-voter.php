<?php
/**
* Plugin Name: Product Voter
* Plugin URL: https://github.com/Handyfreak011/wordpress-product-voter
* Description: A simple up and down voter
* Author: Sebastian Schaefer
* Version: 0.0.1
* License: GLPv2
*/

function iddt_remove_dashboard_widget() {
  remove_meta_box('dashboard_primary','dashboard','postbox');
}

add_action('admin_init','iddt_remove_dashboard_widget');


function iddt_add_google_analytics(){

  global $wp_admin_bar;
  $wp_admin_bar->add_menu( array(
    'id' => 'google_analytics',
    'title' => 'Google Analytics',
    'href' => 'https://www.google.de/intl/de/analytics/'
  ));

}
add_action('wp_before_admin_bar_render','iddt_add_google_analytics');
 ?>
