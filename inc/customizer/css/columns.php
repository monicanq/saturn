<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Styles for Columns
 *
 */

// Add column widths
$arr = array( 's1c1_width', 's1c2_width', 's1c3_width', 's2c1_width', 's2c2_width', 's2c3_width',);
foreach ($arr as &$value) {
    if (get_theme_mod($value) > 0) :?>
        <style type="text/css">
            <?php echo ( '#' . substr($value, 0, 3)); ?> {
                width: <?php echo ( get_theme_mod( $value ) ); ?>;
            }		
        </style>  
    <?php endif;
}
?>
