<?php get_header(); ?>
<main class="flex flex-col grow">
  <!-- <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            the_content();
          }
        }
        ?> -->
  <section class="flex justify-center items-center px-5">
    <div class="container flex flex-col-reverse lg:flex-row lg:items-center pt-10 lg:pt-20 gap-10">
      <div class="flex basis-1/2 flex-col gap-10 lg:gap-20 md:items-center lg:items-start">
        <div class="flex flex-col gap-5 md:gap-10 items-center lg:items-start">
          <h1 class="text-4xl md:text-7xl max-w-xl lg:max-w-full font-semibold text-center lg:text-start">We
            create custom Landing
            Pages
          </h1>
          <p class="hidden md:block text-center lg:text-start text-lg md:text-xl max-w-md">Driven and ambitious Nord
            Softworks team produce
            customized Landing
            Pages that
            captivate
            users and compel them to take actions</p>
        </div>
        <?php include("assets/components/button.php") ?>
      </div>
      <!-- <div class="basis-1/2 w-full bg-contain bg-no-repeat bg-center" style="background-image: url('/wp-content/uploads/2022/06/hero.png')"></div> -->
      <img class="w-full lg:max-w-xl xl:max-w-[45.5rem]" src="/wp-content/uploads/2022/06/hero.png" />
    </div>
  </section>
  <section class="flex justify-center items-center px-5">
    <div class="flex flex-col items-center container pt-20 pb-10 md:pt-40 md:pb-20 gap-10 md:gap-20">
      <div class="flex flex-col justify-between md:flex-row gap-5 md:gap-10 text-center md:text-left">
        <h2 class="md:basis-1/2 text-3xl md:text-6xl font-semibold">We're a full-service Web agency</h2>
        <p class="md:basis-1/2 text-lg md:text-xl text-gray-500">From conducting researches of your competitors,
          designing templates,
          and
          developing
          adaptive
          Landing
          Pages to empowering your digital presence, we do it all</p>
      </div>
      <div class="flex flex-col md:flex-row gap-10 lg:gap-20">
        <div class="flex basis-1/3 flex-col items-center gap-5 md:gap-10">
          <img src="wp-content/themes/nord_theme/assets/images/designing.png" class="h-32 w-32" height="128"
            alt="desiging" />
          <div class="flex flex-col items-center gap-3 md:gap-5">
            <h3 class="text-2xl md:text-4xl font-semibold">Web design</h3>
            <p class="text-center max-w-md">Making high fidelity Figma designs, that attract customers and increase
              engagement
            </p>
          </div>
        </div>
        <div class="flex basis-1/3 flex-col items-center gap-5 md:gap-10">
          <img src="wp-content/themes/nord_theme/assets/images/coding.png" class="h-32 w-32" height="128"
            alt="coding" />
          <div class="flex flex-col items-center gap-3 md:gap-5">
            <h3 class="text-2xl md:text-4xl font-semibold">Development</h3>
            <p class="text-center max-w-md">Producing Landing Pages that adjust seamlessly to various user devices</p>
          </div>
        </div>
        <div class="flex basis-1/3 flex-col items-center gap-5 md:gap-10">
          <img src="wp-content/themes/nord_theme/assets/images/hosting.png" class="h-32 w-32" height="128"
            alt="hosting" />
          <div class="flex flex-col items-center gap-3 md:gap-5">
            <h3 class="text-2xl md:text-4xl font-semibold">Hosting</h3>
            <p class="text-center max-w-md">Hosting client's Landing Pages on the US based servers</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="flex justify-center items-center px-5">
    <div class="flex flex-col md:items-center container pt-20 pb-10 md:pt-40 md:pb-20 gap-10 md:gap-20">
      <div class="flex flex-col justify-between md:flex-row gap-5 md:gap-10 text-center md:text-left">
        <h2 class="md:basis-1/2 text-3xl md:text-6xl font-semibold">Our latest completed projects</h2>
        <p class="md:basis-1/2 text-lg md:text-xl text-gray-500">We are keen on projects that make us think out of the
          box. We're passionate
          about
          mindful websites that tell a story</p>
      </div>
      <div class="swiper w-full">
        <div class="swiper-wrapper w-full">
          <div class="swiper-slide">
            <div class="grid gap-2">
              <div class="h-60 lg:h-80 rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-full bg-no-repeat bg-cover bg-center md:hover:scale-105 transition-transform"
                  style="background-image: url('wp-content/uploads/2022/06/portfolio_1.png')">
                </div>
              </div>
              <p class="text-2xl mb-6 font-semibold">Keep Austin Sexy</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid gap-2">
              <div class="h-60 lg:h-80 rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-full bg-no-repeat bg-cover bg-center md:hover:scale-105 transition-transform"
                  style="background-image: url('wp-content/uploads/2022/06/portfolio_3.png')">
                </div>
              </div>
              <p class="text-2xl mb-6 font-semibold">iPost service</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid gap-2">
              <div class="h-60 lg:h-80 rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-full bg-no-repeat bg-cover bg-center md:hover:scale-105 transition-transform"
                  style="background-image: url('wp-content/uploads/2022/06/portfolio_2.png')">
                </div>
              </div>
              <p class="text-2xl mb-6 font-semibold">Apparel Bitcoin</p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination" style="bottom: 0"></div>
      </div>
      <?php include("assets/components/button.php") ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>