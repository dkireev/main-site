<section class="flex justify-center items-center px-5">
  <div class="flex flex-col md:items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="max-w-7xl flex flex-col items-center justify-between md:flex-row gap-5 md:gap-10 2xl:gap-20 text-center md:text-left">
      <h2 class="md:basis-1/2 text-3xl md:text-6xl text-center md:text-right font-semibold">
        <?php the_field('projects_title') ?>
      </h2>
      <p class="md:basis-1/2 text-lg md:text-xl text-center md:text-left text-gray-500">
        <?php the_field('projects_description') ?>
      </p>
    </div>
    <div class="swiper swiper-general w-full">
      <div class="swiper-wrapper w-full">
        <?php
        $dk_get_posts = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'portfolio', 'posts_per_page' => -1));
        if ($dk_get_posts->have_posts()) : ?>
          <?php while ($dk_get_posts->have_posts()) : $dk_get_posts->the_post(); ?>
            <div class="swiper-slide">
              <div class="flex flex-col gap-2 mb-5 md:mb-10 2xl:mb-20">
                <div class="h-60 lg:h-80 rounded-lg box-content border border-gray-200 overflow-hidden">
                  <div class="h-full bg-no-repeat bg-cover bg-center md:hover:scale-105 transition-transform" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                  </div>
                </div>
                <p class="text-center md:text-start text-2xl font-semibold">
                  <?php the_title(); ?>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata();
        endif; ?>
      </div>
      <div class="swiper-pagination swiper-pagination-general" style="bottom: 0"></div>
    </div>
    <?php include(get_theme_file_path() . "/includes/components/button.php") ?>
  </div>
</section>