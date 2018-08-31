/**
 * Global JS for the website
 */


/**
 * Contents:
 *
 * [1]	Header graphic resizing
 */


/**
 * [1]	Header graphic resizing
 */

function mangopearHeaderGraphic() {
	jQuery('.js-header-images').each(function(){
		var jsonData = jQuery(this).data('header-images');
		var screenWidth = jQuery(window).width();

		if (screenWidth <= 350)       { var backgroundImage = jsonData.xxs; }
		else if (screenWidth <= 500)  { var backgroundImage = jsonData.xs; }
		else if (screenWidth <= 800)  { var backgroundImage = jsonData.s; }
		else if (screenWidth <= 1026) { var backgroundImage = jsonData.m; }
		else if (screenWidth <= 1500) { var backgroundImage = jsonData.l; }
		else if (screenWidth <= 2000) { var backgroundImage = jsonData.xl; }
		else if (screenWidth >= 2001) { var backgroundImage = jsonData.xxl; }

		jQuery(this).css('background-image', 'url(' + backgroundImage + ')');
	});
}


jQuery.noConflict();
jQuery(window).resize(function($) {
	mangopearHeaderGraphic();
});


jQuery(document).ready(function($){
	mangopearHeaderGraphic();


	$('.js-nav-toggle__background').on("click", function(){
		$('.js-nav-toggle__input').prop('checked', false);
	});





	/**
	 * Open modals
	 */
	
	$('.js-open-modal').on('click', function(){
		var modalToOpen = $(this).attr('data-modal');
		$('body').find('.' + modalToOpen).removeClass('is-hidden');
	});


	$('.js--modal__close, .js--modal__background').on('click', function(){
		var modalToClose = $(this).attr('data-modal');
		$('body').find('.' + modalToClose).addClass('is-hidden');
	});





	/**
	 * [3]	Add animations to main header
	 */
	
	$('.js-main-header').addClass('has-animation');


	setTimeout(function(){
		$('.js-main-header').removeClass('has-animation');
	}, 100);











	/**
	 * [4]	Expose the comment form
	 *
	 * 		@since  4.0.0
	 */
	
	$('.js-comments__reveal-form').on('click', function(){
		var commentsForm = $('.js-comments__reveal-form');


		if (commentsForm.hasClass('is-hidden')) {
			$(commentsForm).removeClass('is-hidden');
		} else {
			$(commentsForm).addClass('is-hidden');
		}
	});

});