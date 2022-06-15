<?php

add_theme_support('title-tag');
add_theme_support( 'custom-logo', [] );
add_theme_support( 'post-thumbnails' );

/**
 * Remove Gutenberg Block Library CSS from loading on the frontend
 */
function remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
} 

add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

/**
 * Disable Gutenberg
 */
add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Register styles
 */
function th_register_styles() {

  // Get main theme
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('tahiti-style', get_stylesheet_uri(), [], $version, 'all');

  // Get slick themes
  wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/slick/slick.css', [], 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/js/slick/slick-theme.css', [], 'all');

}
add_action('wp_enqueue_scripts', 'th_register_styles');

/**
 * Register scripts
 */
function th_register_scripts() {

  // Enqueue jquery and jquery migrate
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), '1.11.0', true);
  wp_enqueue_script('jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '1.2.1', false);

  // Enqueue slick.js
  wp_enqueue_script('slick.js', get_template_directory_uri() . '/assets/js/slick/slick.min.js', array(), '1', false);

  // Main JS script
  $version = '1.0.0';
  wp_enqueue_script('tahiti-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);

}
add_action('wp_enqueue_scripts', 'th_register_scripts');

/**
 * Register Menu
 */
function th_register_menu()
{
    register_nav_menus(array(
        'main'        => __('Main Menu'),
        'footer'      => __('Footer Menu'),
    ));
}
add_action('after_setup_theme', 'th_register_menu');

/**
 * Custom li class
 * It can be added from appearances => menu but it is safer from here
 * (in case someone deletes it)
 */
function th_nav_add_li_classes($classes, $item, $args) {
  if(isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'th_nav_add_li_classes', 1, 3);

/**
 * Custom anchor classes
 * Same instruction as custom li classes
 */
function th_nav_add_anchor_classes($atts, $item, $args) {
  if(isset($args->anchor_class)) {
    $atts['class'] = $args->anchor_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'th_nav_add_anchor_classes', 1, 3);

/**
 * Custom Post Types
 */
require get_template_directory() . "/core/custom-post-types.php";
