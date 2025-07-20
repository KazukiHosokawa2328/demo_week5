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

$(function () {
  //スクロール時の処理
  $("a[href^='#']:not([href='#']):not(.js-tab-link)").click(function (e) {
    e.preventDefault();
    let target = $($(this).attr("href")).offset().top;
    $("html,body").animate({ scrollTop: target - 53 }, "slow");
  });

  //コンテンツ切り替え
  $('.schedule-contents p[class != "schedule-contents-first"]').hide();
  $(".js-tab-link").click(function (e) {
    e.preventDefault();
    $(".schedule-contents p").hide();
    $($(this).attr("href")).show();
    $("li.schedule-item").removeClass("selected");
    $(this).parent().addClass("selected");
  });

  //送信ボタンの色反転
  $("#name, #seat, #email").on("input change", function () {
    let userName = $("#name").val();
    let userSeat = $("#seat").val();
    let userEmail = $("#email").val();
    const emailPattern =
      /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*.)+[a-zA-Z]{2,}$/;

    if (userName.trim() && userSeat.trim() && emailPattern.test(userEmail)) {
      $("input[type='submit']").addClass("reserve-btn");
      $("input[type='submit']").prop("disabled", false);
    } else {
      $("input[type='submit']").removeClass("reserve-btn");
    }
  });

  //ハンバーガーメニュー
    $("#js-button-drawer").on("click", function () {
    $(this).toggleClass("active");
    $(".drawer").slideToggle("fast");
    $("body").toggleClass("is-fixed");
  });
  //ハンバーガーメニュー押下時閉じる
  $(".header-nav-drawer").on("click", function () {
    $(".drawer").slideUp("fast");
    $("#js-button-drawer").removeClass("active");
    $("body").removeClass("is-fixed");
  });
});
