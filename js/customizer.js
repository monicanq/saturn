/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
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

	//Sample slider
	// wp.customize( 'cd_photocount', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '#photocount span' ).html( newval );
	// 	} );
	// } );

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
}( jQuery ) );
