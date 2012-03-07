<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="quote">
						<div class="entry-header">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="quote-content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>

			</div>
		</div>

<?php get_footer(); ?>
