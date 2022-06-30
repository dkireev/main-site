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