<?php


//function load_in_css() { //
  wp_enqueue_style( 'style', get_stylesheet_uri() );
// } add_action(' wp_enqueue_style', 'load_in_css'); //

function theme_add_bootstrap() {
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
  }

  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

  add_theme_support( 'post-thumbnails' );

add_theme_support( 'menus' );

function mytheme_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 )
?>
