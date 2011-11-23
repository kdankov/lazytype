	</div>

	<div id="footer" role="contentinfo">
		<?php if(false){ ?>
			<div class="widgets">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		<?php } ?>
		<div id="colophon">
			<a href="http://twitter.com/kdankov">Konstantin Dankov · @kdankov</a><br>
			<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Licensed under Creative Commons - Attribution-NonCommercial-ShareAlike 3.0</a>
		</div>
		<div id="site-generator">
			<?php do_action( 'twentyten_credits' ); ?>
			<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress</a>
		</div>
	</div>

</div>
<?php wp_footer(); ?>
</body>
</html>

