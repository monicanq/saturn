<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Breaks Settings and Controls
 *
 */
 
 
?>
<!-- Styles for the break sections -->

<style>
    /* Styling for parallax effects */
    /* Break-1 image */
	<?php if( get_theme_mod( 'parallax_break_one', 'yes' ) == 'yes') : ?>
        #break-1{
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
        }
	<?php else : ?>
        #break-1{
            /* Create the parallax scrolling effect */
            background-attachment: scroll;
        }
	<?php endif;?>

    /* Break-2 image */
	<?php if( get_theme_mod( 'parallax_break_two', 'yes' ) == 'yes') : ?>
        #break-2{
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
        }
	<?php else : ?>
        #break-2{
            /* Create the parallax scrolling effect */
            background-attachment: scroll;
        }
	<?php endif;?>
</style>