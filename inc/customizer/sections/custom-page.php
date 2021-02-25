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
$wp_customize->add_setting( 'custom_page_sidebar' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'custom_page_sidebar', array(
    'label' => 'Show Sidebar in custom Page',
    'section' => 'custom_page',
    'settings' => 'custom_page_sidebar',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );

 /*Show Footer widgets*/
 $wp_customize->add_setting( 'custom_page_footer' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'custom_page_footer', array(
    'label' => 'Show Footer Widgets in custom Page',
    'section' => 'custom_page',
    'settings' => 'custom_page_footer',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );


