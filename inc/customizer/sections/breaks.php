<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
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
    'label'	=>  esc_html__( 'Height of the first section break', 'saturn' ),
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'section_breaks',
) ) );
        
// Break One Image
// $wp_customize->get_setting( 'break_one_img' )->transport = 'postMessage';
$wp_customize->add_setting('break_one_img', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_image',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_one_img', array(
    'label' => esc_html__( 'Background Image for first break', 'saturn' ),
    'section' => 'section_breaks',
    'settings' => 'break_one_img',
    ))
);

    /*Image One*/
$wp_customize->add_setting( 'parallax_break_one' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'parallax_break_one', array(
    'label' => esc_html__( 'Make first image fixed', 'saturn' ),
    'section' => 'section_breaks',
    'settings' => 'parallax_break_one',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );



/*********** Break Two Customization ***********/

// Break Two Height
$wp_customize->add_setting( 'break_two_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
    'sanitize_callback' => 'absint',
) );
    
$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_two_height', array(
    'label'	=>  esc_html__( 'Height of the second section break', 'saturn' ),
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
    'sanitize_callback' => 'saturn_sanitize_image',
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_two_img', array(
    'label' => esc_html__( 'Background Image for second break', 'saturn' ),
    'section' => 'section_breaks',
    'settings' => 'break_two_img',
))
);
        
/*Image Two*/
$wp_customize->add_setting( 'parallax_break_two' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );
$wp_customize->add_control( 'parallax_break_two', array(
    'label' => esc_html__( 'Make second image fixed', 'saturn' ),
    'section' => 'section_breaks',
    'settings' => 'parallax_break_two',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );