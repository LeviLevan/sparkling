<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-xs-12">
			<div class="post__img_main">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			
		</div>
		<div class="col-xs-12">
			<div class="post__content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'            => '<div class="page-links">'.esc_html__( 'Pages:', 'sparkling' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>',
					'pagelink'          => '%',
					'echo'              => 1
				) );
				?>
			</div>
		</div>
	</div>
</article>
