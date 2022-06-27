<?php get_header(); ?>
<section class="flex justify-center items-center mt-[4.375rem] px-5">
  <div class="container flex flex-col-reverse lg:flex-row lg:items-center py-10 lg:py-20 2xl:py-40 gap-10 2xl:gap-20">
    <div class="flex basis-1/2 flex-col gap-10 lg:gap-20 md:items-center lg:items-start">
      <div class="flex flex-col gap-5 md:gap-10 items-center lg:items-start">
        <h1 class="text-4xl md:text-7xl max-w-xl lg:max-w-full font-semibold text-center lg:text-start">
          <?php the_field('banner_title') ?>
        </h1>
        <p class="hidden md:block text-center lg:text-start text-lg md:text-xl max-w-md text-gray-500">
          <?php the_field('banner_description') ?>
        </p>
      </div>
      <?php include("assets/components/button.php") ?>
    </div>
    <img width="335" height="264" class="w-full lg:max-w-xl xl:max-w-[45.5rem]" src="<?php the_field('banner_image') ?>" alt="<?php the_field('banner_title') ?>" />
  </div>
</section>
<section class="flex justify-center items-center px-5 bg-gray-50">
  <div class="flex flex-col items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="max-w-7xl flex flex-col justify-between md:flex-row gap-5 md:gap-10 2xl:gap-20 text-center md:text-left">
      <h2 class="md:basis-1/2 text-3xl md:text-6xl font-semibold">
        <?php the_field('services_title') ?>
      </h2>
      <p class="md:basis-1/2 text-lg md:text-xl text-gray-500">
        <?php the_field('services_description') ?>
      </p>
    </div>
    <div class="flex flex-col md:flex-row gap-10 lg:gap-20">
      <?php
      $i = 1;
      while ($i <= 3) { ?>
        <div class="flex basis-1/3 flex-col items-center gap-5 md:gap-10">
          <img width="128" height="128" class="w-32" src="<?php the_field("service_image_$i") ?>" alt="<?php the_field("service_title_$i") ?>" />
          <div class="flex flex-col items-center gap-3 md:gap-5">
            <h3 class="text-2xl md:text-4xl font-semibold">
              <?php the_field("service_title_$i") ?>
            </h3>
            <p class="text-center max-w-md">
              <?php the_field("service_description_$i") ?>
            </p>
          </div>
        </div>
      <?php $i++;
      }
      ?>
    </div>
  </div>
</section>
<section class="flex justify-center items-center px-5">
  <div class="flex flex-col md:items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="max-w-7xl flex flex-col justify-between md:flex-row gap-5 md:gap-10 2xl:gap-20 text-center md:text-left">
      <h2 class="md:basis-1/2 text-3xl md:text-6xl font-semibold">
        <?php the_field('projects_title') ?>
      </h2>
      <p class="md:basis-1/2 text-lg md:text-xl text-gray-500">
        <?php the_field('projects_description') ?>
      </p>
    </div>
    <div class="swiper w-full">
      <div class="swiper-wrapper w-full">
        <?php
        $dk_get_posts = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
        if ($dk_get_posts->have_posts()) : ?>
          <?php while ($dk_get_posts->have_posts()) : $dk_get_posts->the_post(); ?>
            <div class="swiper-slide">
              <div class="grid gap-2">
                <div class="h-60 lg:h-80 rounded-lg box-content border border-gray-200 overflow-hidden">
                  <div class="h-full bg-no-repeat bg-cover bg-center md:hover:scale-105 transition-transform" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                  </div>
                </div>
                <p class="text-center md:text-start text-2xl mb-6 font-semibold">
                  <?php the_title(); ?>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata();
        endif; ?>
      </div>
      <div class="swiper-pagination" style="bottom: 0"></div>
    </div>
    <?php include("assets/components/button.php") ?>
  </div>
</section>
<section class="flex justify-center items-center px-5 bg-gray-50">
  <div class="container flex flex-col-reverse lg:flex-row lg:items-center py-10 lg:py-20 2xl:py-40 gap-10 2xl:gap-20">
    <img width="335" height="229" class="md:basis-1/2 w-full lg:max-w-xl xl:max-w-[45.5rem]" src="<?php the_field('about_image') ?>" alt="<?php the_field('about_title') ?>" />
    <div class="flex md:basis-1/2 flex-col gap-10 lg:gap-20 md:items-center lg:items-start">
      <div class="flex flex-col gap-5 md:gap-10 items-center lg:items-start">
        <h1 class="text-3xl md:text-6xl max-w-xl lg:max-w-full font-semibold text-center lg:text-start">
          <?php the_field('about_title') ?>
        </h1>
        <p class="text-center lg:text-start text-lg md:text-xl max-w-md text-gray-500">
          <?php the_field('about_text'); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>