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

function iddt_meta_projectvoting_callback( $post ){
  wp_nonce_field( basename(__FILE__), 'iddt_jobs_nonce');
  $iddt_stored_meta = get_post_meta( $post->ID);
  ?>
  <div>
    <div class="meta-row">
      <div class="meta-th">
        <label for="produktart" class="iddt-row-title"><?php _e( 'Produktart', 'product-voter');?></label>
      </div>
      <div class="td">
        <input type="text" class="iddt-row-content" name="produktart" id="produktart"
        value="<?php if ( !empty ($iddt_stored_meta['produktart']))
          echo esc_attr( $iddt_stored_meta['produktart'][0]);
        ?> "/>
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

function iddt_meta_save($post_id){
  //Check save status
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revision = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'iddt_jobs_nonce' ] ) && wp_verify_nonce( $_POST[ 'iddt_jobs_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
  // Exits script depending on save status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
      return;
  }


  if(isset($_POST['produktart'])){
    update_post_meta($post_id, 'produktart', sanitize_text_field($_POST['produktart']));
  }
}

add_action('save_post', 'iddt_meta_save');







 ?>
