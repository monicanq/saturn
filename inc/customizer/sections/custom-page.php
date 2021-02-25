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
$wp_customize->add_setting( 'custom_page_sidebar', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'custom_page_sidebar_control', array(
    'label' => 'Show Sidebar in custom Page',
    'type'  => 'checkbox', 
    'section' => 'custom_page',
    'settings' => 'custom_page_sidebar'
));


 /*Show Footer widgets*/
//add setting
$wp_customize->add_setting( 'custom_page_footer', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'custom_page_footer_control', array(
    'label' => 'Display Footer Widgets in custom Page',
    'type'  => 'checkbox', 
    'section' => 'custom_page',
    'settings' => 'custom_page_footer'
));


