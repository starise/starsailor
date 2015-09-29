<?php
/**
 * @package    Starsailor
 * @author     Andrea Brandi
 * @copyright  Copyright (c) 2015, Andrea Brandi
 */

/* Load Solero modules */
add_theme_support('solero-jquery-cdn');
add_theme_support('solero-clean-up');
add_theme_support('solero-nav-walker');
add_theme_support('solero-relative-urls');
add_theme_support('solero-js-to-footer');
add_theme_support('solero-disable-trackbacks');
add_theme_support('solero-disable-asset-versioning');
add_theme_support('solero-google-analytics', 'UA-26195791-1');
add_theme_support(
  'solero-google-fonts',
  [
    'Lato'             => '300,400,700,900,300italic,400italic,700italic,900italic',
    'Merriweather'     => '400,700,400italic,700italic',
    'Playfair Display' => '400,400italic',
  ]
);

/**
 * Setup function. All child themes should run their setup within this function. The idea is to add/remove
 * filters and actions after the parent theme has been set up. This function provides you that opportunity.
 */
function starsailor_theme_setup()
{
  /*
   * Add a custom background to overwrite the defaults.
   * @link http://codex.wordpress.org/Custom_Backgrounds
   */
  add_theme_support(
    'custom-background',
    [
      'default-color' => '2C3E50',
      'default-image' => ''
    ]
  );

  /*
   * Add a custom header to overwrite the defaults.
   * @link http://codex.wordpress.org/Custom_Headers
   */
  add_theme_support(
    'custom-header',
    [
      'default-text-color' => 'dadada',
      'default-image'      => ''
    ]
  );
}
add_action( 'after_setup_theme', 'starsailor_theme_setup' );

/**
 * Remove/modify hooks
 */
function starsailor_clean_hooks()
{
  add_filter('hybrid_meta_template', '__return_false');
  remove_action('wp_head', 'hybrid_link_pingback', 3);
}
add_action('init', 'starsailor_clean_hooks');

/**
 * Enqueue/dequeue scripts and styles.
 */
function starsailor_scripts()
{
  wp_dequeue_style('saga-fonts');
}
add_action('wp_enqueue_scripts', 'starsailor_scripts', 11);

/**
 * Adds a custom excerpt length.
 */
function starsailor_excerpt_length($length)
{
  return 32;
}
remove_filter('excerpt_length', 'saga_excerpt_length');
add_filter('excerpt_length', 'starsailor_excerpt_length', 999);
