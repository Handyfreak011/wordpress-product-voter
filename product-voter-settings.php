<?php
function iddt_voter_add_submenu_page(){
  add_submenu_page(
    'edit.php?post_type=produktart',
    'Produktarten Einstellungen',
    'Einstellungen',
    'manage_options',
    'produktarten_einstellungen',
    'iddt_voter_render_admin');
}

add_action('admin_menu', 'iddt_voter_add_submenu_page');

function iddt_voter_render_admin(){
  echo "Bald wird es möglich sein hier Einstellungen zum CPT zu treffen!";
}

?>
