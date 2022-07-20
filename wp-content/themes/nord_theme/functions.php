<?php

add_filter('get_the_excerpt', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function dk_add_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dk_add_theme_support');

function dk_timeline_shortcode($type)
{
  extract(shortcode_atts(array(
    'type' => 'type'
  ), $type));
  $start_date = strtotime(get_field('date_of_start', 36));
  $start_year = date('Y', $start_date);
  $current_date = time();
  $current_year = date('Y', $current_date);
  $diff = $current_date - $start_date;
  $experience = round($diff / (60 * 60 * 24 * 30 * 12));
  $clients = round($diff / (60 * 60 * 24 * 30 * 3));
  $projects = round($diff / (60 * 60 * 24 * 30 * 2));
  switch ($type) {
    case "start_year":
      return $start_year;
      break;
    case "current_year":
      return $current_year;
      break;
    case "experience":
      return $experience;
      break;
    case "clients":
      return $clients;
      break;
    case "projects":
      return $projects;
      break;
    default:
      return "";
      break;
  }
}
add_shortcode('timeline', 'dk_timeline_shortcode');

$version = wp_get_theme()->get('Version');

function dk_register_styles($version)
{
  wp_enqueue_style('dk-general', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  wp_enqueue_style('dk-main', get_template_directory_uri() . "/assets/main.css", array(), $version, 'all');
  wp_enqueue_style('dk-swiper', "https://unpkg.com/swiper@8.3.1/swiper-bundle.min.css", array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'dk_register_styles');

function dk_register_scripts($version)
{
  wp_enqueue_script('dk-main', get_template_directory_uri() . "/assets/main.js", array(), $version, true);
}
add_action('wp_enqueue_scripts', 'dk_register_scripts');

function dk_dequeue_styles()
{
  wp_dequeue_style("wp-block-library");
  wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'dk_dequeue_styles');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
