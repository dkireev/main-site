<?php get_header(); ?>
<main class="flex flex-col grow">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('template-parts/content', 'article');
    }
  }
  ?>
</main>
<?php get_footer(); ?>