/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */


jQuery( document ).ready(function($) {
	"use strict";

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );

	//Banner slider
	wp.customize( 'banner_height', function( value ) {
		value.bind( function( newval ) {
			$( '#banner' ).height( newval + 'vh');
		} );
	} );

	//Break One slider
	wp.customize( 'break_one_height', function( value ) {
		value.bind( function( newval ) {
			$( '#break-1' ).height( newval + 'vh');
		} );
	} );

	//Break Two slider
	wp.customize( 'break_two_height', function( value ) {
		value.bind( function( newval ) {
			$( '#break-2' ).height( newval + 'vh');
		} );
	} );

	//Box Width slider
	wp.customize( 'box_width', function( value ) {
		value.bind( function( newval ) {
			$( '.container-flex' ).css( "maxWidth", ( newval + "px" ));
		} );
	} );

	//Title Alignment
	wp.customize( 'post_title_alignment', function( value ) {
		value.bind( function( newval ) {
			$( 'h1.entry-title' ).css( 'text-align', newval );
		} );
	} );

	// /**
	//  * Sortable Repeater Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// // Update the values for all our input fields and initialise the sortable repeater
	// $('.sortable_repeater_control').each(function() {
	// 	// If there is an existing customizer value, populate our rows
	// 	var defaultValuesArray = $(this).find('.customize-control-sortable-repeater').val().split(',');
	// 	var numRepeaterItems = defaultValuesArray.length;

	// 	if(numRepeaterItems > 0) {
	// 		// Add the first item to our existing input field
	// 		$(this).find('.repeater-input').val(defaultValuesArray[0]);
	// 		// Create a new row for each new value
	// 		if(numRepeaterItems > 1) {
	// 			var i;
	// 			for (i = 1; i < numRepeaterItems; ++i) {
	// 				caperAppendRow($(this), defaultValuesArray[i]);
	// 			}
	// 		}
	// 	}
	// });

	// // Make our Repeater fields sortable
	// $(this).find('.sortable_repeater.sortable').sortable({
	// 	update: function(event, ui) {
	// 		caperGetAllInputs($(this).parent());
	// 	}
	// });

	// // Remove item starting from it's parent element
	// $('.sortable_repeater.sortable').on('click', '.customize-control-sortable-repeater-delete', function(event) {
	// 	event.preventDefault();
	// 	var numItems = $(this).parent().parent().find('.repeater').length;

	// 	if(numItems > 1) {
	// 		$(this).parent().slideUp('fast', function() {
	// 			var parentContainer = $(this).parent().parent();
	// 			$(this).remove();
	// 			caperGetAllInputs(parentContainer);
	// 		})
	// 	}
	// 	else {
	// 		$(this).parent().find('.repeater-input').val('');
	// 		caperGetAllInputs($(this).parent().parent().parent());
	// 	}
	// });

	// // Add new item
	// $('.customize-control-sortable-repeater-add').click(function(event) {
	// 	event.preventDefault();
	// 	caperAppendRow($(this).parent());
	// 	caperGetAllInputs($(this).parent());
	// });

	// // Refresh our hidden field if any fields change
	// $('.sortable_repeater.sortable').change(function() {
	// 	caperGetAllInputs($(this).parent());
	// })

	// // Add https:// to the start of the URL if it doesn't have it
	// $('.sortable_repeater.sortable').on('blur', '.repeater-input', function() {
	// 	var url = $(this);
	// 	var val = url.val();
	// 	if(val && !val.match(/^.+:\/\/.*/)) {
	// 		// Important! Make sure to trigger change event so Customizer knows it has to save the field
	// 		url.val('https://' + val).trigger('change');
	// 	}
	// });

	// // Append a new row to our list of elements
	// function caperAppendRow($element, defaultValue = '') {
	// 	var newRow = '<div class="repeater" style="display:none"><input type="text" value="' + defaultValue + '" class="repeater-input" placeholder="https://" /><span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a></div>';

	// 	$element.find('.sortable').append(newRow);
	// 	$element.find('.sortable').find('.repeater:last').slideDown('slow', function(){
	// 		$(this).find('input').focus();
	// 	});
	// }

	// // Get the values from the repeater input fields and add to our hidden field
	// function caperGetAllInputs($element) {
	// 	var inputValues = $element.find('.repeater-input').map(function() {
	// 		return $(this).val();
	// 	}).toArray();
	// 	// Add all the values from our repeater fields to the hidden field (which is the one that actually gets saved)
	// 	$element.find('.customize-control-sortable-repeater').val(inputValues);
	// 	// Important! Make sure to trigger change event so Customizer knows it has to save the field
	// 	$element.find('.customize-control-sortable-repeater').trigger('change');
	// }

	// /**
	//  * Slider Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// // Set our slider defaults and initialise the slider
	// $('.slider-custom-control').each(function(){
	// 	var sliderValue = $(this).find('.customize-control-slider-value').val();
	// 	var newSlider = $(this).find('.slider');
	// 	var sliderMinValue = parseFloat(newSlider.attr('slider-min-value'));
	// 	var sliderMaxValue = parseFloat(newSlider.attr('slider-max-value'));
	// 	var sliderStepValue = parseFloat(newSlider.attr('slider-step-value'));

	// 	newSlider.slider({
	// 		value: sliderValue,
	// 		min: sliderMinValue,
	// 		max: sliderMaxValue,
	// 		step: sliderStepValue,
	// 		change: function(e,ui){
	// 			// Important! When slider stops moving make sure to trigger change event so Customizer knows it has to save the field
	// 			$(this).parent().find('.customize-control-slider-value').trigger('change');
	//       }
	// 	});
	// });

	// // Change the value of the input field as the slider is moved
	// $('.slider').on('slide', function(event, ui) {
	// 	$(this).parent().find('.customize-control-slider-value').val(ui.value);
	// });

	// // Reset slider and input field back to the default value
	// $('.slider-reset').on('click', function() {
	// 	var resetValue = $(this).attr('slider-reset-value');
	// 	$(this).parent().find('.customize-control-slider-value').val(resetValue);
	// 	$(this).parent().find('.slider').slider('value', resetValue);
	// });

	// // Update slider if the input field loses focus as it's most likely changed
	// $('.customize-control-slider-value').blur(function() {
	// 	var resetValue = $(this).val();
	// 	var slider = $(this).parent().find('.slider');
	// 	var sliderMinValue = parseInt(slider.attr('slider-min-value'));
	// 	var sliderMaxValue = parseInt(slider.attr('slider-max-value'));

	// 	// Make sure our manual input value doesn't exceed the minimum & maxmium values
	// 	if(resetValue < sliderMinValue) {
	// 		resetValue = sliderMinValue;
	// 		$(this).val(resetValue);
	// 	}
	// 	if(resetValue > sliderMaxValue) {
	// 		resetValue = sliderMaxValue;
	// 		$(this).val(resetValue);
	// 	}
	// 	$(this).parent().find('.slider').slider('value', resetValue);
	// });

	// /**
	//  * Single Accordion Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// $('.single-accordion-toggle').click(function() {
	// 	var $accordionToggle = $(this);
	// 	$(this).parent().find('.single-accordion').slideToggle('slow', function() {
	// 		$accordionToggle.toggleClass('single-accordion-toggle-rotate', $(this).is(':visible'));
	// 	});
	// });

	// /**
	//  * Image Checkbox Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// $('.multi-image-checkbox').on('change', function () {
	//   caperGetAllImageCheckboxes($(this).parent().parent());
	// });

	// // Get the values from the checkboxes and add to our hidden field
	// function caperGetAllImageCheckboxes($element) {
	//   var inputValues = $element.find('.multi-image-checkbox').map(function() {
	//     if( $(this).is(':checked') ) {
	//       return $(this).val();
	//     }
	//   }).toArray();
	//   // Important! Make sure to trigger change event so Customizer knows it has to save the field
	//   $element.find('.customize-control-multi-image-checkbox').val(inputValues).trigger('change');
	// }

	// /**
	//  * Pill Checkbox Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// $( ".pill_checkbox_control .sortable" ).sortable({
	// 	placeholder: "pill-ui-state-highlight",
	// 	update: function( event, ui ) {
	// 		caperGetAllPillCheckboxes($(this).parent());
	// 	}
	// });

	// $('.pill_checkbox_control .sortable-pill-checkbox').on('change', function () {
	// 	caperGetAllPillCheckboxes($(this).parent().parent().parent());
	// });

	// // Get the values from the checkboxes and add to our hidden field
	// function caperGetAllPillCheckboxes($element) {
	// 	var inputValues = $element.find('.sortable-pill-checkbox').map(function() {
	// 		if( $(this).is(':checked') ) {
	// 			return $(this).val();
	// 		}
	// 	}).toArray();
	// 	$element.find('.customize-control-sortable-pill-checkbox').val(inputValues).trigger('change');
	// }

	// /**
	//  * Dropdown Select2 Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// $('.customize-control-dropdown-select2').each(function(){
	// 	$('.customize-control-select2').select2({
	// 		allowClear: true
	// 	});
	// });

	// $(".customize-control-select2").on("change", function() {
	// 	var select2Val = $(this).val();
	// 	$(this).parent().find('.customize-control-dropdown-select2').val(select2Val).trigger('change');
	// });


	// /**
	//  * TinyMCE Custom Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// $('.customize-control-tinymce-editor').each(function(){
	// 	// Get the toolbar strings that were passed from the PHP Class
	// 	var tinyMCEToolbar1String = _wpCustomizeSettings.controls[$(this).attr('id')].capertinymcetoolbar1;
	// 	var tinyMCEToolbar2String = _wpCustomizeSettings.controls[$(this).attr('id')].capertinymcetoolbar2;
	// 	var tinyMCEMediaButtons = _wpCustomizeSettings.controls[$(this).attr('id')].capermediabuttons;

	// 	wp.editor.initialize( $(this).attr('id'), {
	// 		tinymce: {
	// 			wpautop: true,
	// 			toolbar1: tinyMCEToolbar1String,
	// 			toolbar2: tinyMCEToolbar2String
	// 		},
	// 		quicktags: true,
	// 		mediaButtons: tinyMCEMediaButtons
	// 	});
	// });
	// $(document).on( 'tinymce-editor-init', function( event, editor ) {
	// 	editor.on('change', function(e) {
	// 		tinyMCE.triggerSave();
	// 		$('#'+editor.id).trigger('change');
	// 	});
	// });

	// /**
	//  * WP ColorPicker Alpha Color Picker Control
	//  *
	//  * @author Anthony Hortin <http://maddisondesigns.com>
	//  * @license http://www.gnu.org/licenses/gpl-2.0.html
	//  * @link https://github.com/maddisondesigns
	//  */

	// // Manually initialise the wpColorPicker controls so we can add the color picker palette
	// $('.wpcolorpicker-alpha-color-picker').each(function( i, obj ) {
	// 	var paletteColors = _wpCustomizeSettings.controls[$(this).attr('id')].colorpickerpalette;
	// 	var options = {
	// 		palettes: paletteColors
	// 	};
	// 	$(obj).wpColorPicker( options );
	// } );

	// /**
 	//  * Alpha Color Picker Custom Control
 	//  *
 	//  * @author Braad Martin <http://braadmartin.com>
 	//  * @license http://www.gnu.org/licenses/gpl-3.0.html
 	//  * @link https://github.com/BraadMartin/components/tree/master/customizer/alpha-color-picker
 	//  */

	// // Loop over each control and transform it into our color picker.
	// $( '.alpha-color-control' ).each( function() {

	// 	// Scope the vars.
	// 	var $control, startingColor, paletteInput, showOpacity, defaultColor, palette,
	// 		colorPickerOptions, $container, $alphaSlider, alphaVal, sliderOptions;

	// 	// Store the control instance.
	// 	$control = $( this );

	// 	// Get a clean starting value for the option.
	// 	startingColor = $control.val().replace( /\s+/g, '' );

	// 	// Get some data off the control.
	// 	paletteInput = $control.attr( 'data-palette' );
	// 	showOpacity  = $control.attr( 'data-show-opacity' );
	// 	defaultColor = $control.attr( 'data-default-color' );

	// 	// Process the palette.
	// 	if ( paletteInput.indexOf( '|' ) !== -1 ) {
	// 		palette = paletteInput.split( '|' );
	// 	} else if ( 'false' == paletteInput ) {
	// 		palette = false;
	// 	} else {
	// 		palette = true;
	// 	}

	// 	// Set up the options that we'll pass to wpColorPicker().
	// 	colorPickerOptions = {
	// 		change: function( event, ui ) {
	// 			var key, value, alpha, $transparency;

	// 			key = $control.attr( 'data-customize-setting-link' );
	// 			value = $control.wpColorPicker( 'color' );

	// 			// Set the opacity value on the slider handle when the default color button is clicked.
	// 			if ( defaultColor == value ) {
	// 				alpha = acp_get_alpha_value_from_color( value );
	// 				$alphaSlider.find( '.ui-slider-handle' ).text( alpha );
	// 			}

	// 			// Send ajax request to wp.customize to trigger the Save action.
	// 			wp.customize( key, function( obj ) {
	// 				obj.set( value );
	// 			});

	// 			$transparency = $container.find( '.transparency' );

	// 			// Always show the background color of the opacity slider at 100% opacity.
	// 			$transparency.css( 'background-color', ui.color.toString( 'no-alpha' ) );
	// 		},
	// 		palettes: palette // Use the passed in palette.
	// 	};

	// 	// Create the colorpicker.
	// 	$control.wpColorPicker( colorPickerOptions );

	// 	$container = $control.parents( '.wp-picker-container:first' );

	// 	// Insert our opacity slider.
	// 	$( '<div class="alpha-color-picker-container">' +
	// 			'<div class="min-click-zone click-zone"></div>' +
	// 			'<div class="max-click-zone click-zone"></div>' +
	// 			'<div class="alpha-slider"></div>' +
	// 			'<div class="transparency"></div>' +
	// 		'</div>' ).appendTo( $container.find( '.wp-picker-holder' ) );

	// 	$alphaSlider = $container.find( '.alpha-slider' );

	// 	// If starting value is in format RGBa, grab the alpha channel.
	// 	alphaVal = acp_get_alpha_value_from_color( startingColor );

	// 	// Set up jQuery UI slider() options.
	// 	sliderOptions = {
	// 		create: function( event, ui ) {
	// 			var value = $( this ).slider( 'value' );

	// 			// Set up initial values.
	// 			$( this ).find( '.ui-slider-handle' ).text( value );
	// 			$( this ).siblings( '.transparency ').css( 'background-color', startingColor );
	// 		},
	// 		value: alphaVal,
	// 		range: 'max',
	// 		step: 1,
	// 		min: 0,
	// 		max: 100,
	// 		animate: 300
	// 	};

	// 	// Initialize jQuery UI slider with our options.
	// 	$alphaSlider.slider( sliderOptions );

	// 	// Maybe show the opacity on the handle.
	// 	if ( 'true' == showOpacity ) {
	// 		$alphaSlider.find( '.ui-slider-handle' ).addClass( 'show-opacity' );
	// 	}

	// 	// Bind event handlers for the click zones.
	// 	$container.find( '.min-click-zone' ).on( 'click', function() {
	// 		acp_update_alpha_value_on_color_control( 0, $control, $alphaSlider, true );
	// 	});
	// 	$container.find( '.max-click-zone' ).on( 'click', function() {
	// 		acp_update_alpha_value_on_color_control( 100, $control, $alphaSlider, true );
	// 	});

	// 	// Bind event handler for clicking on a palette color.
	// 	$container.find( '.iris-palette' ).on( 'click', function() {
	// 		var color, alpha;

	// 		color = $( this ).css( 'background-color' );
	// 		alpha = acp_get_alpha_value_from_color( color );

	// 		acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );

	// 		// Sometimes Iris doesn't set a perfect background-color on the palette,
	// 		// for example rgba(20, 80, 100, 0.3) becomes rgba(20, 80, 100, 0.298039).
	// 		// To compensante for this we round the opacity value on RGBa colors here
	// 		// and save it a second time to the color picker object.
	// 		if ( alpha != 100 ) {
	// 			color = color.replace( /[^,]+(?=\))/, ( alpha / 100 ).toFixed( 2 ) );
	// 		}

	// 		$control.wpColorPicker( 'color', color );
	// 	});

	// 	// Bind event handler for clicking on the 'Clear' button.
	// 	$container.find( '.button.wp-picker-clear' ).on( 'click', function() {
	// 		var key = $control.attr( 'data-customize-setting-link' );

	// 		// The #fff color is delibrate here. This sets the color picker to white instead of the
	// 		// defult black, which puts the color picker in a better place to visually represent empty.
	// 		$control.wpColorPicker( 'color', '#ffffff' );

	// 		// Set the actual option value to empty string.
	// 		wp.customize( key, function( obj ) {
	// 			obj.set( '' );
	// 		});

	// 		acp_update_alpha_value_on_alpha_slider( 100, $alphaSlider );
	// 	});

	// 	// Bind event handler for clicking on the 'Default' button.
	// 	$container.find( '.button.wp-picker-default' ).on( 'click', function() {
	// 		var alpha = acp_get_alpha_value_from_color( defaultColor );

	// 		acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
	// 	});

	// 	// Bind event handler for typing or pasting into the input.
	// 	$control.on( 'input', function() {
	// 		var value = $( this ).val();
	// 		var alpha = acp_get_alpha_value_from_color( value );

	// 		acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
	// 	});

	// 	// Update all the things when the slider is interacted with.
	// 	$alphaSlider.slider().on( 'slide', function( event, ui ) {
	// 		var alpha = parseFloat( ui.value ) / 100.0;

	// 		acp_update_alpha_value_on_color_control( alpha, $control, $alphaSlider, false );

	// 		// Change value shown on slider handle.
	// 		$( this ).find( '.ui-slider-handle' ).text( ui.value );
	// 	});

	// });

	// /**
	//  * Override the stock color.js toString() method to add support for outputting RGBa or Hex.
	//  */
	// Color.prototype.toString = function( flag ) {

	// 	// If our no-alpha flag has been passed in, output RGBa value with 100% opacity.
	// 	// This is used to set the background color on the opacity slider during color changes.
	// 	if ( 'no-alpha' == flag ) {
	// 		return this.toCSS( 'rgba', '1' ).replace( /\s+/g, '' );
	// 	}

	// 	// If we have a proper opacity value, output RGBa.
	// 	if ( 1 > this._alpha ) {
	// 		return this.toCSS( 'rgba', this._alpha ).replace( /\s+/g, '' );
	// 	}

	// 	// Proceed with stock color.js hex output.
	// 	var hex = parseInt( this._color, 10 ).toString( 16 );
	// 	if ( this.error ) { return ''; }
	// 	if ( hex.length < 6 ) {
	// 		for ( var i = 6 - hex.length - 1; i >= 0; i-- ) {
	// 			hex = '0' + hex;
	// 		}
	// 	}

	// 	return '#' + hex;
	// };

	// /**
	//  * Given an RGBa, RGB, or hex color value, return the alpha channel value.
	//  */
	// function acp_get_alpha_value_from_color( value ) {
	// 	var alphaVal;

	// 	// Remove all spaces from the passed in value to help our RGBa regex.
	// 	value = value.replace( / /g, '' );

	// 	if ( value.match( /rgba\(\d+\,\d+\,\d+\,([^\)]+)\)/ ) ) {
	// 		alphaVal = parseFloat( value.match( /rgba\(\d+\,\d+\,\d+\,([^\)]+)\)/ )[1] ).toFixed(2) * 100;
	// 		alphaVal = parseInt( alphaVal );
	// 	} else {
	// 		alphaVal = 100;
	// 	}

	// 	return alphaVal;
	// }

	// /**
	//  * Force update the alpha value of the color picker object and maybe the alpha slider.
	//  */
	//  function acp_update_alpha_value_on_color_control( alpha, $control, $alphaSlider, update_slider ) {
	// 	var iris, colorPicker, color;

	// 	iris = $control.data( 'a8cIris' );
	// 	colorPicker = $control.data( 'wpWpColorPicker' );

	// 	// Set the alpha value on the Iris object.
	// 	iris._color._alpha = alpha;

	// 	// Store the new color value.
	// 	color = iris._color.toString();

	// 	// Set the value of the input.
	// 	$control.val( color );

	// 	// Update the background color of the color picker.
	// 	colorPicker.toggler.css({
	// 		'background-color': color
	// 	});

	// 	// Maybe update the alpha slider itself.
	// 	if ( update_slider ) {
	// 		acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
	// 	}

	// 	// Update the color value of the color picker object.
	// 	$control.wpColorPicker( 'color', color );
	// }

	// /**
	//  * Update the slider handle position and label.
	//  */
	// function acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider ) {
	// 	$alphaSlider.slider( 'value', alpha );
	// 	$alphaSlider.find( '.ui-slider-handle' ).text( alpha.toString() );
	// }

});

/**
 * Remove attached events from the Upsell Section to stop panel from being able to open/close
 */
// ( function( $, api ) {
// 	api.sectionConstructor['caper-upsell'] = api.Section.extend( {

// 		// Remove events for this type of section.
// 		attachEvents: function () {},

// 		// Ensure this type of section is active. Normally, sections without contents aren't visible.
// 		isContextuallyActive: function () {
// 			return true;
// 		}
// 	} );
// } )( jQuery, wp.customize );
