<?php get_header(); ?>

	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="entry">
				<div class="entry-header">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="meta">
					<div class="inner"><span class="day-of-the-week"><?php the_time('l'); ?>,</span> <span class="date"><?php the_time('F jS'); ?></span> <span class="time">at <?php the_time(); ?></span></div>
				</div>
				<div class="entry-content">
					<div class="inner"><?php the_content(); ?></div>
				</div>
				<div class="entry-footer">

				</div>
			</div>
		<?php endwhile; ?>

		<?php comments_template( '', true ); ?>

	</div>

<?php get_footer(); ?>
