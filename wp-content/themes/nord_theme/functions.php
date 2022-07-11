<?php
function dk_add_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dk_add_theme_support');

$version = wp_get_theme()->get('Version');

function dk_register_styles($version)
{
  wp_enqueue_style('dk-general', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  wp_enqueue_style('dk-main', get_template_directory_uri() . "/assets/main.css", array(), $version, 'all');
  wp_enqueue_style('dk-swiper', "https://unpkg.com/swiper@8.3.0/swiper-bundle.min.css", array(), null, 'all');
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

?>

<?php
add_action('wp_head', 'dk_add_googleanalytics');
function dk_add_googleanalytics()
{ ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-525ZS4NT65"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-525ZS4NT65');
  </script>
<?php } ?>