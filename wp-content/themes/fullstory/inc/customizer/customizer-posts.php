<?php
function fullstory_customize_posts($wp_customize){


  Kirki::add_field( 'fullstory_theme_options[post_carousel]', array(
	'type'        => 'switch',
	'settings'    => 'fullstory_theme_options[post_carousel]',
	'label'       => esc_html__( 'Post Carousel', 'fullstory' ),
	'section'     => 'posts_default_settings',
	'default'     => 'yes',
  'option_type' => 'option',
	'priority'    => 10,
	'choices'     => array(
		'yes'  => esc_attr__( 'Enable', 'fullstory' ),
		'no' => esc_attr__( 'Disable', 'fullstory' ),
	),
  ) );

  Kirki::add_field( 'fullstory_theme_options[post_sidebar]', array(
  	'type'        => 'radio-image',
  	'settings'    => 'fullstory_theme_options[post_sidebar]',
  	'label'       => esc_html__( 'Sidebar Position', 'fullstory' ),
  	'section'     => 'posts_default_settings',
  	'default'     => 'left',
    'option_type' => 'option',
  	'priority'    => 10,
  	'choices'     => array(
    		'left'   => get_template_directory_uri() . '/inc/img/sidebar-left.png',
    		'right' => get_template_directory_uri() . '/inc/img/sidebar-right.png',
  	   ),
  ));

  Kirki::add_field( 'fullstory_theme_options[post_style]', array(
  	'type'        => 'radio-image',
  	'settings'    => 'fullstory_theme_options[post_style]',
  	'label'       => esc_html__( 'Post Style', 'fullstory' ),
  	'section'     => 'posts_default_settings',
  	'default'     => '1',
    'option_type' => 'option',
  	'priority'    => 10,
  	'choices'     => array(
    		'1'   => get_template_directory_uri() . '/inc/img/post_style_1.png',
    		'2' => get_template_directory_uri() . '/inc/img/post_style_2.png',
        '3'   => get_template_directory_uri() . '/inc/img/post_style_3.png',
    		'4' => get_template_directory_uri() . '/inc/img/post_style_4.png',
        '5'   => get_template_directory_uri() . '/inc/img/post_style_5.png',
    		'6' => get_template_directory_uri() . '/inc/img/post_style_6.png',
        '7' => get_template_directory_uri() . '/inc/img/post_style_7.png',
        '8' => get_template_directory_uri() . '/inc/img/post_style_8.png',
  	   ),
  ));


  Kirki::add_field( 'mt_first_letter', array(
   'type'        => 'switch',
   'settings'    => 'mt_first_letter',
   'label'       => esc_attr__( 'First Letter Dropcaps', 'fullstory' ),
   'section'     => 'facebook_excerpt',
   'default'     => 'off',
   'priority'    => 10,
   'choices'     => array(
     'on'  => esc_attr__( 'On', 'fullstory' ),
     'off' => esc_attr__( 'Off', 'fullstory' ),
   ),
   ));

}

add_action('customize_register', 'fullstory_customize_posts');
?>
