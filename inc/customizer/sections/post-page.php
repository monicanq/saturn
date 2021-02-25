<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Post Page Settings and Controls
 *
 */

 /*Show SideBar*/
//add setting
$wp_customize->add_setting( 'post_page_sidebar', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'post_page_sidebar_control', array(
    'label' => 'Show Sidebar in custom Page',
    'type'  => 'checkbox', 
    'section' => 'post_page',
    'settings' => 'post_page_sidebar'
));

 /*Featured image full width*/
//add setting
$wp_customize->add_setting( 'featured_image_fullwidth', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'featured_image_fullwidth_control', array(
    'label' => 'Show Featured Image Full Width',
    'type'  => 'checkbox', 
    'section' => 'post_page',
    'settings' => 'featured_image_fullwidth'
));

 /*Posted date and author information*/
//add setting
$wp_customize->add_setting( 'posted_info', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'posted_info_control', array(
    'label' => 'Show posted Date and Author Information',
    'type'  => 'checkbox', 
    'section' => 'post_page',
    'settings' => 'posted_info'
));
