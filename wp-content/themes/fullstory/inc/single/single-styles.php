<?php function post_style_1(){ ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "right"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">

      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>" >

        <div class="row">
          <div class="col-md-12">
            <?php fullstory_single_cat(); ?>
            <?php fullstory_single_title(); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php fullstory_single_media(); ?>

              <?php fullstory_single_social(); ?>
            <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
            <?php fullstory_single_bottom(); ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 pull-right <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } add_filter('post_style_1','post_style_1'); ?>
<?php function post_style_2(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">

        <?php fullstory_single_media(); ?>
        <?php fullstory_single_cat(); ?>
        <?php fullstory_single_title(); ?>
        <?php fullstory_single_social(); ?>
        <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
        <?php fullstory_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_3(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">
        <?php fullstory_single_cat(); ?>
        <?php fullstory_single_title(); ?>
        <?php fullstory_single_social(); ?>
        <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
        <?php fullstory_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_4(){ ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
<div class="post-media-wrap">
  <div class="container">

      <?php fullstory_single_cat(); ?>
      <?php fullstory_single_title(); ?>
    <div class="single-media-top"><?php fullstory_single_media(); ?></div>
  </div>
</div>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">

      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">
        <?php fullstory_single_social(); ?>
        <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
        <?php fullstory_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php function post_style_5(){ ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-12">
        <?php fullstory_single_cat(); ?>
        <?php fullstory_single_title(); ?>
      </div>
    </div>
    <div class="row">
      <div class="single-content col-md-12">
        <div class="single-media-top"><?php fullstory_single_media(); ?></div>
      </div>
    </div>
    <div class="row">

      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">

        <?php fullstory_single_social(); ?>
        <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
        <?php fullstory_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_6(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() ) { ?>
    <div class="post-media-wrap">
      <div class="container">
      	<div class="single-media-top mt-radius single-image-gradient">
      		<div class="mt-post-image"><div class="mt-post-image-background" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'magazin_5'); ?>');"></div><img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>" width="550" height="550" /></div>
          <?php $copyright = get_post_meta(get_the_ID(), "magazin_img_copyright", true); if(!empty($copyright)){ ?><span class="mt-img-copyright"><?php echo esc_attr($copyright); ?></span><?php } ?>

          <div class="single-media-title">
      			<div class="col-md-9">
      				<?php fullstory_single_cat(); ?>
      	      <?php fullstory_single_title(); ?>
      			</div>
      			<div class="col-md-12">
      			</div>
      		</div>
        </div>
      </div>
    </div>
	<?php } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">

          <?php fullstory_single_social(); ?>

        <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
        <?php fullstory_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_7(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() ) { ?>
    <div class="post-media-wrap">
      <div class="single-media">
        <div class="single-media-wrap">
          <div class="mt-post-image"><div class="mt-post-image-background" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'magazin_5'); ?>');"></div><img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" width="550" height="550" /></div>
          <?php $copyright = get_post_meta(get_the_ID(), "magazin_img_copyright", true); if(!empty($copyright)){ ?><span class="mt-img-copyright"><?php echo esc_attr($copyright); ?></span><?php } ?>
        <div class="single-image-gradient">
    			<div class="single-media-title">
            <div class="container">
              <div class="row">
        				<div class="col-md-10">
                  <?php fullstory_single_cat(); ?>
        		      <?php fullstory_single_title(); ?>
        				</div>
        				<div class="col-md-12">
        				</div>
              </div>
            </div>
    			</div>
          </div>
      </div>
    </div>
  </div>
	<?php } ?>
  <div class="post-content-wrap mt-content-container">
    <div class="container">
      <div class="row">
        <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">
          <?php fullstory_single_social(); ?>
          <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
          <?php fullstory_single_bottom(); ?>
        </div>
        <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
          <?php fullstory_single_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php function post_style_8(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() ) { ?>
    <div class="post-media-wrap"></div>
        <div class="single-media-top single-image-gradient">
          <?php $copyright = get_post_meta(get_the_ID(), "magazin_img_copyright", true); if(!empty($copyright)){ ?><span class="mt-img-copyright"><?php echo esc_attr($copyright); ?></span><?php } ?>

    			<div class="single-media-title">
    				<div class="col-md-10">
    					<?php fullstory_single_cat(); ?>
    		      <?php fullstory_single_title(); ?>
    				</div>
    				<div class="col-md-12">
    				</div>
    			</div>
    		</div>
	<?php } ?>
<div class="post-content-wrap mt-content-container">
  <div class="container">
    <div class="row">
      <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?>">
        <?php fullstory_single_social(); ?>
        <div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
        <?php fullstory_single_bottom(); ?>
      </div>
      <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
        <?php fullstory_single_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php function post_style_9(){  ?>
<?php $ls = get_post_meta(get_the_ID(), "magazin_post_sidebar", true); $fl = "pull-left"; $fs = "pull-right"; $o = get_option("fullstory_theme_options"); if(!empty($ls)){ $l = $ls; } else { if(!empty($o['post_sidebar'])){ $l = $o['post_sidebar']; } else { 	$l = "left"; } } if ($l == "left") { $fl = "pull-right"; $fs = "pull-left"; } ?>
	<?php  if ( has_post_thumbnail() )  { ?>
  	<div class="single-media-top single-image-gradient">
			<div class="single-media-title">
				<div class="col-md-10">
					<?php fullstory_single_cat(); ?>
		      <?php fullstory_single_title(); ?>
				</div>
				<div class="col-md-12">
				  <?php fullstory_single_social(); ?>
				</div>
			</div>
		</div>
	<?php } ?>
  <div class="row">
    <div class="single-content col-md-8 <?php echo sanitize_html_class($fl); ?> ">
			<div class="entry-content" itemprop="mainContentOfPage"><?php the_content(); ?></div>
      <?php fullstory_single_bottom(); ?>
    </div>
    <div class="col-md-4 pull-left <?php echo sanitize_html_class($fs); ?> sidebar theiaStickySidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
      <?php fullstory_single_sidebar(); ?>
    </div>
  </div>
<?php } ?>
