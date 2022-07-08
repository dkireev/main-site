<section class="flex justify-center items-center px-5">
  <div class="flex flex-col md:items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="max-w-7xl flex flex-col items-center justify-between md:flex-row gap-5 md:gap-10 2xl:gap-20 text-center md:text-left">
      <h2 class="md:basis-1/2 text-3xl md:text-6xl text-center md:text-right font-semibold">
        <?php the_field('testimonials_title') ?>
      </h2>
      <p class="md:basis-1/2 text-lg md:text-xl text-center md:text-left text-gray-500">
        <?php the_field('testimonials_description') ?>
      </p>
    </div>
    <div class="swiper swiper-testimonials w-full">
      <div class="swiper-wrapper w-full">
        <?php
        $dk_get_posts = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'testimonials', 'posts_per_page' => -1));
        if ($dk_get_posts->have_posts()) : ?>
          <?php while ($dk_get_posts->have_posts()) : $dk_get_posts->the_post(); ?>
            <div class="swiper-slide">
              <div class="max-w-2xl mx-auto flex flex-col items-center gap-5 md:gap-10 2xl:gap-20 mb-10 2xl:mb-20">
                <img width="128" height="128" class="w-16 md:w-32" src="<?php echo bloginfo('template_url') . '/assets/images/quotes.webp' ?>" alt />
                <p class="max-h-64 overflow-hidden text-ellipsis text-center text-xl md:text-2xl">
                  <i class="block">
                    <?php echo wp_strip_all_tags(get_the_content()); ?>
                  </i>
                </p>
                <div class="flex items-center justify-center gap-5 text-lg md:text-xl">
                  <img width="40" height="40" class="w-10 rounded-full" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                  <div class="flex flex-col">
                    <p class="text-lg md:text-xl font-semibold">
                      <?php the_title(); ?>
                    </p>
                    <p class="text-base md:text-lg text-gray-500">
                      <?php echo get_the_excerpt(); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata();
        endif; ?>
      </div>
      <div class="swiper-pagination swiper-pagination-testimonials" style="bottom: 0"></div>
    </div>
  </div>
</section>