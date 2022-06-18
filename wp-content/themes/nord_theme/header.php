<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  <title>Nord Softworks</title>
</head>

<body class="flex flex-col min-h-screen text-base bg-gray-100 text-gray-900">
  <header class="flex justify-center">
    <div class="container flex justify-between items-center py-3 px-5 md:py-3 gap-5">
      <a href="./">
        <img src="wp-content/themes/nord_theme/assets/images/logo_full.svg" class="h-10 w-auto" height="40" alt="logo" />
      </a>
      <?php $outline = true;
      include("assets/components/button.php") ?>
    </div>
  </header>