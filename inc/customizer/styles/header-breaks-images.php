<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Styles for Header Image
 *
 */

function caper_header_breaks_images(){
    
    if ( !get_header_image() ):
        $banner_height = '0vh';
    else: 
        $banner_height = get_theme_mod( 'banner_height', 100 ) . 'vh';
    endif;
    $header_img = get_header_image();
    
    // Set background images
    $css = ' 
    #banner{
        background-image: url(' . esc_url(get_header_image()) . ');
        height: ' . $banner_height . ';
    } 
    #break-1{
        background-image: url(' . esc_url( get_theme_mod( 'break_one_img' ) ) . ');
        height: ' . esc_html(get_theme_mod( 'break_one_height', 100 )) . 'vh;
    }
    #break-2{
        background-image: url(' . esc_url( get_theme_mod( 'break_two_img' ) ) . ');
        height: ' . esc_html(get_theme_mod( 'break_two_height', 100 )) . 'vh;
    }	
    #banner, #break-1, #break-2{
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
    }
    #caret{
        color: ' . esc_html(get_theme_mod( 'caret_color', '#333' )) . '; 
    }
    ';

    /*** Parallax effects ****/
    // Header Parallax
    if( get_theme_mod( 'parallax_header', 'yes' ) == 'yes') :
        $css .= '#banner{ background-attachment: fixed; }';
    else:
        $css .= '#banner{ background-attachment: scroll; }';
    endif;
    // Section 1 Parallax
    if( get_theme_mod( 'parallax_break_one', 'yes' ) == 'yes') :
        $css .= '#break-1{ background-attachment: fixed; }';
    else :
        $css .= '#break-1{ background-attachment: scroll; }';        
    endif;
    // Section 2 Parallax
    if( get_theme_mod( 'parallax_break_two', 'yes' ) == 'yes') :
        $css .= '#break-2{ background-attachment: fixed; }';
    else :
        $css .= '#break-2{ background-attachment: scroll; }';        
    endif;        

    return $css;
}


