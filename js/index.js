var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  mousewheel: true,
  keyboard: true,
  loop: true,
});
