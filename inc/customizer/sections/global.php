<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add General Settings and Controls
 *
 */


/*Show Boxed Content*/
//add setting
$wp_customize->add_setting( 'boxed_content', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'boxed_content_control', array(
    'label' => esc_html__( 'Display Content within frame', 'saturn' ),
    'type'  => 'checkbox', 
    'section' => 'general',
    'settings' => 'boxed_content'
));


/*SideBar Side*/
$wp_customize->add_setting( 'sidebar_side' , array(
    'default'     => 'right',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'sidebar_side', array(
    'label' => esc_html__( 'Side of sidebar Page (if displayed)', 'saturn' ),
    'section' => 'general',
    'settings' => 'sidebar_side',
    'type' => 'radio',
    'choices' => array(
        'left' => 'Left',
        'right' => 'Right',
    ),
) );

