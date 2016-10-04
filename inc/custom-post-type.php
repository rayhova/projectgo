<?php /*
* Custom Post Types
*/
function news_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'News', 'Post Type General Name', 'project_go' ),
		'singular_name'       => _x( 'News', 'Post Type Singular Name', 'project_go' ),
		'menu_name'           => __( 'News', 'project_go' ),
		'parent_item_colon'   => __( 'Parent News', 'project_go' ),
		'all_items'           => __( 'All News', 'project_go' ),
		'view_item'           => __( 'View News', 'project_go' ),
		'add_new_item'        => __( 'Add New News', 'project_go' ),
		'add_new'             => __( 'Add New', 'project_go' ),
		'edit_item'           => __( 'Edit News', 'project_go' ),
		'update_item'         => __( 'Update News', 'project_go' ),
		'search_items'        => __( 'Search News', 'project_go' ),
		'not_found'           => __( 'Not Found', 'project_go' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project_go' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'news', 'project_go' ),
		'description'         => __( 'News', 'project_go' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'newscat','newstag', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'		      => get_template_directory_uri() . "/inc/images/news.png",
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'news', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'news_post_type', 0 );


// register two taxonomies to go with the post type
function news_cat_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'News Categories',
		'singular_name'     => 'News Category',
		'search_items'      => 'Search News Categories',
		'all_items'         => 'All News Categories',
		'edit_item'         => 'Edit News Category',
		'update_item'       => 'Update News Categories',
		'add_new_item'      => 'Add New News Category',
		'new_item_name'     => 'New News Category',
		'menu_name'         => 'News Categories'
	);
	// register taxonomy
	register_taxonomy( 'newscat', 'news', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'news_cat_register_taxonomy' );

// register two taxonomies to go with the post type
function news_tag_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Tags',
		'singular_name'     => ' Tag',
		'search_items'      => 'Search Tags',
		'all_items'         => 'All Tags',
		'edit_item'         => 'Edit Tag',
		'update_item'       => 'Update Tags',
		'add_new_item'      => 'Add New Tag',
		'new_item_name'     => 'New Tag',
		'menu_name'         => 'Tags'
	);
	// register taxonomy
	register_taxonomy( 'newstag', 'news', array(
		'hierarchical' => false,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'news_tag_register_taxonomy' );


function board_members_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Board Members', 'Post Type General Name', 'project_go' ),
		'singular_name'       => _x( 'Board Member', 'Post Type Singular Name', 'project_go' ),
		'menu_name'           => __( 'Board Members', 'project_go' ),
		'parent_item_colon'   => __( 'Parent Board Member', 'project_go' ),
		'all_items'           => __( 'All Board Members', 'project_go' ),
		'view_item'           => __( 'View Board Members', 'project_go' ),
		'add_new_item'        => __( 'Add New Board Members', 'project_go' ),
		'add_new'             => __( 'Add New', 'project_go' ),
		'edit_item'           => __( 'Edit Board Member', 'project_go' ),
		'update_item'         => __( 'Update Board Member', 'project_go' ),
		'search_items'        => __( 'Search Board Members', 'project_go' ),
		'not_found'           => __( 'Not Found', 'project_go' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project_go' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'board-members	', 'project_go' ),
		'description'         => __( 'Board Members', 'project_go' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'departments' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'		      => get_template_directory_uri() . "/inc/images/team.png",
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'board-members', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'board_members_post_type', 0 );



// register two taxonomies to go with the post type
function board_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Board Departments',
		'singular_name'     => 'Board Department',
		'search_items'      => 'Search Board Departments',
		'all_items'         => 'All Board Departments',
		'edit_item'         => 'Edit Board Department',
		'update_item'       => 'Update Board Departments',
		'add_new_item'      => 'Add New Board Department',
		'new_item_name'     => 'New Board Department',
		'menu_name'         => 'Board Departments'
	);
	// register taxonomy
	register_taxonomy( 'boardcat', 'board-members', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'board_register_taxonomy' );

function case_studies_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'project_go' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'project_go' ),
		'menu_name'           => __( 'Case Studies', 'project_go' ),
		'parent_item_colon'   => __( 'Parent Case-studies', 'project_go' ),
		'all_items'           => __( 'All Case Studies', 'project_go' ),
		'view_item'           => __( 'View Case Studies', 'project_go' ),
		'add_new_item'        => __( 'Add New Case Study', 'project_go' ),
		'add_new'             => __( 'Add New', 'project_go' ),
		'edit_item'           => __( 'Edit Case Study', 'project_go' ),
		'update_item'         => __( 'Update Case Study', 'project_go' ),
		'search_items'        => __( 'Search Case Studies', 'project_go' ),
		'not_found'           => __( 'Not Found', 'project_go' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project_go' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'case-studies', 'project_go' ),
		'description'         => __( 'Case Studies', 'project_go' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'case-studiescat','case-studiestags', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'		      => get_template_directory_uri() . "/inc/images/dog.png",
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'case-studies', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'case_studies_post_type', 0 );


// register two taxonomies to go with the post type
function case_studies_cat_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Case Studies Categories',
		'singular_name'     => 'Case Study Category',
		'search_items'      => 'Search Case Studies Categories',
		'all_items'         => 'All Case Studies Categories',
		'edit_item'         => 'Edit Case Studies Category',
		'update_item'       => 'Update Case Studies Categories',
		'add_new_item'      => 'Add New Case Studies Category',
		'new_item_name'     => 'New Case Studies Category',
		'menu_name'         => 'Case Studies Categories'
	);
	// register taxonomy
	register_taxonomy( 'case-studiescat', 'case-studies', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'case_studies_cat_register_taxonomy' );

