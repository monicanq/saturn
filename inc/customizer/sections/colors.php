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

// Add Text color control
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

// Add General links color control
$wp_customize->add_setting( 'link_color' , array(
    'default'     => '#555',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'label'        => 'Links Color',
    'section'    => 'colors',
    'settings'   => 'link_color',
) ) );

// Add General visited links color control
$wp_customize->add_setting( 'visited_link_color' , array(
    'default'     => '#555',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'visited_link_color', array(
    'label'        => 'Visited Links Color',
    'section'    => 'colors',
    'settings'   => 'visited_link_color',
) ) );