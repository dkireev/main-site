<?php get_header(); ?>
<main class="flex flex-col grow">
  <section
    class="flex justify-center items-center md:h-[calc(100vh-5.25rem)] md:max-h-[48rem] px-5 bg-no-repeat bg-cover bg-center"
    style="background-image: url('wp-content/themes/nord_theme/assets/images/banner.jpeg')">
    <div class="container flex flex-col gap-10 py-20 md:max-w-4xl md:gap-20 md:items-center lg:items-start text-white">
      <div class="flex flex-col items-center lg:items-start justify-start gap-5 md:gap-10 text-center lg:text-start">
        <h1 class="text-4xl md:text-7xl lg:text-8xl max-w-xl lg:max-w-full font-semibold">We create custom Landing Pages
        </h1>
        <p class="text-lg md:text-xl max-w-md">Driven and ambitious Nord Softworks team produce customized Landing
          Pages that
          captivate
          users and compel them to take actions</p>
      </div>
      <?php include("assets/components/button.php") ?>
    </div>
  </section>
  <section class="flex justify-center items-center px-5">
    <div class="flex flex-col items-center container py-20 md:py-40 gap-10 md:gap-20">
      <div class="flex flex-col justify-between items-center md:flex-row gap-5 md:gap-10 text-center md:text-left">
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
</main>
<?php get_footer(); ?>