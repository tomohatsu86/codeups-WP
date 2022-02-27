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

	
  $(".js-drawer").on('click',function () {
    if($('.js-drawer').hasClass('is-open')){
      $('.js-drawer-menu').fadeOut(300);
      $(this).removeClass('is-open');
      $("html").removeClass("is-fixed");
    }else{
      $('.js-drawer-menu').fadeIn(300);
      $(this).addClass('is-open');
      $("html").addClass("is-fixed");
    }
  });

	
	// ドロワーメニュー内のリンクをクリックしたらメニューを閉じる
	$(".drawer-nav-link").on("click", function() {
	let $screenwidth = $(window).width();
	let $breakpoint_md = 768;
	if ($screenwidth < $breakpoint_md){
		if($('.js-drawer').hasClass('is-open')){
			$('.js-drawer-menu').fadeOut(300);
			$('.js-drawer').removeClass('is-open');
			$("html").removeClass("is-fixed");
		}else{
			$('.js-drawer-menu').fadeIn(300);
			$('.js-drawer').addClass('is-open');
			$("html").addClass("is-fixed");
		}
		// $(".js-drawer-menu").toggleClass("is-open");
		// $(".js-drawer-open").toggleClass("is-open");
		// $("html").toggleClass("is-fixed");
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

		// 別ページの場合は以下
		var urlHash = location.hash;
		if (urlHash) {
			$('body,html').stop().scrollTop(0);
			setTimeout(function(){
				// ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
				var headerHight = 50;
				var target = $(urlHash);
				var position = target.offset().top - headerHight;
				$('body,html').stop().animate({scrollTop:position}, 800);
		}, 100);
		}

	/* 電話リンク */
	// let ua = navigator.userAgent;
	// if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
	// 	jQuery('a[href^="tel:"]')
	// 		.css("cursor", "default")
	// 		.on("click", function(e) {
	// 			e.preventDefault();
	// 	});
	// }

});

jQuery(function() {
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
			el: '.p-top-works-swiper-pagination',
			clickable: true,
		}
	}
	new Swiper('.p-top-works__swiper', worksSwipeOption);
	//---------------------------------------


	//---------------------------------------
	//制作実績詳細ページのサムネイルswiper
	//---------------------------------------
	var contents = $(".js-single-works__slider .swiper-slide").length;
	var thumbs = new Swiper('.js-single-works__thumbs', {
		slidesPerView: 2,
		spaceBetween: 24,
		// アクティブサムネイルを中央に固定表示
		centeredSlides: true,
		loop: true,
		loopedSlides: contents,
		slideToClickedSlide: true,

		// 各スライドの進行状況を監視
		// watchSlidesProgress: true,
		// ビューポートにあるスライドに表示クラスを追加
		// watchSlidesVisibility: true,

		// レスポンシブ設定
		breakpoints:{
			// 画面幅が 768px 以上の場合（window width >= 768px）
			768: {
				slidesPerView: contents,
				spaceBetween: 8,
				centeredSlides: false,
				loopedSlides: contents,
				slideToClickedSlide: true,
			}
		},
		
	});
	//---------------------------------------

	//---------------------------------------
	//制作実績詳細ページのメインswiper
	//---------------------------------------
	var slider = new Swiper('.js-single-works__slider', {
		slidesPerView: 1,
		centeredSlides: true,
		loop: true,
		loopedSlides: contents, //スライドの枚数と同じ値を指定
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		// thumbs: {
		// 	//サムネイルのスライダーを指定
		// 	swiper: thumbs
		// 	},
		});
		
		slider.controller.control = thumbs;
		thumbs.controller.control = slider;

	//---------------------------------------
});

//---------------------------------------
//アーカイブページのタブの切り替えCSSあてる
//---------------------------------------
$(function(){
	$('.js-category-list li a').each(function(){
			var $href = $(this).attr('href');
			if(location.href.match($href)) {
			$(this).addClass('current');
			} else {
			$(this).removeClass('current');
			}
	});
});
//---------------------------------------

//---------------------------------------
//MW WP formのエラー項目にCSSを追加して背景色を付ける
//---------------------------------------
$(function(){
// errorクラスのspan要素を持つ親p要素にerror-pinkクラスを適用
	$(".p-form__input:has('span.error')").addClass("error-pink");
});

});