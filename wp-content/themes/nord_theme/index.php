<?php get_header(); ?>
<main class="flex flex-col grow">
  <section
    class="flex justify-center items-center w-full md:h-[calc(100vh-5.25rem)] md:max-h-[48rem] px-5 bg-no-repeat bg-cover bg-center"
    style="background-image: url(/wp-content/themes/nord_theme/assets/images/banner.jpeg)">
    <div class="container flex flex-col gap-10 py-20 md:max-w-2xl md:gap-20 md:items-start text-white">
      <div class="flex flex-col gap-5 md:gap-10 text-center md:text-start">
        <h1 class="text-4xl md:text-7xl font-semibold">We create custom Landing Pages</h1>
        <p class="md:max-w-md">Driven and ambitious Nord Softworks team produce customized Landing Pages that captivate
          users and compel them to take actions</p>
      </div>
      <?php include("assets/components/button.php") ?>
    </div>
  </section>
  <section class="flex grow"></section>
</main>
<?php get_footer(); ?>