<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>


<div class="post-inner-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <div class="col-xs-12">
                <div class="post__content">
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'sparkling'),
                        'after' => '</div>',
                    ));
                    ?>
                    <?php
                    // Checks if this is homepage to enable homepage widgets
                    if (is_front_page()) :
                        get_sidebar('home');
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <?php edit_post_link(esc_html__('Edit', 'sparkling'), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>'); ?>
    </article><!-- #post-## -->
</div>