<?php
// Register Custom Post Type for Events
function register_event_post_type() {
    $labels = array(
        'name'                  => _x( 'Events', 'Post Type General Name', 'college-events-theme' ),
        'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'college-events-theme' ),
        'menu_name'             => __( 'Events', 'college-events-theme' ),
        'name_admin_bar'        => __( 'Event', 'college-events-theme' ),
        'archives'              => __( 'Event Archives', 'college-events-theme' ),
        'attributes'            => __( 'Event Attributes', 'college-events-theme' ),
        'parent_item_colon'     => __( 'Parent Event:', 'college-events-theme' ),
        'all_items'             => __( 'All Events', 'college-events-theme' ),
        'add_new_item'          => __( 'Add New Event', 'college-events-theme' ),
        'add_new'               => __( 'Add New', 'college-events-theme' ),
        'new_item'              => __( 'New Event', 'college-events-theme' ),
        'edit_item'             => __( 'Edit Event', 'college-events-theme' ),
        'update_item'           => __( 'Update Event', 'college-events-theme' ),
        'view_item'             => __( 'View Event', 'college-events-theme' ),
        'view_items'            => __( 'View Events', 'college-events-theme' ),
        'search_items'          => __( 'Search Event', 'college-events-theme' ),
        'not_found'             => __( 'Not found', 'college-events-theme' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'college-events-theme' ),
        'featured_image'        => __( 'Featured Image', 'college-events-theme' ),
        'set_featured_image'    => __( 'Set featured image', 'college-events-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'college-events-theme' ),
        'use_featured_image'    => __( 'Use as featured image', 'college-events-theme' ),
        'insert_into_item'      => __( 'Insert into event', 'college-events-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this event', 'college-events-theme' ),
        'items_list'            => __( 'Events list', 'college-events-theme' ),
        'items_list_navigation' => __( 'Events list navigation', 'college-events-theme' ),
        'filter_items_list'     => __( 'Filter events list', 'college-events-theme' ),
    );
    $args = array(
        'label'                 => __( 'Event', 'college-events-theme' ),
        'description'           => __( 'College Events', 'college-events-theme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => array( 'slug' => 'events' ),
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'event', $args );
}
add_action( 'init', 'register_event_post_type', 0 );
?>
