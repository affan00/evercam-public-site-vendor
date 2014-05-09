<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php if( (isset($general_options[ 'comments_off' ])) && ($general_options[ 'comments_off' ])) { ?>
<?php } else { ?>
	    <aside class="comments">
	<?php if ( post_password_required() ) : ?>
<div class="comment-system comment-wrap">
<div class="wrapper full-wrap">
    <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'meanthemes' ); ?></p>
</div>
</div>   
</aside>
<?php
return; endif; ?>
<?php if ( have_comments() ) : ?>
<div class="comment-system comment-wrap">
	<div class="wrapper full-wrap">
		<div id="comments">
		            <h3><?php _e( 'Comments', 'meanthemes' ); ?></h3>
		</div>
	</div>
</div>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'meanthemes' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'meanthemes' ) ); ?></div>
			</div> 
<?php endif; ?>
<div class="comment-wrap">
	<div class="wrapper full-wrap">
			<ol class="commentlist">
				<?php wp_list_comments( array( 'callback' => 'post_comments' ) ); ?>
			</ol>
	</div>
</div>			
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'meanthemes' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'meanthemes' ) ); ?></div>
			</div>
<?php endif; ?>
<?php else : if ( ! comments_open() ) : ?>
<div class="comment-system comments-closed">
	<div class="wrapper full-wrap">
		<p class="nocomments"><?php _e( 'Comments are closed.', 'meanthemes' ); ?></p>
	</div>
</div>		
<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) { ?>
<div class="comment-respond comment-wrap">
	<div class="wrapper full-wrap">
	<?php
	$form_args = array( 'title_reply' => __( 'Leave a comment', 'meanthemes' ) ); comment_form( $form_args ); ?>
	</div>	
</div>
<?php } ?>
<?php } ?>