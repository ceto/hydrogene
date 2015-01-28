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
				'name' => 'Big start illustration',
				'desc' => 'Product in real life. eg: on devices',
				'id' => $prefix . 'reallife',
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



function h2_post_class($classes) {
  if (get_post_type()=='reference' ) {
		$classes[] = 'reference-'.get_the_ID();
  }
  return $classes;
}
add_filter('post_class', 'h2_post_class');



add_shortcode('wp_caption', 'h2_img_caption_shortcode');
add_shortcode('caption', 'h2_img_caption_shortcode');

function h2_img_caption_shortcode( $attr, $content = null ) {
	// New-style shortcode with the caption inside the shortcode with the link and image tags.
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	/**
	 * Filter the default caption shortcode output.
	 *
	 * If the filtered output isn't empty, it will be used instead of generating
	 * the default caption template.
	 *
	 * @since 2.6.0
	 *
	 * @see img_caption_shortcode()
	 *
	 * @param string $output  The caption output. Default empty.
	 * @param array  $attr    Attributes of the caption shortcode.
	 * @param string $content The image element, possibly wrapped in a hyperlink.
	 */
	$output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
	if ( $output != '' )
		return $output;

	$atts = shortcode_atts( array(
		'id'	  => '',
		'align'	  => 'alignnone',
		'width'	  => '',
		'caption' => '',
		'class'   => '',
	), $attr, 'caption' );

	$atts['width'] = (int) $atts['width'];
	if ( $atts['width'] < 1 || empty( $atts['caption'] ) )
		return $content;

	if ( ! empty( $atts['id'] ) )
		$atts['id'] = 'id="' . esc_attr( $atts['id'] ) . '" ';

	$class = trim( 'wp-caption ' . $atts['align'] . ' ' . $atts['class'] );

	if ( current_theme_supports( 'html5', 'caption' ) ) {
		return '<figure ' . $atts['id'] . 'class="' . esc_attr( $class ) . '">'
		. do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $atts['caption'] . '</figcaption></figure>';
	}

	$caption_width = 10 + $atts['width'];

	/**
	 * Filter the width of an image's caption.
	 *
	 * By default, the caption is 10 pixels greater than the width of the image,
	 * to prevent post content from running up against a floated image.
	 *
	 * @since 3.7.0
	 *
	 * @see img_caption_shortcode()
	 *
	 * @param int    $caption_width Width of the caption in pixels. To remove this inline style,
	 *                              return zero.
	 * @param array  $atts          Attributes of the caption shortcode.
	 * @param string $content       The image element, possibly wrapped in a hyperlink.
	 */
	$caption_width = apply_filters( 'img_caption_shortcode_width', $caption_width, $atts, $content );

	$style = '';
	if ( $caption_width )
		$style = 'style="width: ' . (int) $caption_width . 'px" ';

	return '<div ' . $atts['id'] . $style . 'class="' . esc_attr( $class ) . '">'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $atts['caption'] . '</p></div>';
}








/********** Inverse Block Shortcode **********/

function h2_inverseblock_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array('wrapper' => 'normal'), $atts );
	return do_shortcode('<section class="inverseblock"><div class="wrapper wrapper--'.$a['wrapper'].'">'.$content.'</div></section>');
}
add_shortcode( 'inverseblock', 'h2_inverseblock_shortcode');





/***** Uniqui Page title at the top header ******/

function h2_pagetitle($classmod) {
	if ( is_singular('reference') || is_post_type_archive('reference')) {
		echo '<a class="banner__pagetitle '.$classmod.'" href="'.get_post_type_archive_link('reference').'">'.__('Munkák','h2').'</a>';
	} elseif ( is_singular('post') || is_home() || is_category() || is_post_type_archive('post') ) {
		echo '<a class="banner__pagetitle '.$classmod.'" href="'.get_the_permalink(67).'">'.__('Blog','h2').'</a>';
	} elseif (false) {
		echo '<a class="banner__pagetitle '.$classmod.'" href="#">'.__('passz','h2').'</a>';
	} else {
		echo '<a class="banner__pagetitle '.$classmod.'" href="#">'.get_the_title().'</a>';
	}
}

