<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1JV4KBGPMH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-1JV4KBGPMH');
  </script>
</head>

<body class="flex flex-col min-h-screen text-base bg-white text-gray-900">
  <header class="flex fixed z-10 w-full justify-center px-5 bg-white shadow">
    <div class="container flex justify-between items-center py-3 md:py-3 gap-5">
      <a href="/">
        <?php
        if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        }
        ?>
        <img src="<?php echo $logo[0] ?>" class="h-10 w-auto" width="143" height="40" alt="logo" />
      </a>
      <?php $outline = true;
      include("assets/components/button.php") ?>
    </div>
  </header>
  <main class="flex flex-col grow">