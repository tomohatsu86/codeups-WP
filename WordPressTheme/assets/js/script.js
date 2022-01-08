// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	// jQuery(".js-drawer").on("click", function(e) {
	// 	e.preventDefault();
	// 	let targetClass = jQuery(this).attr("data-target");
	// 	jQuery("." + targetClass).toggleClass("is-checked");
	// 	return false;
	// });
	
  $("#menu-button").on('click',function () {
    if($('.js-drawer-open').hasClass('is-open')){
      $('.js-drawer-menu').fadeOut(300);
      $(this).removeClass('is-open');
      $("html").removeClass("is-fixed");
    }else{
      $('.js-drawer-menu').fadeIn(300);
      $(this).addClass('is-open');
      $("html").addClass("is-fixed");
    }
  });

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}


//---------------------------------------
//トップページファーストビューのswiper
//---------------------------------------
let mvSwipeOption = {
	loop: true,
	effect: 'fade',
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	speed: 2000,
	// pagination: {
	//   el: '.swiper-pagination',
	//   clickable: true,
	// }
}
new Swiper('.p-mv-swiper', mvSwipeOption);

//---------------------------------------

//---------------------------------------
//トップページワークスのswiper
//---------------------------------------
let worksSwipeOption = {
	loop: true,
	effect: 'slide',
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	},
	speed: 2000,
	pagination: {
		el: '.works-swiper-pagination',
		clickable: true,
	}
}
new Swiper('.works__swiper', worksSwipeOption);
//---------------------------------------


//---------------------------------------
//制作実績詳細ページのサムネイルswiper
//---------------------------------------
var thumbs = new Swiper('.single-works__thumbs', {
	slidesPerView: 2,
	spaceBetween: 24,
	// アクティブサムネイルを中央に固定表示
	centeredSlides: true,
	loop: true,
	loopedSlides: 8,
	slideToClickedSlide: true,

	// 各スライドの進行状況を監視
	// watchSlidesProgress: true,
	// ビューポートにあるスライドに表示クラスを追加
	// watchSlidesVisibility: true,

	// レスポンシブ設定
	breakpoints:{
		// 画面幅が 768px 以上の場合（window width >= 768px）
		768: {
			slidesPerView: 8,
			spaceBetween: 8,
			centeredSlides: false,
			loop: false
		}
	},
	
});
//---------------------------------------

//---------------------------------------
//制作実績詳細ページのメインswiper
//---------------------------------------
var slider = new Swiper('.single-works__slider', {
	slidesPerView: 1,
	centeredSlides: true,
	loop: true,
	loopedSlides: 8, //スライドの枚数と同じ値を指定
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// thumbs: {
	// //サムネイルのスライダーを指定
	// swiper: thumbs
	// },
});

slider.controller.control = thumbs;
thumbs.controller.control = slider;

//---------------------------------------


});


});
