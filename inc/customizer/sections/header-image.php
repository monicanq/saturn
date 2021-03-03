<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Settings and Controls to Header Image Section
 *
 */

/*Banner Height Control*/
$wp_customize->add_setting( 'banner_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'banner_height', array(
    'label'	=>  esc_html__( 'Height of the banner', 'saturn' ),
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'header_image',
) ) );

/*Caret controls */
$wp_customize->add_setting( 'section_caret' , array(
    'default'     => 'small',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );

$wp_customize->add_control( 'section_caret', array(
    'label' => esc_html__( 'Show Next Section Arrow', 'saturn' ),
    'section' => 'header_image',
    'settings' => 'section_caret',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No'
    ),
) );

/* Caret Color Picker */
$wp_customize->add_setting( 'caret_color' , array(
    'default'     => '#333',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
    'label'        => esc_html__( 'Arrow Color', 'saturn' ),
    'section'    => 'header_image',
    'settings'   => 'caret_color',
) ) );

/* Parallax effect for header image */
$wp_customize->add_setting( 'parallax_header' , array(
    'default'     => 'small',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );

$wp_customize->add_control( 'parallax_header', array(
    'label' => esc_html__( 'Header Image Fixed', 'saturn' ),
    'section' => 'header_image',
    'settings' => 'parallax_header',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No'
    ),
) );