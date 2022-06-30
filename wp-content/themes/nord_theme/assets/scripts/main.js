const swiper = new Swiper(".swiper-general", {
  speed: 400,
  spaceBetween: 16,
  slidesPerView: 1,
  breakpoints: {
    768: { slidesPerView: 3 },
  },
  pagination: {
    el: ".swiper-pagination-general",
    type: "bullets",
  },
  autoplay: {
    delay: 5000,
  },
  centerInsufficientSlides: true,
});

const swiperTestimonials = new Swiper(".swiper-testimonials", {
  speed: 400,
  spaceBetween: 16,
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination-testimonials",
    type: "bullets",
  },
  autoplay: {
    delay: 5000,
  },
  centerInsufficientSlides: true,
});
