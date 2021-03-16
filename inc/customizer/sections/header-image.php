<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
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
    'label'	=>  esc_html__( 'Height of the banner', 'caper' ),
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'header_image',
) ) );

/* Parallax effect for header image */
//add setting
$wp_customize->add_setting( 'parallax_header',
    array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'caper_sanitize_checkbox'
    )
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'parallax_header',
    array(
        'label' => esc_html__( 'Show Header Image Fixed', 'caper' ),
        'section' => 'header_image'
    )
) );

/*Caret controls */
//add setting
$wp_customize->add_setting( 'section_caret',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'section_caret',
	array(
		'label' => esc_html__( 'Show Next Section Arrow', 'caper' ),
		'section' => 'header_image'
	)
) );



/* Caret Color Picker */
$wp_customize->add_setting( 'caret_color' , array(
    'default'     => '#333',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caret_color', array(
    'label'        => esc_html__( 'Arrow Color', 'caper' ),
    'section'    => 'header_image',
    'settings'   => 'caret_color',
) ) );


/* Banner on all pages controls */
//add setting
$wp_customize->add_setting( 'home_page_header',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'home_page_header',
	array(
		'label' => esc_html__( 'Show Header Image on all pages', 'caper' ),
		'section' => 'header_image'
	)
) );


