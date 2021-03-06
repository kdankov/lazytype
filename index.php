<?php get_header(); ?>

	<?php if( is_home() && false ){ ?>
		<div id="welcome">
			<?php dynamic_sidebar( 'homepage' ); ?>
		</div>
	<?php } ?>

	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="entry">
				<div class="entry-header">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<div class="meta">
					<div class="inner"><span class="day-of-the-week"><?php the_time('l'); ?>,</span> <span class="date"><?php the_time('F jS Y'); ?></span></div>
				</div>
				<div class="entry-content">
					<div class="inner"><?php the_excerpt(); ?></div>
				</div>
				<div class="entry-footer"></div>
			</div>
		<?php endwhile; ?>

		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older posts' ); ?>&nbsp;</div>
				<div class="nav-next"><?php previous_posts_link( 'Newer posts <span class="meta-nav">&rarr;</span>' ); ?>&nbsp;</div>
			</div>
		<?php endif; ?>

	</div>
<?php get_footer(); ?>
