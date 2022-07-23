<?php
/*
Template Name: Secondary Page
*/
?>
<?php get_header(); ?>
<section class="flex justify-center items-center px-5">
  <div class="flex flex-col md:items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="w-full">
      <?php echo do_shortcode("[ninja_form id=1 class='rounded-md']"); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>