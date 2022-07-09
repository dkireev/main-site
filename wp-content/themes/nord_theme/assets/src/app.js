import Swiper, { Pagination, Autoplay } from "swiper";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/autoplay";

export const swiper = new Swiper(".swiper-general", {
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

export const swiperTestimonials = new Swiper(".swiper-testimonials", {
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
