<?php
function fullstory_css() {

	wp_enqueue_style('fullstory-style', get_stylesheet_uri());

	$custom_styles = '';
	$options = get_option("fullstory_theme_options");

	$options_in = get_option("mt_colors_default");
	if(!empty($options_in)){
		if(!empty($options_in['color'])){ if($options_in['color']!='#fffff1'){
			$custom_styles .='
			.mt-theme-text,
			.fixed-top-menu ul li a:hover,
			a:hover,
			.nav-single .next div:after,
			.nav-single .previous div:before,
			.mt-top-followers strong,
			.header-mt-container-wrap a:hover { color:'. esc_attr($options_in['color']) .'; }
			.mt-theme-background,
			button:hover,
			input[type="submit"]:hover,
			input[type="button"]:hover,
			.sf-menu > li.current_page_item > a::before,
			.sf-menu > li > a::before,
			ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
			ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
			ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
			ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
			ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover,
			.head-bookmark a:hover,
			.hover-menu a:hover,
			.nav-links a:hover,
			.poster-next:hover,
			.poster-prev:hover,
			.post-gallery-nav .slick-arrow.slick-prev:hover:before,
			.post-gallery-nav .slick-arrow.slick-next:hover:before,
			.single-cat-wrap .post-categories li a,
			.mt-load-more:hover,
			.mt-tabc:before,
			.mt-subscribe-footer input.mt-s-b:hover,
			.poster:hover h2, .poster-small:hover h4, .poster-small-bottom:hover h4,
			.poster-cat span {';
			if(!empty($options_in['textinbackground'])){ if($options_in['textinbackground']!='#fffff1'){
				$custom_styles .=' color: '. esc_attr($options_in['textinbackground']) .'!important; ';
			}}
			$custom_styles .=' background: '. esc_attr($options_in['color']) .'; }';
			if(!empty($options_in['textinbackground'])){ if($options_in['textinbackground']!='#fffff1'){
				$custom_styles .=' .footer-scroll-to-top:before,
				.top-nav a:hover,
				.mt-tabc:hover,
				.mt-tabc.active,
				.sf-menu > li.current_page_item > a,
				.poster.size-normal .poster-cat span, .poster.trending-normal .poster-cat span, .poster.trending-carousel .poster-cat span { color: '. esc_attr($options_in['textinbackground']) .'!important; }';
			}}
		} }
	} else {

		// Default Color
		if(!empty($options['colors_default'])){
				$custom_styles .='
				.mt-theme-text,
				.fixed-top-menu ul li a:hover,
				a:hover,
				.nav-single .next div:after,
				.nav-single .previous div:before { color:'. esc_attr($options['colors_default']) .'; }
				.mt-theme-background,
				button:hover,
				input[type="submit"]:hover,
				input[type="button"]:hover,
				.sf-menu > li.current_page_item > a::before,
				.sf-menu > li > a::before,
				ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
				ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
				ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
				ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
				ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover,
				.head-bookmark a:hover,
				.hover-menu a:hover,
				.nav-links a:hover,
				.poster-next:hover,
				.poster-prev:hover,
				.post-gallery-nav .slick-arrow.slick-prev:hover:before,
				.post-gallery-nav .slick-arrow.slick-next:hover:before,
				.single-cat-wrap .post-categories li a,
				.mt-load-more:hover,
				.mt-tabc:before,
				.mt-subscribe-footer input.mt-s-b:hover { background: '. esc_attr($options['colors_default']) .'; }';
		 }
	 }

	 // Button Color
	 if(!empty($options['colors_button'])){
 			$custom_styles .='
			button,
			input[type="submit"],
			input[type="button"],
			.head-bookmark a,
			.mt-subscribe-footer input.mt-s-b { background:'. esc_attr($options['colors_button']) .'; }';
 	 }

	 // Background Color
	 $style = get_post_meta(get_the_ID(), "magazin_background_color", true);
	 if(!empty($style)){
	 		$custom_styles .='.boxed-layout-on { background-color: '. esc_attr($style) .' }';
	 }
	 else if (!empty($options['background_color'])) {
	 		$custom_styles .='.boxed-layout-on { background-color: '. esc_attr($options['background_color']) .'; }';
	 }

	 // Logo Margin
	 if(!empty($options['logo_top'])){
	 		$custom_styles .='.head-logo { padding-top: '. esc_attr($options['logo_top']) .'px }';
	 }
	 if(!empty($options['logo_bottom'])){
	 		$custom_styles .='.head-logo { padding-bottom: '. esc_attr($options['logo_bottom']) .'px } ';
	 }

	 // Social Icon
	 if(!empty($options['colors_social_hover'])){
		 $custom_styles .='.socials a:after { background:'. esc_attr($options['colors_social_hover']) .'!important; }';
	 }

	 // Menu
	 if(!empty($options['colors_menu_bg'])){
		 $custom_styles .='.header-menu { background:'. esc_attr($options['colors_menu_bg']) .'!important; }';
	 }


	 if(!empty($options['colors_menu_hover']) or !empty($options['colors_menu_hover_text'])){
		 	$custom_styles .='.sf-menu li a:hover,
		 	.sf-menu > li:hover > a,
		 	.sf-menu li.sfHover,
		 	ul.sf-menu li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
		 	ul.sf-menu li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
		 	ul.sf-menu li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
		 	ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
		 	.sf-menu li.current_page_item::before, .sf-menu li:hover::before {';
		 		if(!empty($options['colors_menu_hover'])){ $custom_styles .='background: '. esc_attr($options['colors_menu']); }
		 		if(!empty($options['colors_menu_hover_text'])){ $custom_styles .='color: '. esc_attr($options['colors_menu']); }
		 $custom_styles .='}';
		}

	$options_in = get_option("mt_colors_header");
 	if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.header-mt-container-wrap { background-color:'. esc_attr($options_in['background']) .'!important; }'; } }
	if(!empty($options_in['link'])){ if($options_in['link']!='#fffff1'){ $custom_styles .='.header-mt-container-wrap, .header-mt-container-wrap a{ color:'. esc_attr($options_in['link']) .'!important; }'; } }
	if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.header-mt-container-wrap a:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; } }
	if(!empty($options_in['bold'])){ if($options_in['bold']!='#fffff1'){ $custom_styles .='.mt-top-followers strong { color:'. esc_attr($options_in['bold']) .'!important; }'; } }

	// Menu
 	 $options_in = get_option("mt_colors_menu_bg");
 	 if(!empty($options_in['in'])){ if($options_in['in']!='#fffff1'){ $custom_styles .='.header-menu { background-color:'. esc_attr($options_in['in']) .'!important; }'; }}


	 // Menu Links
	$options_in = get_option("mt_colors_menu_link");
	if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
		$custom_styles .='.top-nav a, .top-nav { color:'. esc_attr($options_in['text']) .'!important; }';
		$custom_styles .='.mt-m-cool-button-line, .mt-m-cool-button-line:after, .mt-m-cool-button-line:before { background:'. esc_attr($options_in['text']) .'!important; }';
	}} else if(!empty($options['colors_menu'])){
		$custom_styles .='.top-nav a, .top-nav { color:'. esc_attr($options['colors_menu']) .'!important; }';
	}

	if(!empty($options_in['text_hover'])){ if($options_in['text_hover']!='#fffff1'){
		$custom_styles .='.sf-menu li a:hover,
		.sf-menu > li:hover > a,
		.sf-menu li.sfHover,
		ul.sf-menu li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
		ul.sf-menu li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
		ul.sf-menu li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
		ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
		.sf-menu li.current_page_item::before, .sf-menu li:hover::before { color: '. esc_attr($options_in['text_hover']) .'!important}';
	}} else if(!empty($options['colors_menu_hover_text'])){
		 $custom_styles .='.sf-menu li a:hover,
		 .sf-menu > li:hover > a,
		 .sf-menu li.sfHover,
		 ul.sf-menu li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
		 ul.sf-menu li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
		 ul.sf-menu li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
		 ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
		 .sf-menu li.current_page_item::before, .sf-menu li:hover::before { color: '. esc_attr($options['colors_menu_hover_text']) .'!important}';
	 }
		if(!empty($options_in['text'])){ if($options_in['text']!='#fffff1'){
			$custom_styles .='.sf-menu > li.current_page_item > a::before, .sf-menu > li > a::before { background: '. esc_attr($options_in['border']) .'!important}';
		}} else if(!empty($options['colors_menu_hover'])){
		 $custom_styles .='.sf-menu > li.current_page_item > a::before, .sf-menu > li > a::before { background: '. esc_attr($options['colors_menu_hover']) .'!important}';
	 }

	 // Menu Links Sub
	 $options_in = get_option("mt_colors_menu_link_sub");
	 if(!empty($options_in)){
			if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
				$custom_styles .='.sf-menu ul li a { color:'. esc_attr($options_in['text']) .'!important; }';
				$custom_styles .='.megamenu-span h4 { color:'. esc_attr($options_in['text']) .'!important; }';
			}}
			if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){ $custom_styles .='.sf-menu ul li a, .sf-menu ul li, .df-is-megamenu ul, .df-is-megamenu ul li .mega-post-in a:hover { background-color:'. esc_attr($options_in['background']) .'!important; }'; }}

		} else if(!empty($options['colors_menu_sub']) or !empty($options['colors_menu_sub_background'])){
		 $custom_styles .='.sf-menu ul li a {';
				 if(!empty($options['colors_menu_sub'])){ $custom_styles .=' color: '. esc_attr($options['colors_menu_sub']).'!important;'; }
				 if(!empty($options['colors_menu_sub_background'])){ $custom_styles .=' background: '. esc_attr($options['colors_menu_sub_background']).'!important;'; }
		 $custom_styles .='}';
			 if(!empty($options['colors_menu_sub_background'])){ $custom_styles .=' .sf-menu ul li, .df-is-megamenu ul { background:'. esc_attr($options['colors_menu_sub_background']).'!important}'; }
	 }

	 if(!empty($options_in)){
			if(!empty($options_in['text_hover']) and !empty($options_in['background_hover'])){if($options_in['background_hover']!='#fffff1'){
				$custom_styles .='ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
			 ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
			 ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
			 ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
			 ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover { ';
					if(!empty($options_in['background_hover'])){ $custom_styles .='background:'. esc_attr($options_in['background_hover']) .'!important;'; }
					if(!empty($options_in['text_hover'])){ $custom_styles .='color:'. esc_attr($options_in['text_hover']) .'!important;'; }
			 $custom_styles .='}';
		 }}
	 } else if(!empty($options['colors_menu_sub_hover']) or !empty($options['colors_menu_sub_hover_background'])){
		 $custom_styles .='ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
		 ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
		 ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
		 ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
		 ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover {';
				if(!empty($options['colors_menu_sub_hover_background'])){ $custom_styles .='background:'. esc_attr($options['colors_menu_sub_hover_background']) .'!important;'; }
				if(!empty($options['colors_menu_sub_hover'])){ $custom_styles .='color:'. esc_attr($options['colors_menu_sub_hover']) .'!important;'; }
		 $custom_styles .='}';
	 }

	 if(!empty($options['colors_menu_sub'])){
		 $custom_styles .='.megamenu-span h4 { color:'. esc_attr($options['colors_menu_sub']) .'!important; }';
	 }

	 $options_in = get_option("mt_colors_menu_button");
	 	 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
	 		 $custom_styles .='.mt-m-cool-button-line:after, .mt-m-cool-button-line:before, .mt-m-cool-button-line{ background-color:'. esc_attr($options_in['text']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['text_hover'])){if($options_in['text_hover']!='#fffff1'){
	 		 $custom_styles .='.nav-button:hover .mt-m-cool-button-line:after, .nav-button:hover .mt-m-cool-button-line:before, .nav-button:hover .mt-m-cool-button-line{ background-color:'. esc_attr($options_in['text_hover']) .'!important; }';
	 	 }}

	 $options_in = get_option("mt_colors_menu_smart");
		 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
	 		 $custom_styles .='.mt-smart-menu { background-color:'. esc_attr($options_in['background']) .'!important; }';
	 	 }}
	 	 if(!empty($options_in['link'])){if($options_in['link']!='#fffff1'){
	 		 $custom_styles .='.mt-smart-menu a, .mt-smart-menu .close:before, .mt-smart-menu .menu-item-has-children:after { color:'. esc_attr($options_in['link']) .'!important; }';
	 	 }}
		 if(!empty($options_in['hover'])){if($options_in['hover']!='#fffff1'){
	 		 $custom_styles .='.mt-smart-menu a:hover, .mt-smart-menu .close:hover:before { color:'. esc_attr($options_in['hover']) .'!important; }';
	 	 }}
		 if(!empty($options_in['out'])){if($options_in['out']!='#fffff1'){
	 		 $custom_styles .='.mobile-menu-active  .mt-smart-menu-out { background-color:'. esc_attr($options_in['out']) .'!important; }';
	 	 }}
		 $options_in = get_option("mt_colors_menu_search");
 	 	 if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
 	 		 $custom_styles .='.nav-search-wrap .nav-search-input { background-color:'. esc_attr($options_in['background']) .'!important; }';
 	 	 }}
 	 	 if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
 	 		 $custom_styles .='.mt-header-mobile .nav-search-input:before, .search-close:before, .nav-search-input input{ color:'. esc_attr($options_in['text']) .'!important; }';
 			 $custom_styles .='
 			 .nav-search-input input,.nav-search-input:before { color:'. esc_attr($options_in['text']) .'!important; }
 			 .nav-search-input input::-webkit-input-placeholder { color:'. esc_attr($options_in['text']) .'!important; }
 			 .nav-search-input input:-moz-placeholder { color:'. esc_attr($options_in['text']) .'!important; }
 			 .nav-search-input input::-moz-placeholder { color:'. esc_attr($options_in['text']) .'!important; }
 			 .nav-search-input input:-ms-input-placeholder { color:'. esc_attr($options_in['text']) .'!important; }';
 	 	 }}

	// Other
	$options_in = get_option("colors_post_view");
	if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
		$custom_styles .='.post-statistic .stat-views { color:'. esc_attr($options_in['text']) .'!important; }';
	}}
	if(!empty($options_in['text_dark'])){if($options_in['text_dark']!='#fffff1'){
		$custom_styles .='.post-bgphoto .post-statistic .stat-views { color:'. esc_attr($options_in['text_dark']) .'!important; }';
	}}
	if(!empty($options_in['icon'])){if($options_in['icon']!='#fffff1'){
		$custom_styles .='.post-statistic .stat-views:before { color:'. esc_attr($options_in['icon']) .'!important; }';
	}}
	if(!empty($options_in['icon_dark'])){if($options_in['icon_dark']!='#fffff1'){
		$custom_styles .='.post-bgphoto .post-statistic .stat-views:before { color:'. esc_attr($options_in['icon_dark']) .'!important; }';
	}}
	$options_in = get_option("colors_post_share");
	if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
		$custom_styles .='.post-statistic .stat-shares { color:'. esc_attr($options_in['text']) .'!important; }';
	}}
	if(!empty($options_in['text_dark'])){if($options_in['text_dark']!='#fffff1'){
		$custom_styles .='.post-bgphoto .post-statistic .stat-shares { color:'. esc_attr($options_in['text_dark']) .'!important; }';
	}}
	if(!empty($options_in['icon'])){if($options_in['icon']!='#fffff1'){
		$custom_styles .='.post-statistic .stat-shares:before { color:'. esc_attr($options_in['icon']) .'!important; }';
	}}
	if(!empty($options_in['icon_dark'])){if($options_in['icon_dark']!='#fffff1'){
		$custom_styles .='.post-bgphoto .post-statistic .stat-shares:before { color:'. esc_attr($options_in['icon_dark']) .'!important; }';
	}}

	$options_in = get_option("mt_colors_cat");
	if(!empty($options_in['background'])){if($options_in['background']!='#fffff1'){
		$custom_styles .='.df-is-megamenu ul .poster-cat, .poster-cat span, .single-cat-wrap .post-categories li a, .grid-post .poster-cat span, .poster-large-cat span, .poster-info { background-color:'. esc_attr($options_in['background']) .'!important; }';
	}}
	if(!empty($options_in['text'])){if($options_in['text']!='#fffff1'){
		$custom_styles .='.df-is-megamenu ul .poster-cat span, .poster-cat span, .single-cat-wrap .post-categories li a, .grid-post .poster-cat span, .poster-large-cat span, .poster-info, .poster-info, .poster.size-normal .poster-cat span, .poster.trending-normal .poster-cat span, .poster.trending-carousel .poster-cat span { color:'. esc_attr($options_in['text']) .'!important; }';
	}}


	// Footer Colors
		$options_in = get_option("mt_colors_footer_bottom");
		if(!empty($options_in)){
			if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.footer-bottom, .footer-top { background:'. esc_attr($options_in['background']) .'!important; }'; } }
			if(!empty($options_in['text'])){ if($options_in['text']!='#fffff1'){ $custom_styles .='.footer-bottom p { color:'. esc_attr($options_in['text']) .'!important; }'; } }
			if(!empty($options_in['link'])){ if($options_in['link']!='#fffff1'){ $custom_styles .='.footer-bottom a { color:'. esc_attr($options_in['link']) .'!important; }'; } }
			if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.footer-bottom a:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; } }
		} else {
			if(!empty($options['colors_footer_bottom_background'])){ $custom_styles .=' .footer-bottom { background: '. esc_attr($options['colors_footer_bottom_background']) .'; } '; }
			if(!empty($options['colors_footer_bottom_text'])){ $custom_styles .=' .footer-bottom p { color: '. esc_attr($options['colors_footer_bottom_text']) .'; } '; }
			if(!empty($options['colors_footer_bottom_link'])){ $custom_styles .=' .footer-bottom a { color: '. esc_attr($options['colors_footer_bottom_link']) .'; } '; }
			if(!empty($options['colors_footer_bottom_link_hover'])){ $custom_styles .=' .footer-bottom a:hover { color: '. esc_attr($options['colors_footer_bottom_link_hover']) .'; } '; }
		}

		$options_in = get_option("mt_colors_footer_social");
		if(!empty($options_in)){
			if(!empty($options_in['icon'])){ if($options_in['icon']!='#fffff1'){ $custom_styles .='.footer .social li a { color:'. esc_attr($options_in['icon']) .'!important; }'; } }
			if(!empty($options_in['hover'])){ if($options_in['hover']!='#fffff1'){ $custom_styles .='.footer .social li a:hover { color:'. esc_attr($options_in['hover']) .'!important; }'; } }
			if(!empty($options_in['background'])){ if($options_in['background']!='#fffff1'){ $custom_styles .='.footer .social li a { background:  { color:'. esc_attr($options_in['background']) .'!important; }'; } }
			if(!empty($options_in['background_hover'])){ if($options_in['background_hover']!='#fffff1'){ $custom_styles .='.footer .social li a:hover { background:'. esc_attr($options_in['background_hover']) .'!important; }'; } }
		} else {
			if(!empty($options['colors_footer_social_icon'])){ $custom_styles .=' .footer .social li a { color: '. esc_attr($options['colors_footer_social_icon']) .'; } '; }
			if(!empty($options['colors_footer_social_background'])){ $custom_styles .=' .footer .social li a { background: '. esc_attr($options['colors_footer_social_background']) .'; } '; }
			if(!empty($options['colors_footer_social_icon_hover'])){ $custom_styles .=' .footer .social li a:hover { color: '. esc_attr($options['colors_footer_social_icon_hover']) .'; } '; }
			if(!empty($options['colors_footer_social_background_hover'])){ $custom_styles .=' .footer .social li a:hover { background: '. esc_attr($options['colors_footer_social_background_hover']) .'; } '; }
		}

	 if ( $custom_styles != '' ) {
	  $css = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $custom_styles);
		wp_add_inline_style( 'fullstory-style', $css );
	}

}
add_action( 'wp_enqueue_scripts', 'fullstory_css');

