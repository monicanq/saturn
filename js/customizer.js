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


	// S1C1 slider
	// wp.customize( 's1c1_width', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#first-section .column:first' ).css( 'flex-basis', newval +'%' );
	// 	} );
	// } );
	// //S1C2 slider
	// wp.customize( 's1c2_width', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#first-section .column:nth-child(2)' ).css( 'flex-basis', newval +'%' );
	// 	} );
	// } );
	// //S1C3 slider
	// wp.customize( 's1c3_width', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#first-section .column:nth-child(3)' ).css( 'flex-basis', newval +'%' );
	// 	} );
	// } );

	// //S2C1 slider
	// wp.customize( 's2c1_width', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#second-section .column:first' ).css( 'flex-basis', newval +'%' );
	// 	} );
	// } );
	// //S2C2 slider
	// wp.customize( 's2c2_width', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#second-section .column:nth-child(2)' ).css( 'flex-basis', newval +'%' );
	// 	} );
	// } );
	// //S2C3 slider
	// wp.customize( 's2c3_width', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#second-section .column:nth-child(3)' ).css( 'flex-basis', newval +'%' );
	// 	} );
	// } );

	//Title Alignment
	wp.customize( 'post_title_alignment', function( value ) {
		value.bind( function( newval ) {
			$( 'h1.entry-title' ).css( 'text-align', newval );
		} );
	} );
	console.log('control');
	console.log($('#first-section div:first'));
	// console.log($("#first-section div:nth-child(1)"));

});
