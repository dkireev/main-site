import Swiper, { Pagination, Autoplay } from "swiper";
import LazyLoad from "vanilla-lazyload";

new Swiper(".swiper-general", {
  modules: [Pagination, Autoplay],
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
new Swiper(".swiper-testimonials", {
  modules: [Pagination, Autoplay],
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

const lazyLoadInstance = new LazyLoad();
lazyLoadInstance.update();
