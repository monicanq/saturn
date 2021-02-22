<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Generic colors Settings and Controls
 *
 */

  // Add navbar menu links color control
$wp_customize->add_setting( 'text_color' , array(
    'default'     => '#555',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
    'label'        => 'Text Color',
    'section'    => 'colors',
    'settings'   => 'text_color',
) ) );