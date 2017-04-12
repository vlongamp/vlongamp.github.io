<?php function fullstory_single_cat() {?>

  <div class="single-cat-wrap"><?php echo get_the_category_list(); ?></div>

<?php } ?>
<?php function fullstory_single_cat_posts() {

  $category_name = get_the_category(get_the_ID()); $cat =""; if(!empty($category_name[0])) { $cat =''.$category_name[0]->slug.''; } if ( shortcode_exists( 'posts' ) ) { echo do_shortcode('[posts item_nr=5  category="'.$cat.'" type=small-bottom ]'); }

} ?>
<?php function fullstory_single_title() { $subtitle = get_post_meta(get_the_ID(), "magazin_subtitle", true); ?>
  <h1 class="single-title" itemprop="headline"><?php echo get_the_title(); ?></h1>
  <?php if(!empty($subtitle)){ ?><h2 class="single-subtitle" itemprop="description"><?php echo esc_attr($subtitle); ?></h2><?php } ?>
<?php } ?>
<?php function fullstory_single_social() {
$share_top = "";
$share_top = get_post_meta(get_the_ID(), "magazin_post_share_top", true);

/* Share Meta from Magazin framework */
$share = get_post_meta(get_the_ID(), "magazin_share_count", true);
$shares = "0";
if (class_exists('Kirki')) {
  $shares = magazin_get_shares(get_the_ID());
}
if (!empty($share)){
	$shares = $share+$shares;
}
$shares = number_format($shares);
/* View Meta from Magazin framework */
$view = get_post_meta(get_the_ID(), "magazin_view_count", true);
$views = get_post_meta(get_the_ID(), "magazin_post_views_count", true);
$viewes = $views + "0";
if (!empty($view)){ $viewes = $view + $views; $viewes = number_format($viewes); }

$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

?>
  <div class="after-title">
    <div class="pull-left">
      <div class="author-img pull-left">
        <?php global $post; echo get_avatar( $post->post_author, 24 ); ?>
      </div>
      <div class="author-info">
        <div class="mt-author-soc hidden">
          <?php $twitterHandle = get_the_author_meta('twitter');
          $facebookHandle = get_the_author_meta('facebook');
          $googleHandle = get_the_author_meta('gplus');
          $instagramHandle = get_the_author_meta('instagram');
          $linkedinHandle = get_the_author_meta('linkedin');
          $pinterestHandle = get_the_author_meta('pinterest');
          $youtubeHandle = get_the_author_meta('youtube');
          $dribbbleHandle = get_the_author_meta('dribbble'); ?>
          <?php if(!empty($twitterHandle)) { ?><a class="mt-bio-twitter" href="<?php echo esc_url($twitterHandle); ?>"></a> <?php } ?>
          <?php if(!empty($facebookHandle)) { ?><a class="mt-bio-facebook" href="<?php echo esc_url($facebookHandle); ?>"></a> <?php } ?>
          <?php if(!empty($googleHandle)) { ?><a class="mt-bio-google" href="<?php echo esc_url($googleHandle); ?>"></a> <?php } ?>
          <?php if(!empty($instagramHandle)) { ?><a class="mt-bio-instagram" href="<?php echo esc_url($instagramHandle); ?>"></a> <?php } ?>
          <?php if(!empty($linkedinHandle)) { ?><a class="mt-bio-linkedin" href="<?php echo esc_url($linkedinHandle); ?>"></a> <?php } ?>
          <?php if(!empty($pinterestHandle)) { ?><a class="mt-bio-pinterest" href="<?php echo esc_url($pinterestHandle); ?>"></a> <?php } ?>
          <?php if(!empty($youtubeHandle)) { ?><a class="mt-bio-youtube" href="<?php echo esc_url($youtubeHandle); ?>"></a> <?php } ?>
          <?php if(!empty($dribbbleHandle)) { ?><a class="mt-bio-dribbble" href="<?php echo esc_url($dribbbleHandle); ?>"></a> <?php } ?>
        </div>
        <strong><?php the_author_posts_link(); ?></strong>
        <small class="color-silver-light"><?php the_date('M d, Y'); ?></small>
      </div>
    </div>

    <?php if(class_exists('md_walker')) { ?>
    <div class="post-statistic pull-left">
      <?php if(!empty($shares)){ ?><span class="stat-shares"><?php echo esc_attr($shares); ?> <?php echo esc_html__('Shares', 'fullstory'); ?></span><?php } ?>
      <?php if(!empty($viewes)){ ?><span class="stat-views"><?php echo esc_attr($viewes); ?> <?php echo esc_html__('Views', 'fullstory'); ?></span><?php } ?>
      <?php if (get_comments_number()!="0") { ?><span class="stat-comments"><?php echo get_comments_number(); ?> Comments</span><?php } ?>
    </div>
    <?php } ?>
    <?php if($share_top=="" or $share_top == "yes"){ ?>
    <ul class="share top">
      <li class="share-facebook"><a class="mt-radius" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html__('Share on Facebook', 'fullstory'); ?></span></a></li>
      <?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
      <li class="share-twitter"><a class="mt-radius" href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html__('Tweet on Twitter', 'fullstory'); ?></span></a></li>
      <li class="share-more">
        <div class="share-more-wrap"><div class="share-more-icon mt-radius">+</div></div>

        <a class="mt-radius" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
        <a class="mt-radius" href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google mt-radius-b"></div></a>

      </li>
    </ul>
    <?php } ?>
    <div class="clearfix"></div>
  </div>

<?php } ?>
