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
      <?php include(get_theme_file_path() . "/includes/components/button.php") ?>
    </div>
    <img width="335" height="264" class="w-full lg:max-w-xl xl:max-w-[45.5rem]" src="<?php the_field('banner_image') ?>" alt="<?php the_field('banner_title') ?>" />
  </div>
</section>