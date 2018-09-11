<?php
/**
 *
 * @package Ikmi Theme
 * 
 */


/** 
*   =================================
*   Tambahin CSS dan JS sendiri
*   =================================
**/
function input_script_sendiri(){
    //css
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0.1', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/fontawesome-all.css', array(), '1.0.1', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri().'/css/ikmi.css', array(), '1.0.0', 'all' );

    //js
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '4.0.1', true );
    // wp_enqueue_script( 'customjs', get_template_directory_uri().'/js/awesome.js', array(), '1.0.0', true );
    
    
}

add_action( 'wp_enqueue_scripts', 'input_script_sendiri');

/** 
*   =================================
*   Aktivasi menu support
*   =================================
**/

function ikmi_theme_setup(){

    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'primary header navigation' );
    register_nav_menu( 'secondary', 'sidebar footer navigation' );
    register_nav_menu( 'profil', 'profil sidebar navigation' );
}
add_action( 'init', 'ikmi_theme_setup' );

/** 
*   =================================
*   Menu Navigasi
*   =================================
**/

require get_template_directory().'/inc/walker.php';

/** 
*   =================================
*   Aktivasi menu support
*   =================================
**/

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array('aside', 'image', 'video') );
add_theme_support( 'html5', array('search-form') );


/** 
*   =================================
*   Fungsi Pengumuman
*   =================================
**/

function ikmi_pengumuman_post_type (){
	
	$labels = array(
		'name' => 'Pengumuman',
		'singular_name' => 'Pengumuman',
		'add_new' => 'Pengumuman Baru',
		'all_items' => 'Semua Pengumuman',
		'add_new_item' => 'Pengumuman Baru',
		'edit_item' => 'Edit Item',
		'new_item' => 'Pengumuman Baru',
		'view_item' => 'View Item',
		'search_item' => 'Search Pengumuman',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		// 'taxonomies' => array('category', 'post_tag'), 
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('pengumuman',$args);
}
add_action('init','ikmi_pengumuman_post_type');


function awesome_custom_taxonomies(){

	// add new taxonomies hierarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Field',
		'update_item' => 'Update Field',
		'add_new_item' => 'Add New Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Field'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'field' )
	);

	register_taxonomy( 'field', array('pengumuman'), $args );
	// add new taxonomies not hierarchical

	register_taxonomy( 'tentang', 'pengumuman', array(
		'label' => 'Tentang',
		'rewrite' => array( 'slug' => 'tentang' ),
		'hierarchical' => false
	) );
}

add_action( 'init', 'awesome_custom_taxonomies' );


/** 
*   =================================
*   Batasan Kata
*   =================================
**/

function get_excerpt_length()
{
    return 30;
}

function return_excerpt_text(){
    return '';
}


add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');

/** 
*   =================================
*   Sidebar
*   =================================
**/

function ikmi_setup_sidebar(){
    register_sidebar( array(
            'name'          => 'Index Sidebar',
            'id'            => 'sidebar-1',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s card card-body shadow mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title card-title">',
			'after_title'   => '</h4>',

        ) 
    );

	register_sidebar( array(
            'name'          => 'Pengumuman Sidebar',
            'id'            => 'sidebar-2',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s card card-body shadow mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title card-title">',
			'after_title'   => '</h4>',

        ) 
    );

	register_sidebar( array(
            'name'          => 'Berita Sidebar',
            'id'            => 'sidebar-3',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s card-body mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title card-title">',
			'after_title'   => '</h3>',

        ) 
    );

    register_sidebar( array(
        'name'          => 'Profil Sidebar',
        'id'            => 'sidebar-4',
        'class'         => 'custom',
        'description'   => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s card-body mb-4 sidebar-profil">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title card-title">',
        'after_title'   => '</h3>',

    ) 
);
}

add_action( 'widgets_init', 'ikmi_setup_sidebar' );


/** 
*   =================================
*   terms
*   =================================
**/

function awesome_get_terms($postID, $term){

	$term_list = wp_get_post_terms( $postID, $term );
	$output = '';
	$i = 0; 
	foreach($term_list as $term ){ $i++;
		if($i > 1 ){ $output .= ', '; }
		$output .= '<a href="'.get_term_link( $term ).'">'.$term->name.'</a>';
	}
	return $output;

}

