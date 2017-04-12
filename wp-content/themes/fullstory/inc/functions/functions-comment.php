<?php
if ( ! function_exists( 'fullstory_posted_on' ) ) :

function fullstory_posted_on() {
	$fullstory_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
	printf( wp_kses(__( '<span class="date_links">%2$s</span>', 'fullstory' ), $fullstory_allowed_html_array ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'fullstory' ), get_the_author() ),
			get_the_author()
		)
	);
}

endif;

//POST IN
if ( ! function_exists( 'fullstory_posted_in' ) ) :

function fullstory_posted_in() {
	$fullstory_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = wp_kses(__( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'fullstory'  ), $fullstory_allowed_html_array );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = esc_html__( '%1$s.', 'fullstory' );
	} else {
		$posted_in = wp_kses(__( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'fullstory'  ), $fullstory_allowed_html_array );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}

endif;

/*-----------------------------------------------------------------------------------*/
/*	Coment Function
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'fullstory_comment' ) ) :

function fullstory_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php esc_html_e( 'Pingback:', 'fullstory' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'fullstory' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 80;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 80;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( esc_html__( '%1$s %2$s', 'fullstory' ),
							sprintf( '<h5 class="fn">%s</h5>', get_comment_author_link() ),
							sprintf( '<a href="%1$s" class="mt_comment_date"> <time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'Y-m-d' ),
								/* translators: 1: date, 2: time */
								sprintf( esc_html__( '%1$s at %2$s', 'fullstory' ), get_comment_date('Y-m-d' ), get_comment_time() )
							)
						);
					?>


				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'fullstory' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>
			<div class="clear"></div>
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'fullstory' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			<?php edit_comment_link( esc_html__( ' Edit', 'fullstory' ), '<span class="edit-link">', '</span>' ); ?>
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for _comment()
?>
