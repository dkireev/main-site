<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php the_field('services_description', 36) ?>">
  <?php wp_head() ?>
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
        <img width="143" height="40" class="h-10 w-auto" src="<?php echo $logo[0] ?>" alt="<?php bloginfo("name") ?>" />
      </a>
      <?php echo do_shortcode("[button type='outline' label='Contact us' link='/contact-us']"); ?>
    </div>
  </header>
  <main class="flex flex-col grow mt-[4.375rem]">