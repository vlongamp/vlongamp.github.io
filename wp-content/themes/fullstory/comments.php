<?php
/**
 * @author madars.bitenieks
 * @copyright 2017
 */
?>
<?php if ( comments_open() ) { ?><div class="mt-comment-area"><?php } ?>
<?php if ( post_password_required() ): ?>
     <p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view and post comments.' , 'fullstory' ); ?></p>

<?php
        return;
      endif;
?>

<?php if ( have_comments() ) : ?>
<div id="coment-line-space"></div>

			<h4 class="heading-left padding-0 mt-comment-head"><span><?php
			printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'fullstory' ),
			number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?></span></h4>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through?

	 $fullstory_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));

?>
			<div class="navigation mt-coment-nav mt-comment-nav-top">
				<div class="nav-previous"><?php previous_comments_link( wp_kses(__( '<span class="meta-nav">&larr;</span> Older Comments', 'fullstory' ), $fullstory_allowed_html_array )); ?></div>
				<div class="nav-next"><?php next_comments_link( wp_kses(__( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'fullstory' ) , $fullstory_allowed_html_array )); ?></div>
			</div> <!-- .navigation -->
      <div class="clearfix"></div>
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php
					wp_list_comments( array( 'callback' => 'fullstory_comment' ) );
				?>
			</ol>
            <div class="line-comment"></div>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through?


	 $fullstory_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
?>
			<div class="navigation mt-coment-nav">
				<div class="nav-previous"><?php previous_comments_link( wp_kses(__( '<span class="meta-nav">&larr;</span> Older Comments', 'fullstory' ) , $fullstory_allowed_html_array )); ?></div>
				<div class="nav-next"><?php next_comments_link( wp_kses(__( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'fullstory' ) , $fullstory_allowed_html_array )); ?></div>
			</div><!-- .navigation -->
      <div class="clearfix"></div>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	if ( ! comments_open() ) :
?>

<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ? ?>
<!--<div><span class="line"></span></div>-->

<?php
$fields =  array(
  'author' => '<div class="row"><div class="comment-input col-md-4 mt_comment_i_1"><input id="author" placeholder="'. esc_html__( 'Name', 'fullstory' ) .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></div>',
  'email'  => '<div class="comment-input col-md-4 mt_comment_i_2"><input id="email" name="email" type="text"  placeholder="'. esc_html__( 'Email', 'fullstory' ) .'" value="' . esc_html(  $commenter['comment_author_email'] ) . '" size="30" /></div>',
	'url'    => '<div class="comment-input col-md-4 mt_comment_i_3"><input class="input" id="url" name="url"  placeholder="'. esc_html__( 'Website', 'fullstory' ) .'" type="text" value="' . esc_url( $commenter['comment_author_url'] ) . '" size="30" /></div></div>',
);

 $defaults = array(
  'comment_field'        => '<span class="comment-adres-not-publish">'. esc_html__( 'Your email address will not be published.', 'fullstory') .'</span><p class="comment-textarea"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" ></textarea></p>',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'title_reply'          => esc_html__( 'Leave a Comment', 'fullstory' ),
	'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'fullstory' ),
	'cancel_reply_link'    => esc_html__( ' ', 'fullstory' ),
	'label_submit'         => esc_html__( 'Submit Comment', 'fullstory' ),
	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
);
?>

<?php
 comment_form($defaults); ?>
<?php if ( comments_open() ) { ?></div><?php } ?>

<!-- #comments -->
