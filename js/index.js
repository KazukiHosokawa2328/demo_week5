var swiper = new Swiper(".mySwiper", {
	cssMode: true,
	spaceBetween: 50,
	slidesPerView: 1.2,
	centeredSlides: true,
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
