<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Test Settings and Controls
 *
 */

$wp_customize->add_setting( 'toggle_switch',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch',
	array(
		'label' => esc_html__( 'Toggle switch', 'caper' ),
		'section' => 'test'
	)
) );