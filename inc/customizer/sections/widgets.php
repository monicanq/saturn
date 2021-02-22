<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Widgets Settings and Controls
 *
 */

/*First Section First Column Controls*/
// width Control
$wp_customize->add_setting( 's1c1_width' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 's1c1_width', array(
    'label'	=>  'Width of the First column',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'first_section',
) ) );

/*First Section Second Column Controls*/
// width Control
$wp_customize->add_setting( 's1c2_width' , array(
    'default'     => 0,
    'transport'   => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 's1c2_width', array(
    'label'	=>  'Width of the second Column',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'first_section',
) ) ); 

/*First Section Third Column Controls*/
// width Control
$wp_customize->add_setting( 's1c3_width' , array(
    'default'     => 0,
    'transport'   => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 's1c3_width', array(
    'label'	=>  'Width of the Third Column',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'first_section',
) ) );