// register two taxonomies to go with the post type
function case_studies_tags_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Tags',
		'singular_name'     => 'Tag',
		'search_items'      => 'Search Tags',
		'all_items'         => 'All Tags',
		'edit_item'         => 'Edit Tag',
		'update_item'       => 'Update Tags',
		'add_new_item'      => 'Add New Tag',
		'new_item_name'     => 'New Tag',
		'menu_name'         => 'Tags'
	);
	// register taxonomy
	register_taxonomy( 'case-studiestags', 'case-studies', array(
		'hierarchical' => false,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'case_studies_tags_register_taxonomy' );

function services_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'project_go' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'project_go' ),
		'menu_name'           => __( 'Services', 'project_go' ),
		'parent_item_colon'   => __( 'Parent Service', 'project_go' ),
		'all_items'           => __( 'All Services', 'project_go' ),
		'view_item'           => __( 'View Services', 'project_go' ),
		'add_new_item'        => __( 'Add New Services', 'project_go' ),
		'add_new'             => __( 'Add New', 'project_go' ),
		'edit_item'           => __( 'Edit Service', 'project_go' ),
		'update_item'         => __( 'Update Service', 'project_go' ),
		'search_items'        => __( 'Search Services', 'project_go' ),
		'not_found'           => __( 'Not Found', 'project_go' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project_go' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'services', 'project_go' ),
		'description'         => __( 'Services', 'project_go' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'departments' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'		      => get_template_directory_uri() . "/inc/images/services.png",
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'services', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'services_post_type', 0 );

function testimonials_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'project_go' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'project_go' ),
		'menu_name'           => __( 'Testimonials', 'project_go' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'project_go' ),
		'all_items'           => __( 'All Testimonials', 'project_go' ),
		'view_item'           => __( 'View Testimonials', 'project_go' ),
		'add_new_item'        => __( 'Add New Testimonials', 'project_go' ),
		'add_new'             => __( 'Add New', 'project_go' ),
		'edit_item'           => __( 'Edit Testimonial', 'project_go' ),
		'update_item'         => __( 'Update Testimonial', 'project_go' ),
		'search_items'        => __( 'Search Testimonials', 'project_go' ),
		'not_found'           => __( 'Not Found', 'project_go' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project_go' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'testimonials', 'project_go' ),
		'description'         => __( 'Testimonials', 'project_go' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'departments' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'		      => get_template_directory_uri() . "/inc/images/testimonials.png",
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'testimonials_post_type', 0 );
