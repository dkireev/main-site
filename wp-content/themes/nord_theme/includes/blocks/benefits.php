<section class="flex justify-center items-center px-5 bg-gray-50">
  <div class="flex flex-col md:items-center container py-10 lg:py-20 2xl:py-40 gap-10 md:gap-20">
    <div class="w-full max-w-7xl flex flex-col items-center justify-between md:flex-row gap-5 md:gap-10 2xl:gap-20 text-center md:text-left">
      <h2 class="md:basis-1/2 text-3xl md:text-6xl text-center md:text-right font-semibold">
        <?php the_field('benefits_title') ?>
      </h2>
      <p class="md:basis-1/2 text-lg md:text-xl text-gray-500 text-center md:text-left">
        <?php the_field('benefits_description') ?>
      </p>
    </div>
    <div class="flex flex-col lg:flex-row items-center gap-10 md:gap-20">
      <img width="335" height="253" class="w-full lg:w-1/2 lg:basis-1/2 max-w-[45.5rem]" src="<?php the_field('benefits_image') ?>" alt="<?php the_field('benefits_title') ?>" />
      <div class="flex grow flex-col md:basis-1/2 gap-10 lg:gap-20">
        <?php
        $dk_get_posts = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'benefits', 'posts_per_page' => -1));
        if ($dk_get_posts->have_posts()) : ?>
          <?php while ($dk_get_posts->have_posts()) : $dk_get_posts->the_post(); ?>
            <div class="flex flex-col md:flex-row items-center gap-5 md:gap-10 2xl:gap-20">
              <div class="flex flex-col items-center">
                <h3 class="text-7xl md:text-9xl text-gray-500">
                  <?php echo get_the_excerpt(); ?>
                </h3>
                <p class="text-center text-lg font-semibold"><?php the_title(); ?></p>
              </div>
              <p class="text-center md:text-left">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
              </p>
            </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata();
        endif; ?>
      </div>
    </div>
    <?php include(get_theme_file_path() . "/includes/components/button.php") ?>
  </div>
</section>