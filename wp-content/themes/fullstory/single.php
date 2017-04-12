<?php
/**
 * @author Madars Bitenieks
 * @copyright 2017
 */

get_header();

if(function_exists('magazin_PostViews')){  magazin_PostViews(get_the_ID()); }

$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
$option = get_option("fullstory_theme_options");
$default = "";
if(!empty($option['post_style'])) {
	$default = $option['post_style'];
}

$carousel = get_post_meta(get_the_ID(), "magazin_post_carousel", true);

if ($carousel == "yes"){ ?>
	<div class="single-top">
		<?php echo do_shortcode('[posts type=carousel-post-slider]'); ?>
	</div> <?php
} else if ($carousel == "no"){
} else if (!empty($option['post_carousel'])){
	if ($option['post_carousel']=="1" or $option['post_carousel']=="yes" or $option['post_carousel']==""){ ?>
		<div class="single-top">
			<?php echo do_shortcode('[posts type=carousel-post-slider]'); ?>
		</div> <?php
	}
}
?>

<article itemscope itemtype="http://schema.org/Article">

<?php while ( have_posts() ) : the_post();

	if($style=="1") { post_style_1(); }

	else if($style=="2") { post_style_2(); }

	else if($style=="3") { post_style_3(); }

	else if($style=="4") { post_style_4(); }

	else if($style=="5") { post_style_5(); }

	else if($style=="6") { post_style_6(); }

	else if($style=="7") { post_style_7(); }

	else if($style=="8") { post_style_8(); }

	else if($style=="9") { post_style_9(); }

	else if($style=="10") { post_style_10(); }

	else if($style=="11") { post_style_11(); }

	else if($style=="12") { post_style_12(); }

	else if($style=="13") { post_style_13(); }

	else {

		if($default=="2") { post_style_2(); }

		else if($default=="3") { post_style_3(); }

		else if($default=="4") { post_style_4(); }

		else if($default=="5") { post_style_5(); }

		else if($default=="6") { post_style_6(); }

		else if($default=="7") { post_style_7(); }

		else if($default=="8") { post_style_8(); }

		else if($default=="9") { post_style_9(); }

		else if($default=="10") { post_style_10(); }

		else if($default=="11") { post_style_11(); }

		else if($default=="12") { post_style_12(); }

		else if($default=="13") { post_style_13(); }

		else { post_style_1(); }

	}


endwhile;
?>

<div class="hidde" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
	<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),"large"); ?>">
	<meta itemprop="width" content="1200"><meta itemprop="height" content="801">
</div>
<div class="hidde" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
	<div class="hidde" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
	<?php $option = get_option("fullstory_theme_options"); ?>
	<?php if(!empty($option['header_logo'])) { ?><meta itemprop="url" content="<?php echo esc_url($option['header_logo']); ?>"><?php } ?>
	<?php if(!empty($option['logo_width'])) { ?><meta itemprop="width" content="<?php echo esc_attr($option['logo_width']); ?>"><?php } ?>
	<?php if(!empty($option['logo_height'])) { ?><meta itemprop="height" content="<?php echo esc_attr($option['logo_height']); ?>"><?php } ?>
	</div>
	<?php $publisher = get_option("mt_shema_publisher");  if(!empty($publisher)) {  ?><meta itemprop="name" content="<?php echo esc_attr($publisher); ?>"><?php } ?>
</div>
</article>

<?php get_footer(); ?>
