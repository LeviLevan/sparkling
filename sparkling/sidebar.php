<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sparkling
 */
?>
		<div class="post__sidebar">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
		</div>
