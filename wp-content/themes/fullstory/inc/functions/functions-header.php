<?php function fullstory_header() {
$allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
$option = get_option("fullstory_theme_options");
$optioz = get_option("magazin_theme_options");
$page_option = get_post_meta(get_the_ID(), "magazin_menu_background_width", true);
if(!empty($page_option)) {
	if($page_option=="2") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
}
else if(!empty($option['menu_background_width'])) {
	if($option['menu_background_width']=="full") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
} else {
	$menu_full =  '';
	$menu_boxed =  'menu-background';
}
?>


<div class="header-wrap" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<?php if ( true == get_theme_mod( 'mt_header_top', false ) ) {  ?>
		<div class="header-mt-container-wrap">
			<div class="container mt-header-container">
				<div class="row">
					<div class="col-md-12">
						<div class="head container-fluid">
							<div class="pull-left mt-top-social">
								<?php fullstory_socials(); ?>
							</div>
							<?php if ( true == get_theme_mod( 'mt_top_follower', true ) ) { ?>
							<div class="mt-top-followers pull-left mt-top-share">
								<strong></strong> <span><?php esc_html_e( 'Followers', 'fullstory' ); ?></span>
							</div>
							<?php } ?>
							<div class="pull-right mt-top-menu">
								<?php fullstory_top_menu(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="header-menu mt-header-container <?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>search-on<?php } } if(!empty($option['menu_small_on'])) { ?> small-on<?php } ?> ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-nav container-fluid">



						<div class="nav-button mt-radius pointer  <?php if ( false == get_theme_mod( 'mt_menu_small_on', false ) ) { echo "hide-desktop"; } ?>">
							<div class="mt-m-cool-button">
								<span class="mt-m-cool-button-line"></span>
							</div>
						</div>

						<div class="head-logo" <?php if(!empty($option['logo_width'])) { ?>  style="width:<?php echo esc_attr($option['logo_width']); ?>" <?php } ?>><?php fullstory_logo(); ?></div>

						<div class="nav mt-radius" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" >
							<?php fullstory_nav(); ?>
						</div>


						<div class="mt-head-right">
						<?php if ( true == get_theme_mod( 'mt_menu_search', false ) ) { ?>
							<div class="nav-search-wrap  mt-radius">
								<div class="nav-search pointer"></div>
								<div class="nav-search-input mt-radius">
									<form method="get" action="<?php echo esc_url(home_url('/')); ?>/">
										<input type="text" placeholder="<?php esc_html_e( 'Type and hit enter to search ...', 'fullstory' ); ?>"  name="s" >
									</form>
								</div>
							</div>
							<div class="search-close"></div>
						<?php } ?>
							<?php fullstory_socials(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php	if ( true == get_theme_mod( 'mt_menu_share', true ) ) { fullstory_header_fixed();	} ?>
</div>
<div class="header-wrap-space"></div>
<?php if  (!empty($optioz['header_ad_top'])) {  ?>
	<div class="mt-t-ad">
		<div class="mt-t-ad-in">
			<?php echo html_entity_decode($optioz['header_ad_top']); ?>
		</div>
	</div>
<?php } ?>
<?php } add_filter('fullstory_header','fullstory_header');


function fullstory_top_content() { $option = get_option("fullstory_theme_options"); ?>
		<div class="head-nav">
			<?php if(!empty($option['url_latest'])) { ?><a class="mt_l_latest <?php if($option['url_latest']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_latest'])); ?>"><?php esc_html_e( 'LATEST', 'fullstory' ); ?> <span><?php esc_html_e( 'Posts', 'fullstory' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_popular'])) { ?><a class="mt_l_popular <?php if($option['url_popular']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_popular'])); ?>"><?php esc_html_e( 'POPULAR', 'fullstory' ); ?> <span><?php esc_html_e( 'Posts', 'fullstory' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_hot'])) { ?><a class="mt_l_hot <?php if($option['url_hot']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_hot'])); ?>"><?php esc_html_e( 'HOT', 'fullstory' ); ?> <span><?php esc_html_e( 'Posts', 'fullstory' ); ?></span></a><?php } ?>
			<?php if(!empty($option['url_trending'])) { ?>	<a class="mt_l_trending <?php if($option['url_trending']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_trending'])); ?>"><?php esc_html_e( 'TRENDING', 'fullstory' ); ?> <span><?php esc_html_e( 'Posts', 'fullstory' ); ?></span></a><?php } ?>
		</div>

		<?php if(!empty($option['header_link_url'])) { ?>
				<div class="head-bookmark">
					<a class="mt-radius" href="<?php echo esc_url($option['header_link_url']);  ?>" <?php if(!empty($option['header_link_blank'])) { if($option['header_link_blank']=="1") {?>target="_blank" <?php }} ?>><?php echo esc_attr(get_theme_mod('fullstory_header_link_name', 'Add Post')); ?></a>
				</div>
		<?php } ?>
<?php }
add_filter('fullstory_top_content','fullstory_top_content');

function fullstory_logo() {

	$option = get_option("fullstory_theme_options");

	// Fix for SSL
	if(!empty($option['header_logo'])) {
		$header_logo = esc_url($option['header_logo']);
		if(is_ssl() and 'http' == parse_url($header_logo, PHP_URL_SCHEME) ){
				$header_logo = str_replace('http://', 'https://', $header_logo);
		}
	}
	if(!empty($option['header_logox2'])) {
		$header_logo2 = esc_url($option['header_logox2']);
		if(is_ssl() and 'http' == parse_url($header_logo2, PHP_URL_SCHEME) ){
				$header_logo2 = str_replace('http://', 'https://', $header_logo2);
		}
	}

	if(!empty($option['header_logo'])) { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img <?php if(!empty($option['logo_width'])) { ?>  width="<?php echo esc_attr($option['logo_width']); ?>" <?php } if(!empty($option['logo_height'])) { ?>  height="<?php echo esc_attr($option['logo_height']); ?>" <?php } ?>
			src="<?php echo esc_url($header_logo); ?>"
			srcset="<?php echo esc_url($header_logo); ?>, <?php if(!empty($option['header_logox2'])) { echo esc_url($header_logo2); } ?> 2x"  alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" width="108" height="15" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}

add_filter('fullstory_logo','fullstory_logo');

function fullstory_logo_mobile() {

	$option = get_option("fullstory_theme_options"); ?>

	<?php if(!empty($option['mobile_logo'])) { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo esc_url($option['mobile_logo']); ?>" alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}
add_filter('fullstory_logo_mobile','fullstory_logo_mobile');

function fullstory_nav() {
	if(class_exists('md_walker__')) {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'walker'	=> new md_walker, 'echo' => true, 'depth' => 3, 'fallback_cb' => false));
	} else {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'echo' => true, 'depth' => 3));
	}
}
add_filter('fullstory_nav','fullstory_nav');

function fullstory_nav_fixed() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'fixed-menu-ul',  'echo' => true, 'depth' => 1));
}
add_filter('fullstory_nav_fixed','fullstory_nav_fixed');

