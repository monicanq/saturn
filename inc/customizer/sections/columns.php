<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Settings and Controls to Widget Columns Sections
 *
 */

 $ColProps =array(
    's1c1' => array(
        'id' => 's1c1_width',
        'name' => 'First Section First Column Width'
    ),
    's1c2' => array(
        'id' => 's1c2_width',
        'name' => 'First Section Second Column Width'
    ),
    's1c3' => array(
        'id' => 's1c3_width',
        'name' => 'First Section Third Column Width'
    ),
    's2c1' => array(
        'id' => 's2c1_width',
        'name' => 'Second Section First Column Width'
    ),
    's2c2' => array(
        'id' => 's2c2_width',
        'name' => 'Second Section Second Column Width'
    ),
    's2c3' => array(
        'id' => 's2c3_width',
        'name' => 'Second Section Third Column Width'
    )
);

// Add Setting and Control for each section
foreach ($ColProps as  $x =>$value) {
    $settingid = $ColProps[$x]['id'];
    $settingname =  $ColProps[$x]['name'];
    $wp_customize->add_setting( "{$settingid}" , array(
        'default'     => 100,
        'transport'   => 'postMessage',
        'sanitize_callback' => 'absint',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Range( $wp_customize, $ColProps[$x]['id'], array(
        'label'	=>  esc_html__("{$settingname}" , 'caper' ),
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'section' => 'columns',
    ) ) );
};

