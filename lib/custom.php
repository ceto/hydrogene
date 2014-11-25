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
		'all_items'         => __( 'All Reference Categories','hydrogene' ),
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


/************ MetaBoxes **********/

if ( file_exists(  __DIR__ .'/CMB2/init.php' ) ) { require_once  __DIR__ .'/CMB2/init.php';};

function cmb2_hide_if_no_cats( $field ) {
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}


add_filter( 'cmb2_meta_boxes', 'h2_metaboxes' );
function h2_metaboxes( array $meta_boxes ) {
	$prefix = '_refdata_';
	$meta_boxes['reference_metabox'] = array(
		'id'            => 'reference_metabox',
		'title'         => __( 'Referencia meta adatok	', 'cmb2' ),
		'object_types'  => array( 'reference', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'fields'        => array(
			array(
				'name' => __( 'Subtitle', 'cmb2' ),
				'desc' => __( 'subtitle field description', 'cmb2' ),
				'id'   => $prefix . 'subtitle',
				'type' => 'text',
				// 'repeatable' => true,
			),
			array(
				'name'    => __( 'Excerpt', 'cmb2' ),
				'desc'    => __( 'short excerpt', 'cmb2' ),
				'id'      => $prefix . 'excerpt',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),

			array(
				'name' => __( 'Year', 'cmb2' ),
				'id'   => $prefix . 'year',
				'type' => 'text_small',
				// 'repeatable' => true,
			),
			array(
				'name' => __( 'Main color', 'cmb2' ),
				'desc'    => __( 'add rgb values, ex, 125, 200, 120', 'cmb2' ),
				'id'   => $prefix . 'color',
				'type' => 'text_small',
				// 'repeatable' => true,
			),
			
			array(
				'name' => __( 'Website URL', 'cmb2' ),
				'desc' => __( 'add a url if exists', 'cmb2' ),
				'id'   => $prefix . 'url',
				'type' => 'text_url',
				// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
				// 'repeatable' => true,
			),

			array(
				'name' => 'Some attached Image',
				'desc' => 'Upload an image or enter an URL.',
				'id' => $prefix . 'image',
				'type' => 'file',
				// 'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
		
			array(
				'name' => __( 'oEmbed', 'cmb2' ),
				'desc' => __( 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'cmb2' ),
				'id'   => $prefix . 'test_embed',
				'type' => 'oembed',
			),
		),
	);

	return $meta_boxes;
}



