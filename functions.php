<?php
require  get_template_directory() . '/bootstrap-navwalker.php';

add_theme_support('custom-background');
add_theme_support('post-thumbnails');

add_action('init', 'register_primary_menu');
function register_primary_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}

// load Google fonts
add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );
function custom_add_google_fonts() {
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Quicksand', array('bootstrap-style'), null, false);
}

// Load jQuery
add_action('wp_enqueue_scripts', 'register_jquery');
function register_jquery() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', ('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'), false, null, true );
  wp_enqueue_script('jquery');
}

// Load styles and scripts
add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');
function portfolio_theme_scripts() {
  wp_enqueue_style('portfolio-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');

  wp_enqueue_script('bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true);
  wp_enqueue_script('portfolio-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery', 'animsition-script'), '4.1.1', true);
}
