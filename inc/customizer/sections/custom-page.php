<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Custom Page Settings and Controls
 *
 */

 /*Show SideBar*/
//add setting
$wp_customize->add_setting( 'custom_page_sidebar',
	array(
		'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'custom_page_sidebar',
	array(
		'label' => esc_html__( 'Show Sidebar in custom Page', 'caper' ),
		'section' => 'custom_page'
	)
) );

 /*Show Footer widgets*/
//add setting
$wp_customize->add_setting( 'custom_page_footer',
	array(
		'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'custom_page_footer',
	array(
		'label' => esc_html__( 'Display Footer Widgets in custom Page', 'caper' ),
		'section' => 'custom_page'
	)
) );

