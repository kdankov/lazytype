<div id="comments">

	<?php if ( post_password_required() ) { ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
		</div><!-- #comments -->
		<?php return; ?>
	<?php } ?>

	<?php if ( have_comments() ) { ?>

		<h3 id="comments-title">
			<?php printf( _n( 'One Response', '%1$s Responses', get_comments_number() ), number_format_i18n( get_comments_number() ) ); ?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div> <!-- .navigation -->
		<?php } ?>

		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div>
		<?php } ?>

	<?php }else { ?>

		<?php if ( ! comments_open() ) { ?>
			<p class="nocomments">Comments are closed.</p>
		<?php } ?>

	<?php } ?>

	<?php comment_form(); ?>

</div>

