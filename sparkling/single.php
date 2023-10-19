<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>

<?php get_template_part( 'templates/header' ); ?>

<div>
<main class="page page--post">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<h1 class="blog__title">
					<?php the_title() ?>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-8 col-xl-9">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<!-- Post navigation -->
					<?php //sparkling_post_nav(); ?>

				<?php endwhile; ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-4 col-xl-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</main>
</div>

<div>
	<?php get_footer(); ?>
</div>

<?php wp_footer(); ?>

</body>
</html>