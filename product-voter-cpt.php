
<?php

function iddt_register_site_post_type(){

  $singular = 'Produktart';
  $plural = 'Produktarten';
  $slug = str_replace( ' ', '_', strtolower( $singular ) );

  $labels = array(
    'name'               => $plural,
    'singular_name'      => $singular,
    'add_new'            => 'Neue hinzufügen',
    'add_new_item'       => 'Neue '. $singular. ' hinzufügen',
    'edit'               => 'Bearbeiten',
    'edit_item'          => 'Bearbeite die ' . $singular,
    'new_item'           => 'Neue ' . $singular,
    'view'               => 'Sieh dir die ' . $singular . ' an',
    'view_item'          => 'Sieh dir die ' . $singular . ' an',
    'parent'             => 'Parent ' . $singular,
    'not_found'          => 'Keine '. $plural . ' gefunden',
    'not_found_in_trash' => 'Keine '. $plural . 'im Papierkorb gefunden'
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Eine Seite für die Produktarten',
    'public' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 13,
    'menu_icon' => 'dashicons-layout',
    'capability_type' => 'page',
    'map_meta_cap' => true,
    'hierarchical' => true,
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'costum-fields',
      'comments',
      'revisions'
    ),
    'rewrite'             => array(
      'slug' => $slug,
      'with_front' => true,
      'pages' => true,
      'feeds' => true,
    ),
    'can_export' => true,
    'taxonomies' => array(
      'obergruppe',
      'tags'
    )
  );
  register_post_type('produktart', $args);
}
add_action('init', 'iddt_register_site_post_type');

function iddt_register_taxonomy_upper_groups(){
  $singular = 'Obergruppe';
  $plural = 'Obergruppen';
	$slug = str_replace(' ', '_', strtolower($singular));

  $labels = array(
    'name' => $plural,
    'singular_name' => $singular,
    'menu_name' => $plural,
    'all_items' => 'Alle ' . $plural,
    'edit_item' => 'Bearbeite ' . $singular,
    'view_item' => 'Sehe ' . $singular . ' an',
    'update_item' => 'Update' . $singular,
    'add_new_item' => 'Füge neue ' . $singular . ' hinzu',
    'new_item_name' => 'Name der neuen ' . $singular,
    'search_items' => 'Suche ' . $plural,
    'separate_items_with_commas' => 'Trenne die ' . $plural . ' mit Kommas',
    'add_or_remove_items' => 'Füge neue ' . $singular . ' hinzu oder lösche sie',
    'not_found' => 'Keine ' . $plural . ' gefunden',
  );
  $args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array(
			'slug' => $slug
		) ,
	);
	register_taxonomy('obergruppe', 'produktart', $args);
	}

add_action('init', 'iddt_register_taxonomy_upper_groups');

?>
