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
$wp_customize->add_setting( 'post_page_sidebar' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'post_page_sidebar', array(
    'label' => 'Show Sidebar in post Page',
    'section' => 'post_page',
    'settings' => 'post_page_sidebar',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );



