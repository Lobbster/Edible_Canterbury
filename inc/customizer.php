<?php

/**
 * edible_canterbury Theme Customizer
 *
 * @package edible_canterbury
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function edible_canterbury_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'edible_canterbury_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'edible_canterbury_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section('edible_canterbury_homepage_section', array('title' => 'homepage_text'));
	$wp_customize->add_setting('edible_canterbury_homepage_text_video');
	$wp_customize->add_setting('edible_canterbury_homepage_text_title');
	$wp_customize->add_setting('edible_canterbury_homepage_text_setting');
	$wp_customize->add_setting('edible_canterbury_homepage_text_postcode');
	$wp_customize->add_setting('edible_canterbury_homepage_text_our_community');
	$wp_customize->add_setting('edible_canterbury_homepage_text_our_community_subtitle');


	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'edible_canterbury_homepage_text_video',
		array(
			'label' => 'textarea',
			'section' => 'edible_canterbury_homepage_section',
			'settings' => 'edible_canterbury_homepage_text_video',
			'type' => 'textarea'
		)
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'edible_canterbury_homepage_text_title',
		array(
			'label' => 'textarea',
			'section' => 'edible_canterbury_homepage_section',
			'settings' => 'edible_canterbury_homepage_text_title',
			'type' => 'textarea'
		)
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'edible_canterbury_homepage_text_setting',
		array(
			'label' => 'textarea',
			'section' => 'edible_canterbury_homepage_section',
			'settings' => 'edible_canterbury_homepage_text_setting',
			'type' => 'textarea'
		)
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'edible_canterbury_homepage_text_postcode',
		array(
			'label' => 'textarea',
			'section' => 'edible_canterbury_homepage_section',
			'settings' => 'edible_canterbury_homepage_text_postcode',
			'type' => 'textarea'
		)
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'edible_canterbury_homepage_text_our_community',
		array(
			'label' => 'textarea',
			'section' => 'edible_canterbury_homepage_section',
			'settings' => 'edible_canterbury_homepage_text_our_community',
			'type' => 'textarea'
		)
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'edible_canterbury_homepage_text_our_community_subtitle',
		array(
			'label' => 'textarea',
			'section' => 'edible_canterbury_homepage_section',
			'settings' => 'edible_canterbury_homepage_text_our_community_subtitle',
			'type' => 'textarea'
		)
	));
}
add_action('customize_register', 'edible_canterbury_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function edible_canterbury_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function edible_canterbury_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function edible_canterbury_customize_preview_js()
{
	wp_enqueue_script('edible_canterbury-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'edible_canterbury_customize_preview_js');
