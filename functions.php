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
function custom_field_excerpt() {
    global $post;
    $text = get_field('tekst1');
    if ( 'tekst1' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $excerpt_length = 20; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '<a href="' . get_permalink() . '"> [...] </a>');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}

function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return ' ';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


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
        $query->set('post_type', array('post', 'fotorep', 'fembakka', 'videorep'));
    }
}

add_action('pre_get_posts', 'add_post_types_to_loop');

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('post','fotorep', 'nav_menu_item', 'fembakka', 'videorep'); 
    $query->set('post_type',$post_type);
    return $query;
    }
}

function add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
$items .= '<li class="menu-item menu-item-search">';
$items .= '<form method="get" class="menu-search-form" action="' . get_bloginfo('home') . '/"><p><input class="text_input" type="text" value="Søk på MagasinE" name="s" id="s" onfocus="if (this.value == \'Søk på MagasinE\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Søk på MagasinE\';}" /></p></form>';
$items .= '</li>';
	}
return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);
?>