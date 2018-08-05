'use strict';

/**
 * ScrollToID.
 * ---------------------------------------------------------------------------------------------------------------------
 */

function extJS_scrollToID() {
	let button;

	button = $('.ext-scroll');

	button.on('click', (function (e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top
		}, 500);
	}));
}

/**
 * ScrollToTop.
 * ---------------------------------------------------------------------------------------------------------------------
 */

function extJS_scrollToTop() {
	$(window).on('scroll', function () {
		let button;

		button = '#scrollToTop';

		if ($(this).scrollTop() > 400) {
			$(button).fadeIn();
		} else {
			$(button).fadeOut();
		}
	});
}

/**
 * Loading functions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$(function () {
	extJS_scrollToID();
	extJS_scrollToTop();
});