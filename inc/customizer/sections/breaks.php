<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Breaks Settings and Controls
 *
 */
 
 
/*********** Break One Customization ***********/
// Break One Height
$wp_customize->add_setting( 'break_one_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
    'sanitize_callback' => 'absint',
) );
    
$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_one_height', array(
    'label'	=>  esc_html__( 'Height of the first section break', 'caper' ),
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'section_breaks',
) ) );
        
// Break One Image
$wp_customize->add_setting('break_one_img', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'refresh',
    'sanitize_callback' => 'caper_sanitize_image',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_one_img', array(
    'label' => esc_html__( 'Background Image for first break', 'caper' ),
    'section' => 'section_breaks',
    'settings' => 'break_one_img',
    ))
);

//Image Two Parallax
$wp_customize->add_setting( 'parallax_break_one',
array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'parallax_break_one',
array(
    'label' => esc_html__( ' Make First Break Background Image fixed ' , 'caper' ),
    'section' => 'section_breaks'
	)
) );

        

/*********** Break Two Customization ***********/

// Break Two Height
$wp_customize->add_setting( 'break_two_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
    'sanitize_callback' => 'absint',
) );
    
$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_two_height', array(
    'label'	=>  esc_html__( 'Height of the second section break', 'caper' ),
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'section_breaks',
) ) );

// Break Two Image
$wp_customize->add_setting('break_two_img', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'refresh',
    'sanitize_callback' => 'caper_sanitize_image',
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_two_img', array(
    'label' => esc_html__( 'Background Image for second break', 'caper' ),
    'section' => 'section_breaks',
    'settings' => 'break_two_img',
))
);
        
//Image Two Parallax
$wp_customize->add_setting( 'parallax_break_two',
array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'parallax_break_two',
array(
    'label' => esc_html__( ' Make Second Break Background Image fixed ' , 'caper' ),
    'section' => 'section_breaks'
	)
) );