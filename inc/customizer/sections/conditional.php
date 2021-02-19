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


/*********** Customize breaks height ***********/
// Break One Height
$wp_customize->add_setting( 'break_one_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_one_height', array(
    'label'	=>  'Height of the first section break',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'conditional',
) ) );

// Break Two Height
$wp_customize->add_setting( 'break_two_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_two_height', array(
    'label'	=>  'Height of the second section break',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'conditional',
) ) );

/*********** Customize breaks background photos ***********/
// Break One Image
// $wp_customize->get_setting( 'image_control_one' )->transport = 'postMessage';
// Add and manipulate theme images to be used.
$wp_customize->add_setting('break_one_img', array(
'default' => '',
'type' => 'theme_mod',
'capability' => 'edit_theme_options',
'transport'   => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_one_img', array(
'label' => __( 'Featured Home Page Image One', 'theme-slug' ),
'section' => 'conditional',
'settings' => 'break_one_img',
))
);

// Break Two Image
// $wp_customize->get_setting( 'image_control_one' )->transport = 'postMessage';
// Add and manipulate theme images to be used.
$wp_customize->add_setting('break_two_img', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_two_img', array(
    'label' => __( 'Featured Home Page Image One', 'theme-slug' ),
    'section' => 'conditional',
    'settings' => 'break_two_img',
))
);

/************ Parallax Effect for Images *************/
/*Image One*/
$wp_customize->add_setting( 'parallax_break_one' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'parallax_break_one', array(
    'label' => 'Make first image fixed',
    'section' => 'conditional',
    'settings' => 'parallax_break_one',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );

/*Image Two*/
$wp_customize->add_setting( 'parallax_break_two' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'parallax_break_two', array(
    'label' => 'Make second image fixed',
    'section' => 'conditional',
    'settings' => 'parallax_break_two',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );