<?php
/**
 * Freelancer Plus Theme Customizer
 *
 * @package Freelancer Plus
 */

get_template_part('/inc/select/category-dropdown-custom-control');

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function freelancer_plus_customize_register( $wp_customize ) {

	function freelancer_plus_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	function freelancer_plus_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	//Theme Options
	$wp_customize->add_panel( 'freelancer_plus_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'freelancer-plus' ),
	) );
	
	//Site Layout Section
	$wp_customize->add_section('freelancer_plus_site_layoutsec',array(
		'title'	=> __('Manage Site Layout Section ','freelancer-plus'),
		'priority'	=> 1,
		'panel' => 'freelancer_plus_panel_area',
	));		
	
	$wp_customize->add_setting('freelancer_plus_box_layout',array(
		'sanitize_callback' => 'freelancer_plus_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'freelancer_plus_box_layout', array(
	   'section'   => 'freelancer_plus_site_layoutsec',
	   'label'	=> __('Check to Box Layout','freelancer-plus'),
	   'type'      => 'checkbox'
 	));

	// Header Section
	$wp_customize->add_section('freelancer_plus_header_section', array(
        'title' => __('Manage Header Section', 'freelancer-plus'),
        'priority' => null,
		'panel' => 'freelancer_plus_panel_area',
 	));

	$wp_customize->add_setting('freelancer_plus_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_email_address', array(
	   'settings' => 'freelancer_plus_email_address',
	   'section'   => 'freelancer_plus_header_section',
	   'label' => __('Add Email Address', 'freelancer-plus'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('freelancer_plus_timming',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_timming', array(
	   'settings' => 'freelancer_plus_timming',
	   'section'   => 'freelancer_plus_header_section',
	   'label' => __('Add Office Timming', 'freelancer-plus'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('freelancer_plus_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_plus_sanitize_phone_number',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_phone_number', array(
	   'settings' => 'freelancer_plus_phone_number',
	   'section'   => 'freelancer_plus_header_section',
	   'label' => __('Add Phone Number', 'freelancer-plus'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('freelancer_plus_phone_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_phone_text', array(
	   'settings' => 'freelancer_plus_phone_text',
	   'section'   => 'freelancer_plus_header_section',
	   'label' => __('Add Call Text', 'freelancer-plus'),
	   'type'      => 'text'
	));

	// Social media Section
	$wp_customize->add_section('freelancer_plus_social_media_section', array(
        'title' => __('Manage Social media Section', 'freelancer-plus'),
        'priority' => null,
		'panel' => 'freelancer_plus_panel_area',
 	));

	$wp_customize->add_setting('freelancer_plus_fb_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_fb_link', array(
	   'settings' => 'freelancer_plus_fb_link',
	   'section'   => 'freelancer_plus_social_media_section',
	   'label' => __('Facebook Link', 'freelancer-plus'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('freelancer_plus_twitt_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_twitt_link', array(
	   'settings' => 'freelancer_plus_twitt_link',
	   'section'   => 'freelancer_plus_social_media_section',
	   'label' => __('Twitter Link', 'freelancer-plus'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('freelancer_plus_linked_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_linked_link', array(
	   'settings' => 'freelancer_plus_linked_link',
	   'section'   => 'freelancer_plus_social_media_section',
	   'label' => __('Linkdin Link', 'freelancer-plus'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('freelancer_plus_insta_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_insta_link', array(
	   'settings' => 'freelancer_plus_insta_link',
	   'section'   => 'freelancer_plus_social_media_section',
	   'label' => __('Instagram Link', 'freelancer-plus'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('freelancer_plus_youtube_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_youtube_link', array(
	   'settings' => 'freelancer_plus_youtube_link',
	   'section'   => 'freelancer_plus_social_media_section',
	   'label' => __('Youtube Link', 'freelancer-plus'),
	   'type'      => 'url'
	));

	// Home Category Dropdown Section
	$wp_customize->add_section('freelancer_plus_one_cols_section',array(
		'title'	=> __('Manage Slider','freelancer-plus'),
		'description'	=> __('Select Category from the Dropdowns for slider, Also use the given image dimension (1200 x 450).','freelancer-plus'),
		'priority'	=> null,
		'panel' => 'freelancer_plus_panel_area'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'freelancer_plus_slidersection', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Freelancer_Plus_Category_Dropdown_Custom_Control( $wp_customize, 'freelancer_plus_slidersection', array(
		'section' => 'freelancer_plus_one_cols_section',
		'settings'   => 'freelancer_plus_slidersection',
	) ) );

	$wp_customize->add_setting('freelancer_plus_button_text',array(
		'default' => 'Hire Me',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_button_text', array(
	   'settings' => 'freelancer_plus_button_text',
	   'section'   => 'freelancer_plus_one_cols_section',
	   'label' => __('Add Button Text', 'freelancer-plus'),
	   'type'      => 'text'
	));
	
	//Hide Section
	$wp_customize->add_setting('freelancer_plus_hide_categorysec',array(
		'default' => true,
		'sanitize_callback' => 'freelancer_plus_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'freelancer_plus_hide_categorysec', array(
	   'settings' => 'freelancer_plus_hide_categorysec',
	   'section'   => 'freelancer_plus_one_cols_section',
	   'label'     => __('Uncheck To Enable This Section','freelancer-plus'),
	   'type'      => 'checkbox'
	));
	
	// Services Section 
	$wp_customize->add_section('freelancer_plus_below_slider_section', array(
		'title'	=> __('Manage Services Section','freelancer-plus'),
		'description'	=> __('Select Pages from the dropdown for About.','freelancer-plus'),
		'priority'	=> null,
		'panel' => 'freelancer_plus_panel_area',
	));
	
	$wp_customize->add_setting('freelancer_plus_main_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_main_title', array(
	   'settings' => 'freelancer_plus_main_title',
	   'section'   => 'freelancer_plus_below_slider_section',
	   'label' => __('Add Main Title', 'freelancer-plus'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('freelancer_plus_main_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'freelancer_plus_main_text', array(
	   'settings' => 'freelancer_plus_main_text',
	   'section'   => 'freelancer_plus_below_slider_section',
	   'label' => __('Add Main Text', 'freelancer-plus'),
	   'type'      => 'text'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'freelancer_plus_services_cat', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Freelancer_Plus_Category_Dropdown_Custom_Control( $wp_customize, 'freelancer_plus_services_cat', array(
		'section' => 'freelancer_plus_below_slider_section',
		'settings'   => 'freelancer_plus_services_cat',
	) ) );

	$wp_customize->add_setting('freelancer_plus_disabled_pgboxes',array(
		'default' => true,
		'sanitize_callback' => 'freelancer_plus_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	
	$wp_customize->add_control( 'freelancer_plus_disabled_pgboxes', array(
	   'settings' => 'freelancer_plus_disabled_pgboxes',
	   'section'   => 'freelancer_plus_below_slider_section',
	   'label'     => __('Uncheck To Enable This Section','freelancer-plus'),
	   'type'      => 'checkbox'
	));

	// Footer Section 
	$wp_customize->add_section('freelancer_plus_footer', array(
		'title'	=> __('Manage Footer Section','freelancer-plus'),
		'priority'	=> null,
		'panel' => 'freelancer_plus_panel_area',
	));

	$wp_customize->add_setting('freelancer_plus_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));	
	$wp_customize->add_control( 'freelancer_plus_copyright_line', array(
	   'section' 	=> 'freelancer_plus_footer',
	   'label'	 	=> __('Copyright Line','freelancer-plus'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));
}
add_action( 'customize_register', 'freelancer_plus_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function freelancer_plus_customize_preview_js() {
	wp_enqueue_script( 'freelancer_plus_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'freelancer_plus_customize_preview_js' );