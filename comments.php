<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gl
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<section class="form">
	<div class="comments">
<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$gl_comment_count = get_comments_number();
			if ( '1' === $gl_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'gl' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $gl_comment_count, 'comments title', 'gl' ) ),
					number_format_i18n( $gl_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'       => 40,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'gl' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>
	<div class="comment-form">
<?php
     $comments_args = array(
        'fields' => array(
         'author' => '<p comment-form-author">' . '<label for="author">' . '</label> ' . ( $req ? '<span class="required"></span>' : '' ) .
                '<input id="author firstinput" name="author" placeholder="Name *" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></p>',

                'email'  => '<p class="form-group comment-form-email"><label for="email">' . ( $req ? '<span class="required"></span>' : '' ) . '</label> ' .
                '<input id="email" placeholder="Email *" name="email" ' . ($html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" aria-describedly="email-notes"' . $aria_req . $html_req . '/></p>',
        ),
        'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" >Post comment</button>',
        'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . '</label> <textarea id="comment" placeholder="Message" name="comment" aria-required="true" required="required"></textarea></p>', 
    );
	
 comment_form($comments_args); ?>

</div>
		    	
		  
			
		
		
</div><!-- #comments -->
</div>
</section>