function fullstory_header_script() {

		$option = get_option("fullstory_theme_options");

		wp_enqueue_script( 'fullstory_script', get_template_directory_uri(). '/inc/js/scripts.js', array( 'jquery'), '', true );
		wp_localize_script( 'fullstory_script', 'ajax_posts', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'noposts' => esc_html__('No older posts found', 'fullstory'), ));

		// Third party scripts/ styles don't need to be prefixed to avoid double loading
		wp_enqueue_script('jquery-html5shiv', get_template_directory_uri() . '/inc/js/html5shiv.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'jquery-_html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('jquery-respondmin', get_template_directory_uri() . '/inc/js/respond.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'jquery-respondmin', 'conditional', 'lt IE 9' );


    function fullstory_fonts_url() {

      $theme_font = "Lato:400,900,700";

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'fullstory' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .'' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }
    wp_enqueue_style( 'fullstory-fonts', fullstory_fonts_url(), array(), '1.0.0' );


}
add_action('wp_enqueue_scripts', 'fullstory_header_script');

function fullstory_admin_script() {
	wp_enqueue_style('fullstory-admin', get_template_directory_uri().'/inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'fullstory_admin_script');


add_filter('body_class','fullstory_class');
function fullstory_class($classes) {

	$body_class = "";

	$options = get_option("fullstory_theme_options");

	if(!empty( $options['mt_menu_fix'])){
		if( $options['mt_menu_fix']=="1") {
			$body_class .= 'mt-fixed ';
		}  else {
			$body_class .= ' mt-fixed-no ';
		}
	} else {
		$body_class .= ' mt-fixed-no ';
	}

	if(!empty( $options['menu_fixed'])){
		if($options['menu_fixed']=="mt-fixed-up") {
			$body_class .= ' mt-fixed-up ';
		}  else if($options['menu_fixed']=="mt-fixed-always") {
			$body_class .= ' mt-fixed-always ';
		} else if($options['menu_fixed']=="mt-fixed-disabled") {
			$body_class .= ' mt-fixed-disabled ';
		}
	} else {
		$body_class .= ' mt-fixed-up ';
	}


	$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
	if(!empty($style)){
		$body_class .= ' post-style-'.$style;
		if($style=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
			$body_class .= ' post-bgphoto';
		}
		if($style=="7" and is_single()) {
			$body_class .= ' post-bgphoto';
		}
		if($style=="6" and is_single()) {
			$body_class .= ' post-bgphoto';
		}
	} else if (!empty($options['post_style'])) {
		$body_class .= ' post-style-'.$options['post_style'];
		if($options['post_style']=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
			$body_class .= ' post-bgphoto';
		}
		if($options['post_style']=="7" and is_single()) {
			$body_class .= ' post-bgphoto';
		}
		if($options['post_style']=="6" and is_single()) {
			$body_class .= ' post-bgphoto';
		}

	}

	$layout = get_post_meta(get_the_ID(), "magazin_layout", true);
	if(!empty($layout)){
		$body_class .= ' boxed-layout-on';
	} else if (!empty($options['boxed'])) {
		if ($options['boxed']=="1") {
			$body_class .= ' boxed-layout-on';
		}
	}

	if(!empty($options['menu_random'])) {
		if($options['menu_random']!="1") {
			$body_class .= ' random-off';
		}
	} else {
		$body_class .= ' random-off';
	}

	if(!empty($options['menu_top_ad'])) {
		if($options['menu_top_ad']=="ad") {
			$body_class .= ' menu-ad-on';
		}
	} else {
		$body_class .= ' menu-ad-off';
	}

	if(!empty($options['header_top'])) {
		$body_class .= ' header-top-on';
	} else {
		$body_class .= ' header-top-off';
	}

	$first_leter = get_post_meta(get_the_ID(), "magazin_first_letter", true);
	if(!empty($first_leter)){
		if ($first_leter=="on") {
			$body_class .= ' mt-fl-on ';
		}
	} else {
		if ( true == get_theme_mod( 'mt_first_letter', false ) ) {
			$body_class .=' mt-fl-on ';
		}
	}


	$page_space = get_post_meta(get_the_ID(), "magazin_page_padding", true);
	if(!empty($page_space)){
		$body_class .= ' remove-page-padding ';
	}

	$classes[] =  $body_class;
	return $classes;
}

?>
