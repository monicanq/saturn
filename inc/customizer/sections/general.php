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
  $wp_customize->add_setting( 'boxed_content' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'boxed_content', array(
    'label' => 'Set Maximum Width for content on large screens',
    'section' => 'general',
    'settings' => 'boxed_content',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );

/*SideBar Side*/
$wp_customize->add_setting( 'sidebar_side' , array(
    'default'     => 'right',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'sidebar_side', array(
    'label' => 'Side of sidebar in custom Page',
    'section' => 'general',
    'settings' => 'sidebar_side',
    'type' => 'radio',
    'choices' => array(
        'left' => 'Left',
        'right' => 'Right',
    ),
) );