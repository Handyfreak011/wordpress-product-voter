<?php

function iddt_add_costum_metabox_projectvoting(){
  add_meta_box(
    'productvoting',
    'Project Voting',
    'iddt_meta_projectvoting_callback',
    'produktart'
  );
}

function iddt_meta_projectvoting_callback(){

}


add_action('add_meta_boxes', 'iddt_add_costum_metabox_projectvoting');









 ?>
