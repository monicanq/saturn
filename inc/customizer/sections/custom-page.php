<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
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
        'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'custom_page_sidebar',
	array(
		'label' => esc_html__( 'Show Sidebar in custom Page', 'saturn' ),
		'section' => 'custom_page'
	)
) );

 /*Show Footer widgets*/
//add setting
$wp_customize->add_setting( 'custom_page_footer',
	array(
		'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'custom_page_footer',
	array(
		'label' => esc_html__( 'Display Footer Widgets in custom Page', 'saturn' ),
		'section' => 'custom_page'
	)
) );

