<?php
/**
 * Dental Cape Cod functions and definitions
 */

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

function dental_cape_cod_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__( 'Primary Menu', 'dental-cape-cod' ),
        'footer' => esc_html__( 'Footer Menu', 'dental-cape-cod' ),
    ));
}
add_action( 'after_setup_theme', 'dental_cape_cod_setup' );

function dental_cape_cod_scripts() {
    wp_enqueue_style( 'dental-cape-cod-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_script( 'dental-cape-cod-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'dental_cape_cod_scripts' );

// Custom post type for Services
function dental_cape_cod_services_post_type() {
    register_post_type('service',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-clipboard'
        )
    );
}
add_action('init', 'dental_cape_cod_services_post_type');

// Widget areas
function dental_cape_cod_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'dental-cape-cod'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'dental-cape-cod'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'dental_cape_cod_widgets_init');
