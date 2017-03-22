<?php 
//THEME FUNCTIONS

function magasine_resources() {
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'magasine_resources');


// theme setup
function MagasinETema_setup() {
    
    // Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
    
    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('large-thumbnail', 1026, 500, array('center', 'center'));
    add_image_size('small-thumbnail', 497, 214, array('center', 'center'));
}

add_action('after_setup_theme','MagasinETema_setup');

// Customize excerpt word count length
function custom_excerpt_length() {
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Fotorepotasje custom post type
function fotorep_init() {
    $args = array(
    'label' => 'Fotoreportasje',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'query_var' => true,
    'menu_icon' => 'dashicons-camera',
    'taxonomies' => array('category'),
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'author',
    'thumbnail',)
        );
    register_post_type('fotorep', $args );
}
add_action('init', 'fotorep_init' );

//Creates 5 paa bakka Custom Post Type 

function fembakka_init() {
    $args = array(
    'label' => 'Fem På Bakka',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'query_var' => true,
    'menu_icon' => 'dashicons-format-gallery',
    'taxonomies' => array('category'),    
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'author',
    'thumbnail',)
        );
    register_post_type('fembakka', $args );
}
add_action('init', 'fembakka_init' );

//Creates Videoreportasje Custom Post Type 

function video_rep_init() {
    $args = array(
    'label' => 'Videoreportasje',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'query_var' => true,
    'menu_icon' => 'dashicons-video-alt2',
    'taxonomies' => array('category'),    
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'author',
    'thumbnail',)
        );
    register_post_type('videorep', $args );
}
add_action('init', 'video_rep_init' );

function add_post_types_to_loop($query) {
    if ($query->is_main_query() && $query->is_front_page()) {
        $query->set('post_type', array('post', 'fotorep', 'fotorepslideshow', 'fembakka', 'videorep'));
    }
}



add_action('pre_get_posts', 'add_post_types_to_loop');
?>