<?php
function fullstory_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'fullstory'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'fullstory'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'fullstory'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'fullstory_theme_options[background_image]', array(
    'type'        => 'image',
    'settings'    => 'fullstory_theme_options[background_image]',
    'label'       => esc_html__( 'Background Image', 'fullstory' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'fullstory_theme_options[background_color]', array(
    'type'        => 'color',
    'settings'    => 'fullstory_theme_options[background_color]',
    'label'       => esc_html__( 'Background Color', 'fullstory' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General', 'fullstory'),
    'panel'  => 'colors_settings'
  ));


Kirki::add_field( 'zoom', array(
 'type'        => 'radio-buttonset',
 'settings'    => 'zoom',
 'label'       => esc_html__( 'Image Hover Zoom', 'fullstory' ),
 'section'     => 'general_style_settings',
 'default'     => 'on',
 'priority'    => 1,
 'option_type'           => 'option',
 'choices'     => array(
   'on'   => esc_attr__( 'Zoom On', 'fullstory' ),
   'off' => esc_attr__( 'Zoom Off', 'fullstory' )
 ),
));


  $wp_customize->add_setting('fullstory_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'fullstory_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'fullstory'),
      'section'  => 'general_style_settings',
      'settings' => 'fullstory_theme_options[colors_default]',
    )));

    Kirki::add_field( 'mt_colors_default', array(
      'type'        => 'multicolor',
      'settings'    => 'mt_colors_default',
      'label'       => esc_attr__( 'Site Color', 'fullstory' ),
      'section'     => 'general_style_settings',
      'option_type' => 'option',
      'priority'    => 1,
      'choices'     => array(
          'color'    => esc_attr__( 'Color', 'fullstory' ),
          'textinbackground'   => esc_attr__( 'Text If Background', 'fullstory' ),
      ),
      'default'     => array(
          'color'    => '',
          'textinbackground'    => '',
      ),
    ));


  $wp_customize->add_setting('fullstory_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'fullstory_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'fullstory'),
      'section'  => 'general_style_settings',
      'settings' => 'fullstory_theme_options[colors_button]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header & Menu Colors', 'fullstory'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'mt_menu_full', array(
      	'type'        => 'switch',
      	'settings'    => 'mt_menu_full',
      	'label'       => esc_attr__( 'Full Width', 'fullstory' ),
      	'section'     => 'colors_menu',
      	'default'     => 'on',
      	'priority'    => 1,
      	'choices'     => array(
          'on'  => esc_attr__( 'ON', 'fullstory' ),
       		'off' => esc_attr__( 'OFF', 'fullstory' ),
      	),
  ));

  Kirki::add_field( 'mt_colors_header', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header',
    'label'       => esc_attr__( 'Top Bar', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'fullstory' ),
        'link'   => esc_attr__( 'Link', 'fullstory' ),
        'hover'  => esc_attr__( 'Hover', 'fullstory' ),
        'bold'  => esc_attr__( 'Bold', 'fullstory' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => '',
        'bold'    => ''
    ),
  ));


  Kirki::add_field( 'mt_colors_menu_bg', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_bg',
    'label'       => esc_attr__( 'Menu Background', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'in'    => esc_attr__( 'Background', 'fullstory' ),
    ),
    'default'     => array(
        'in'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link',
    'label'       => esc_attr__( 'Menu Links', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Links', 'fullstory' ),
        'text_hover'   => esc_attr__( 'Hover', 'fullstory' ),
        'border'  => esc_attr__( 'Background', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'border'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link_sub', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link_sub',
    'label'       => esc_attr__( 'Menu Sub Links', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'fullstory' ),
        'text_hover'   => esc_attr__( 'Hover', 'fullstory' ),
        'background'  => esc_attr__( 'Background', 'fullstory' ),
        'background_hover'  => esc_attr__( 'Hover', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_button',
    'label'       => esc_attr__( 'Menu Smart Button', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'fullstory' ),
        'text_hover'   => esc_attr__( 'Hover', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_search', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_search',
    'label'       => esc_attr__( 'Menu Search', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'fullstory' ),
        'text_hover'   => esc_attr__( 'Hover', 'fullstory' ),
        'background'  => esc_attr__( 'Background', 'fullstory' ),
        'background_hover'  => esc_attr__( 'Hover', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));


  Kirki::add_field( 'mt_colors_menu_smart', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_smart',
    'label'       => esc_attr__( 'Smart Menu', 'fullstory' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'fullstory' ),
        'link'   => esc_attr__( 'Link', 'fullstory' ),
        'hover'  => esc_attr__( 'Hover', 'fullstory' ),
        'out'  => esc_attr__( 'Out', 'fullstory' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => '',
        'out'    => '',
    ),
  ));


  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'fullstory'),
    'panel'  => 'colors_settings'
  ));


Kirki::add_field( 'mt_colors_footer_social', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_social',
  'label'       => esc_attr__( 'Footer Social Icons', 'fullstory' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'icon'    => esc_attr__( 'Icon', 'fullstory' ),
      'hover'   => esc_attr__( 'Hover', 'fullstory' ),
      'background'   => esc_attr__( 'Background', 'fullstory' ),
      'background_hover'  => esc_attr__( 'Hover', 'fullstory' ),
  ),
  'default'     => array(
      'icon'    => '',
      'hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_bottom', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_bottom',
  'label'       => esc_attr__( 'Footer Colors', 'fullstory' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'fullstory' ),
      'text'   => esc_attr__( 'Text', 'fullstory' ),
      'link'  => esc_attr__( 'Link', 'fullstory' ),
      'hover'  => esc_attr__( 'Hover', 'fullstory' ),
  ),
  'default'     => array(
      'background'    => '',
      'text'    => '',
      'link'    => '',
      'hover'    => '',
  ),
));


  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'fullstory'),
    'panel'  => 'colors_settings'
  ));


  Kirki::add_field( 'colors_post_share', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_share',
    'label'       => esc_attr__( 'Post Share Count', 'fullstory' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'fullstory' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'fullstory' ),
        'icon'   => esc_attr__( 'Icon', 'fullstory' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));
  Kirki::add_field( 'colors_post_view', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_view',
    'label'       => esc_attr__( 'Post View Count', 'fullstory' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'fullstory' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'fullstory' ),
        'icon'   => esc_attr__( 'Icon', 'fullstory' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_cat', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_cat',
    'label'       => esc_attr__( 'Post List Category', 'fullstory' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'fullstory' ),
        'background'   => esc_attr__( 'Background', 'fullstory' ),
    ),
    'default'     => array(
        'text'    => '',
        'background'    => '',
    ),
  ));




}

add_action('customize_register', 'fullstory_customize_colors');
?>
