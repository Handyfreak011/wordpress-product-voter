<?php

function iddt_add_costum_metabox_projectvoting(){
  add_meta_box(
    'productvoting',
    'Project Voting',
    'iddt_meta_projectvoting_callback',
    'produktart',
    'high'
  );
}


add_action('add_meta_boxes', 'iddt_add_costum_metabox_projectvoting');

function iddt_meta_projectvoting_callback(){
  ?>
  <div>
    <div class="meta-row">
      <div class="meta-th">
        <label for="produktart" class="iddt-row-title">Produktart</label>
      </div>
      <div class="td">
        <input type="text" name="produktart" id="produktart" value=""/>
      </div>
    </div>

    <div class="meta-row">
      <div class="meta-th">
        <label for="produkte" class="iddt-row-title">Produkte</label>
      </div>
      <div class="td">
        <input type="text" name="produkte" id="produkte" value=""/>
      </div>
    </div>

  </div>


  <?php
}







 ?>