function fullstory_nav_mobile() {
	wp_nav_menu( array('theme_location'=>"mobile",  'menu_class' => 'mobile',  'echo' => true, 'depth' => 2));
}
add_filter('fullstory_nav_mobile','fullstory_nav_mobile');

function fullstory_top_menu() {
	wp_nav_menu( array('theme_location'=>"top_menu",  'menu_class' => 'top-menu',  'echo' => true, 'depth' => 1));
}
add_filter('fullstory_top_menu','fullstory_top_menu');

function fullstory_socials() { ?>
	<ul class="social"> <?php
			$option = get_option("fullstory_theme_options");
			if(!empty($option['mt_icon_twitter'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_twitter']); ?>"><i class="ic-twitter"></i></a></li><?php }
			if(!empty($option['mt_icon_facebook'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_facebook']); ?>" ><i class="ic-facebook"></i></a></li><?php }
			if(!empty($option['mt_icon_intagram'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) {  if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_intagram']); ?>" ><i class="ic-instagram"></i></a></li><?php }
			if(!empty($option['mt_icon_vimeo'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_vimeo']); ?>"><i class="ic-vimeo"></i></a></li><?php }
			if(!empty($option['mt_icon_youtube'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_youtube']); ?>"><i class="ic-youtube-play"></i></a></li><?php }
			if(!empty($option['mt_icon_linkedin'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_linkedin']); ?>"><i class="ic-linkedin"></i></a></li><?php }
			if(!empty($option['mt_icon_gplus'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_gplus']); ?>"><i class="ic-google-plus"></i></a></li><?php }
			if(!empty($option['mt_icon_dribble'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_dribble']); ?>"><i class="ic-dribbble"></i></a></li><?php }
			if(!empty($option['mt_icon_skype'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_skype']); ?>"><i class="ic-skype"></i></a></li><?php }
			if(!empty($option['mt_icon_pinterest'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_pinterest']); ?>"><i class="ic-pinterest"></i></a></li><?php }
			if(!empty($option['mt_icon_rss'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_rss']); ?>"><i class="ic-rss"></i></a></li><?php }
			?>
	</ul><?php
} add_filter('fullstory_socials','fullstory_socials');

function fullstory_header_fixed() {
	if (is_single()) {
		/* Share Meta from Magazin framework */
		$share = get_post_meta(get_the_ID(), "magazin_share_count", true);
		$share_real = get_post_meta(get_the_ID(), "magazin_share_count_real", true);
		$shares = $share_real;
		if (!empty($share)){
			$shares = $share+$share_real;
		}
		/* View Meta from Magazin framework */
		$view = get_post_meta(get_the_ID(), "magazin_view_count", true);
		$viewes = "0";
		if (!empty($view)){
			$viewes = $view;
		}
		$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
		?>
		<?php $option = get_option("fullstory_theme_options"); ?>
				<div class="fixed-top">
					<div class="container-fuild">
						<div class="row">
							<div class="col-md-12">

								<ul class="share">
									<li class="share-facebook"><a class="mt-radius" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html__('Share on Facebook', 'fullstory'); ?></span></a></li>
									<?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
									<li class="share-twitter"><a class="mt-radius" href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html__('Tweet on Twitter', 'fullstory'); ?></span></a></li>
									<li class="share-more">
										<div class="share-more-wrap"><div class="share-more-icon mt-radius">+</div></div>
										<a class="mt-radius" href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google mt-radius-b"></div></a>
										<a class="mt-radius" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	<?php } ?>
<?php } add_filter('fullstory_header_fixed','fullstory_header_fixed'); ?>
