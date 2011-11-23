<?php

add_filter('gallery_style', create_function('$a', 'return preg_replace("%<style type=\'text/css\'>(.*?)</style>%s", "", $a);'));

// wp_enqueue_script( 'lazytype-ggs-grid', get_bloginfo( 'stylesheet_directory' ) . '/scripts/GGS.js' );
wp_enqueue_script( 'lazytype-fittext', get_bloginfo( 'stylesheet_directory' ) . '/scripts/jquery.fittext.js', array('jquery') );
wp_enqueue_script( 'lazytype-common', get_bloginfo( 'stylesheet_directory' ) . '/scripts/common.js', array('jquery') );

if(!is_admin()){
	wp_enqueue_style( 'lazytype-fonts', get_bloginfo( 'stylesheet_directory' ) . '/fonts/fonts.css' );
	wp_enqueue_style( 'lazytype-typography', get_bloginfo( 'stylesheet_directory' ) . '/styles/typography.css' );
	wp_enqueue_style( 'lazytype-elements', get_bloginfo( 'stylesheet_directory' ) . '/styles/elements.css' );
	wp_enqueue_style( 'lazytype-ggs', get_bloginfo( 'stylesheet_directory' ) . '/styles/ggs.css' );
}

if ( function_exists( 'add_theme_support' ) ) {

	add_theme_support( 'nav-menus' );

	register_nav_menus( array(
		'header' => __( 'Header Menu' ),
	) );

}

// Add default posts and comments RSS feed links to head
if ( version_compare( $wp_version, '3.0', '>=' ) ) {
	add_theme_support( 'automatic-feed-links' );
} else {
	automatic_feed_links();
}

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 */

function lazytype_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer',
		'description'   => 'Showing at the footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => 'Homepage',
		'id' => 'homepage',
		'description'   => 'Showing on the homepage',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

}
add_action( 'widgets_init', 'lazytype_widgets_init' );

function lazytype_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'lazytype_remove_recent_comments_style' );

function lazytype_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<span class="comment-header">
			<span class="comment-author vcard" data-gravatar-hash="<?php echo md5( strtolower( trim( get_comment_author_email() ) ) ); ?>">
				<span class="author-name"><?php echo get_comment_author_link(); ?></span>
			</span>
			<span class="comment-meta">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<span class="day-of-the-week"><?php echo get_comment_date('l'); ?>,</span> <span class="date"><?php echo get_comment_date('F jS'); ?></span><br>
					<span class="time">at <?php echo get_comment_time(); ?></span>
				</a>
				<span class="edit"><?php edit_comment_link(__('(Edit)'),'  ','') ?></span>
			</span>
		</span>
		<span class="comment-content">
			<?php comment_text() ?>
			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.') ?></em>
			<?php endif; ?>
			<span class="reply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</span>
		</span>
	</li>
<?php
}

?>
