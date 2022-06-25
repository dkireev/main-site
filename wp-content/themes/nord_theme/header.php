<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '350294240509484');
    fbq('track', 'PageView');
  </script><noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=350294240509484&ev=PageView&noscript=1" /></noscript><!-- End Facebook Pixel Code -->
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
        <img width="143" height="40" class="h-10 w-auto" src="<?php echo $logo[0] ?>" alt="logo" />
      </a>
      <?php $outline = true;
      include("assets/components/button.php") ?>
    </div>
  </header>
  <main class="flex flex-col grow">