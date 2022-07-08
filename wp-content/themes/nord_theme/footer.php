</main>
<footer class="flex justify-center text-sm  text-gray-500">
  <div class="container flex flex-col-reverse md:flex-row justify-center md:justify-between items-center gap-5 p-5">
    <p class="text-center"><?php the_field('footer_copyright'); ?></p>
    <div class="flex gap-2">
      <a class="opacity-50 hover:opacity-100 transition-opacity" href="<?php the_field('facebook_link'); ?>" target="_blank" rel="noreferrer">
        <img width="40" height="40" class="w-10" src="<?php echo bloginfo('template_url') . '/assets/images/facebook.webp' ?>" alt="facebook">
      </a>
      <a class="opacity-50 hover:opacity-100 transition-opacity" href="<?php the_field('twitter_link'); ?>" target="_blank" rel="noreferrer">
        <img width="40" height="40" class="w-10" src="<?php echo bloginfo('template_url') . '/assets/images/twitter.webp' ?>" alt="twitter">
      </a>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>

</html>