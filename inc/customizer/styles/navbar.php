<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Styles for Navbar
 *
 */

function caper_navbar_styles(){

    $css = '';
    // Styling for position of logo on mobile menu
    if( get_theme_mod( 'mobile_logo_position', 'center' ) == 'center' ) : 
        $css .= '.site-branding {
                        align-items: center;
                        justify-content: center;
                    }';
    else:
        $css .= '
            .site-branding {
                align-items: center;
                justify-content: flex-start;
            }';
    endif; 

    if( get_theme_mod( 'navbar_overlay') == true ) :
        $css .= '#site-header { background: transparent;}';
    endif;

    if( get_theme_mod( 'sticky_navbar' ) == true && get_theme_mod( 'navbar_overlay') == true) :
        $css .= '
                #navigation-button{ position: fixed; }
                #top-header {	
                    position: sticky; 
                    top : 0; 
                    z-index : 1000;
                    background: transparent;
                }'; 
    
    elseif (get_theme_mod( 'sticky_navbar' ) == true && get_theme_mod( 'navbar_overlay' ) == false) :
        $css .= '
        #top-header {	
            position: sticky; 
            top : 0; 
            z-index : 10;
        }
        #navigation-button{ position: fixed; }
        ';
    
    elseif (get_theme_mod( 'sticky_navbar' ) == false && get_theme_mod( 'navbar_overlay' ) == true) :
            $css .= '
            #top-header {	
                height: 0;
            }
            #site-header { background: transparent;
                position: absolute;
            }';
    endif;


    switch (get_theme_mod( 'navbar_text_size' )) {
        case 'big':
            $css .= '
            .main-navigation a { font-size: 1.5rem; }';
            break;
        case 'medium':
            $css .= '
            .main-navigation a { font-size: 1.2rem; }';
            break;
        case 'small':
            $css .= '
            .main-navigation a { font-size: 0.9rem; }';
            break;
    }

    return $css;
}