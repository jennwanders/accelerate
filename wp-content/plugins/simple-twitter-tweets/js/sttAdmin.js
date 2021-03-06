/*global jQuery:false */
jQuery(document).ready(function($) {

	'use strict';

	// USe function so we can recall on save
	function updateColorPicker(){
		// Checks if the color picker widget exists in jQuery UI
		// If it exists then initialize the WordPress color picker on our text input field
		if( typeof jQuery.wp === 'object' && typeof jQuery.wp.wpColorPicker === 'function' ){
			var sttOptions = {
				// you can declare a default color here,
				// or in the data-default-color attribute on the input
				defaultColor: false,
				// a callback to fire whenever the color changes to a valid color
			//	 change: function(event, ui){},
				// a callback to fire when the input is emptied or an invalid color
			//	clear: function() {},
				// hide the color picker controls on load
				hide: true,
				// show a group of common colors beneath the square
				// or, supply an array of colors to customize further
				palettes: true
			};
			jQuery( '.intentColor' ).wpColorPicker(sttOptions);
		} else {
			// We use farbtastic if the WordPress color picker widget doesn't exist
			jQuery( '#colorpicker' ).farbtastic( 'intentColor' );
		}
	}
	updateColorPicker();

	// Widget Button reveals - close onLoad
	// $('.secrets > div, .avatar > div, .twitterFollow > div, .modTime > div, .twitterIntents > div').hide();
	// Reveal/Hide onClick and change arrow direction
	$(document).on('click', '.secrets h4, .avatar h4, .twitterFollow h4, .modTime h4, .twitterIntents h4', function() {
		// var tFollow = $(this).next('div');
		$(this).next('div').addClass('open');
		$(this).next('div').slideToggle('fast', function() {
			if(!$(this).is(':hidden')) {
				$(this).siblings('h4').children('span').html('&#9650;');
			}else{
				$(this).removeClass('open');
				$(this).siblings('h4').children('span').html('&#9660;');
			}
		});
	});


	function savedIt(e, xhr, settings){
		// settings.data.search('action=save-widget') != -1

		if( $('.secrets > div, .avatar > div, .twitterFollow > div, .modTime > div, .twitterIntents > div').hasClass('open') ){
			// Do nothing
		}else{
			// reset toggles - clean view
			// $('.secrets > div, .avatar > div, .twitterFollow > div, .modTime > div, .twitterIntents > div').slideUp();
			$('.secrets > div, .avatar > div, .twitterFollow > div, .modTime > div, .twitterIntents > div').hide();
			$('.secrets h4 > span, .avatar h4 > span, .twitterFollow h4 > span, .modTime h4 > span, .twitterIntents h4 > span').html('&#9660;');
		}


		// re-initiate the colour picker
		$('.intentColor .wp-picker-container').remove();
		updateColorPicker();
	}

	// // Widget - Auto Ajax Saved
	$(document).ajaxSuccess(function(e, xhr, settings) {
		savedIt(e, xhr, settings);
	}); // END AJAX success


}); // END READY