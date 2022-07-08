<?php
function dk_add_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dk_add_theme_support');

function dk_register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('dk-general', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  wp_enqueue_style('dk-main', get_template_directory_uri() . "/assets/styles/main.css", array(), '1.0', 'all');
  wp_enqueue_style('dk-swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.css", array(), '8', 'all');
}
add_action('wp_enqueue_scripts', 'dk_register_styles');

function dk_register_scripts()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('dk-swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.js", array(), '8', true);
  wp_enqueue_script('dk-main', get_template_directory_uri() . "/assets/scripts/main.js", array(), $version, true);
}
add_action('wp_enqueue_scripts', 'dk_register_scripts');
?>

<?php
add_action('wp_head', 'dk_add_googleanalytics');
function dk_add_googleanalytics()
{ ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-232512258-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-232512258-1');
  </script>
<?php } ?>