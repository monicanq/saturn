<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Test Settings and Controls
 *
 */

    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[text_test]', array(
        'default'        => 'Arse!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'newTest',
        'settings'   => 'themename_theme_options[text_test]',
    ));

    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('themename_color_scheme', array(
        'label'      => __('Color Scheme', 'themename'),
        'section'    => 'newTest',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'settings' => 'themename_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'newTest',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'themename_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'newTest',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));


    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'newTest',
        'settings' => 'themename_theme_options[image_upload_test]',
    )));

    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'themename'),
        'section'  => 'newTest',
        'settings' => 'themename_theme_options[upload_test]',
    )));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[link_color]', array(
        'default'           => '000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'themename'),
        'section'  => 'newTest',
        'settings' => 'themename_theme_options[link_color]',
    )));


    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('themename_page_test', array(
        'label'      => __('Page Test', 'themename'),
        'section'    => 'newTest',
        'type'    => 'dropdown-pages',
        'settings'   => 'themename_theme_options[page_test]',
    ));