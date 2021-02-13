<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Conditional Settings and Controls
 *
 */


    //  =============================
//  = Checkbox                  =
//  =============================
$wp_customize->add_setting('display_conditional[checkbox_test]', array(
    'transport'         => 'refresh',
    'capability' => 'edit_theme_options',
    // 'type'       => 'option',
    'default'    => 0,
    'sanitize_callback' => 'saturn_sanitize_checkbox'
));

$wp_customize->add_control('display_conditional_text', array(
    'settings' => 'display_conditional[checkbox_test]',
    'label'    => __('Display conditional'),
    'section'  => 'conditional',
    'type'     => 'checkbox',
));

