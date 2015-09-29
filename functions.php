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
