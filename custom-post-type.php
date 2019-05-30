<?php 

function slide_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Slide Shows', 'Post Type General Name', 'eseg' ),
        'singular_name'       => _x( 'Slideshow', 'Post Type Singular Name', 'eseg' ),
        'menu_name'           => __( 'Slide Shows', 'eseg' ),
        'parent_item_colon'   => __( 'Parent SlideShow', 'eseg' ),
        'all_items'           => __( 'All Slide Shows', 'eseg' ),
        'view_item'           => __( 'View SlideShow', 'eseg' ),
        'add_new_item'        => __( 'Add New SlideShow', 'eseg' ),
        'add_new'             => __( 'Add New', 'eseg' ),
        'edit_item'           => __( 'Edit SlideShow', 'eseg' ),
        'update_item'         => __( 'Update SlideShow', 'eseg' ),
        'search_items'        => __( 'Search SlideShow', 'eseg' ),
        'not_found'           => __( 'Not Found', 'eseg' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'eseg' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'slideshows', 'eseg' ),
        'description'         => __( 'Colocar os slideshows', 'eseg' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
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
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'slide', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'slide_post_type', 0 );


 ?>