<section class="flex justify-center items-center px-5 bg-gray-50">
  <div class="flex flex-col items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="max-w-7xl flex flex-col items-center justify-between md:flex-row gap-5 md:gap-10 2xl:gap-20 text-center md:text-left">
      <h2 class="md:basis-1/2 text-3xl md:text-6xl text-center md:text-right font-semibold">
        <?php the_field('services_title') ?>
      </h2>
      <p class="md:basis-1/2 text-lg md:text-xl text-center md:text-left text-gray-500">
        <?php the_field('services_description') ?>
      </p>
    </div>
    <div class="flex flex-col md:flex-row gap-10 lg:gap-20">
      <?php
      $dk_get_posts = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'services', 'posts_per_page' => -1));
      if ($dk_get_posts->have_posts()) : ?>
        <?php while ($dk_get_posts->have_posts()) : $dk_get_posts->the_post(); ?>
          <div class="flex basis-1/3 flex-col items-center gap-5 md:gap-10">
            <img width="128" height="128" class="w-32" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            <div class="flex flex-col items-center gap-3 md:gap-5">
              <h3 class="text-2xl md:text-4xl font-semibold">
                <?php the_title(); ?>
              </h3>
              <p class="text-center max-w-md">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</section>