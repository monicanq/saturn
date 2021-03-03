<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Test Settings and Controls
 *
 */

$wp_customize->add_setting( 'toggle_switch',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch',
	array(
		'label' => esc_html__( 'Toggle switch', 'saturn' ),
		'section' => 'test'
	)
) );