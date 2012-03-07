<?php get_header(); ?>

	<div id="container">
		<div id="content" role="main">

            <h1>Quotes</h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="quote">
					<div class="entry-header">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<div class="quote-content">
						<?php the_content(); ?>
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
