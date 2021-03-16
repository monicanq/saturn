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


// Styling for position of logo on mobile menu
 if( get_theme_mod( 'mobile_logo_position', 'center' ) == 'center' ) : ?>
    <style type="text/css">
        /* Change position of the logo */
        .site-branding {
            align-items: center;
            justify-content: center;
        }		
    </style> 
<?php else: ?>
    <style type="text/css">
        /* Change position of the logo */
        .site-branding {
            align-items: center;
            justify-content: flex-start;
        }		
    </style> 
<?php endif; ?>

<!-- Styling for overlaying top navbar -->
<?php if( get_theme_mod( 'navbar_overlay') == true ) : ?>
    <style type="text/css">
        /* Change position type of navbar and transparency */
        #site-header { background: transparent;} 	
        /* #top-header {background: transparent;} */
    </style> 
<?php endif; ?>

<!-- Styling for sticky & overlay top navbar -->
<?php if( get_theme_mod( 'sticky_navbar' ) == true && get_theme_mod( 'navbar_overlay') == true) : ?>
    <style type="text/css">
        /* Change position type of navbar */
            /* #site-header {	position: fixed; } */
            #navigation-button{ position: fixed; }
            /* Let's try something new */
            #top-header {	
                position: sticky; 
                top : 0; 
                z-index : 10;
                background: transparent;
            }
        </style> 
<?php elseif (get_theme_mod( 'sticky_navbar' ) == true && get_theme_mod( 'navbar_overlay' ) == false) : ?>
    <style type="text/css">
        /* Change position type of navbar */
        #top-header {	
            position: sticky; 
            top : 0; 
            z-index : 10;
        }
        #navigation-button{ position: fixed; }
    </style> 
<?php elseif (get_theme_mod( 'sticky_navbar' ) == false && get_theme_mod( 'navbar_overlay' ) == true) : ?>
    <style type="text/css">
        #site-header { background: transparent;
            position: absolute;}
        </style> 
<?php endif;?>

<!-- Styling for navbar link size -->
<style type="text/css">
<?php 
    switch (get_theme_mod( 'navbar_text_size' )) {
        case 'big':?>
            .main-navigation a { font-size: 1.5rem; }
            <?php	break;
        case 'medium':?>
            .main-navigation a { font-size: 1.2rem; }
            <?php	break;
        case 'small':?>
            .main-navigation a { font-size: 0.9rem; }
            <?php	break;
    }?>
</style> 