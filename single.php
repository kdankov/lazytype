<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-above" class="navigation">
						<div class="nav-previous"><?php next_posts_link('<span class="meta-nav">&larr;</span> Older posts'); ?></div>
						<div class="nav-next"><?php previous_posts_link('Newer posts <span class="meta-nav">&rarr;</span>'); ?></div>
					</div>
				<?php endif; ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="entry">
						<div class="entry-header">
							<h1><?php the_title(); ?></h1>
							<div class="meta">
								<span class="day-of-the-week"><?php the_time('l'); ?>,</span> <span class="date"><?php the_time('F jS'); ?></span> <span class="time">at <?php the_time(); ?></span>
							</div>
						</div>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<div class="entry-footer">

						</div>
					</div>
				<?php endwhile; ?>

				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-below" class="navigation">
						<div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older posts' ); ?></div>
						<div class="nav-next"><?php previous_posts_link( 'Newer posts <span class="meta-nav">&rarr;</span>' ); ?></div>
					</div>
				<?php endif; ?>

			</div>
		</div>

<?php get_footer(); ?>