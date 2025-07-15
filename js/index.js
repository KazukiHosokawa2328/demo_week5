let swiper = new Swiper(".mySwiper", {
  slidesPerView: 1.2,
  centeredSlides: true,
  spaceBetween: 20,
  loop: true,
  //   loopAdditionalSlides: 2,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//コンテンツ切り替え
$(function () {
  $('.schedule-contents p[class != "schedule-contents-first"]').hide();
  $(".js-tab-link").click(function (e) {
    e.preventDefault();
    $(".schedule-contents p").hide();
    $($(this).attr("href")).show();
    $("li.schedule-item").removeClass("selected");
    $(this).parent().addClass("selected");
  });
});
