'use strict';

var app = {};

app.init = function () {
	app.navSearch();
	app.accordion();
	app.mobileNav();
	app.breadcrumbs();
	app.readMore();
	app.mobileLP();
	app.carousel();
};

app.navSearch = function () {
	$('.search').on('click', function () {
		$('.searchPane').slideToggle('fast');
		$('.navSearchIcon').toggleClass('toggleIcon');
	});
};

app.accordion = function () {
	if ($(window).width() < 767) {

		$('.accordionMobile').addClass('accordion');
	} else {
		$('.accordionMobile').removeClass('accordion');
	}

	$('.accordion .accordionItem').on('click', function () {

		if ($(this).hasClass('show')) {
			$('.accordionText').slideUp();
			$('.accordionItem').removeClass('show');
		} else {
			$('.accordionText').slideUp();
			$('.accordionItem').removeClass('show');
			$(this).find('.accordionText').slideDown();
			$(this).addClass('show');
		}
	});
};

app.mobileNav = function () {
	$('.custom-menu-primary').addClass('js-enabled');

	/* Mobile button with three lines icon */
	$('.custom-menu-primary .hs-menu-wrapper').before('<div class="mobile-trigger"><i></i></div>');

	// Submenu Icon
	$('.custom-menu-primary .flyouts .hs-item-has-children > a').after('<div class="child-trigger"><span></span><span></span></div>');

	$('.mobile-trigger').click(function () {
		$(this).next('.custom-menu-primary .hs-menu-wrapper').slideToggle(250);
		$(this).parent().parent().parent().parent().toggleClass('open');
		$('body').toggleClass('mobile-open');
		$('.child-trigger').removeClass('child-open');
		$('.hs-menu-children-wrapper').slideUp(250);
		return false;
	});

	// Child Trigger
	$('.child-trigger').click(function () {
		$(this).parent().siblings('.hs-item-has-children').find('.child-trigger').removeClass('child-open');
		$(this).parent().siblings('.hs-item-has-children').find('.hs-menu-children-wrapper').slideUp(250);
		$(this).next('.hs-menu-children-wrapper').slideToggle(250);
		$(this).next('.hs-menu-children-wrapper').children('.hs-item-has-children').find('.hs-menu-children-wrapper').slideUp(250);
		$(this).next('.hs-menu-children-wrapper').children('.hs-item-has-children').find('.child-trigger').removeClass('child-open');
		$(this).toggleClass('child-open');
		return false;
	});
};

app.breadcrumbs = function () {
	$('<li>Home</li>').insertBefore('.breadcrumbs li:first-child');
};

app.readMore = function () {
	$('.reachGoals .continue').on('click', function (e) {
		e.preventDefault();
		$('.reachGoals .continue').remove();
		$('.hiddenDesc').addClass('readAll');
	});
};

app.mobileLP = function () {
	$('.readMoreDiv').on('click', function () {
		$('.lpContentText').slideToggle();
		$('.landingPage a.readMore').toggleClass('readMoreOpen');
	});
};

app.carousel = function () {
	$('span#hs_cos_wrapper_Testimonials').addClass('main-carousel');
	$('span#hs_cos_wrapper_Testimonials > div').addClass('carousel-cell');

	if ($(window).width() < 767) {
		$('.main-carousel').flickity({
			contain: true,
			wrapAround: true,
			adaptiveHeight: true
		});
	} else {
		$('.main-carousel').flickity({
			contain: true,
			wrapAround: true
		});
	}
};

$(document).ready(function () {
	app.init();
});