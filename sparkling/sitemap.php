<?php
/**
 * Template name: Sitemap
 */
get_header(); ?>

<?php get_template_part( 'templates/header' ); ?>

<main class="page page--sitemap">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php echo do_shortcode('[wp_sitemap_page only="page"]') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php echo do_shortcode('[wp_sitemap_page only="post"]') ?>
			</div>
		</div>
	</div>
</main>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="footer__copyright" data-wow-offset="0">
					&copy; <a href="https://mobilunity.com">Mobilunity</a>, <?php echo date(Y); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a href="https://mobilunity.com" class="footer__link">
					<img class="footer__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/footer__logo.svg" alt="">
					<img class="footer__logo footer__logo--ie10" src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/footer__logo.png" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="footer__disclaimer">
					Disclaimer: Laravel is a trademark owned by Taylor Otwell. This website is not affiliated with Laravel or Taylor Otwell.
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>