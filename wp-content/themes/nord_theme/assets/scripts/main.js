const swiper = new Swiper(".swiper", {
  speed: 400,
  spaceBetween: 16,
  slidesPerView: 1,
  breakpoints: {
    768: { slidesPerView: 3 },
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  centerInsufficientSlides: true,
});
