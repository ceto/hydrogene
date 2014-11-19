<?php
add_action( 'init', 'h2_reference_init' );
/**
 * Register a reference post type and its taxonomy.
 *
 */
function h2_reference_init() {
	$labels = array(
		'name'               => _x( 'References', 'post type general name', 'hydrogene' ),
		'singular_name'      => _x( 'Reference', 'post type singular name', 'hydrogene' ),
		'menu_name'          => _x( 'References', 'admin menu', 'hydrogene' ),
		'name_admin_bar'     => _x( 'Reference', 'add new on admin bar', 'hydrogene' ),
		'add_new'            => _x( 'Add New', 'Reference', 'hydrogene' ),
		'add_new_item'       => __( 'Add New Reference', 'hydrogene' ),
		'new_item'           => __( 'New Reference', 'hydrogene' ),
		'edit_item'          => __( 'Edit Reference', 'hydrogene' ),
		'view_item'          => __( 'View Reference', 'hydrogene' ),
		'all_items'          => __( 'All References', 'hydrogene' ),
		'search_items'       => __( 'Search References', 'hydrogene' ),
		'parent_item_colon'  => __( 'Parent References:', 'hydrogene' ),
		'not_found'          => __( 'No references found.', 'hydrogene' ),
		'not_found_in_trash' => __( 'No references found in Trash.', 'hydrogene' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'reference' ),
		'capability_type'    => 'post',
		'has_archive'        => 'references',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'reference', $args );
}


add_action( 'init', 'h2_refrences_taxonomies', 0 );
function h2_refrences_taxonomies() {
	$labels = array(
		'name'              => _x( 'Reference Categories', 'taxonomy general name','hydrogene' ),
		'singular_name'     => _x( 'Reference Category', 'taxonomy singular name','hydrogene' ),
		'search_items'      => __( 'Search Reference Categories','hydrogene' ),
		'all_items'         => __( 'All Reference Categorires','hydrogene' ),
		'parent_item'       => __( 'Parent Reference Category','hydrogene' ),
		'parent_item_colon' => __( 'Parent Reference Category:','hydrogene' ),
		'edit_item'         => __( 'Edit Reference Category','hydrogene' ),
		'update_item'       => __( 'Update Reference Category','hydrogene' ),
		'add_new_item'      => __( 'Add New Reference Category','hydrogene' ),
		'new_item_name'     => __( 'New Reference category Name','hydrogene' ),
		'menu_name'         => __( 'Categories','hydrogene' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'reference-category' ),
	);

	register_taxonomy( 'references', array( 'reference' ), $args );
}



