<?php
/**
 * Template name: Blog
 */
function kill_dot_excerpt_more() {
    return '';
}
add_filter('excerpt_more', 'kill_dot_excerpt_more');

get_header(); ?>
<?php get_template_part( 'templates/preloader' ); ?>
<?php get_template_part( 'templates/header' ); ?>

<div>
<main class="page page--blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="blog__title">
                    Blog
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 blog-categories">
                <?php
                    echo do_shortcode('[post_categories]');
                ?>

            </div>
        </div>
        <div class="">
            <div class="col-xs-12 col-lg-8 col-xl-9">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $per_page = $wp_query->query_vars['posts_per_page'];

                $args = array(
                    'paged' => $paged,
                    'posts_per_page' => $per_page
                );
                query_posts( $args );
                while ( have_posts() ) : the_post(); ?>
                    <div class="post__content">
                        <div class="row flex">
                            <div class="col-xs-12 col-lg-5">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="post__title">
                                    <?php the_title(); ?>
                                </div>
                               
                                <div class="post__descriptions">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="post__button">
                                    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                           </div>
                        </div>
                    </div>


                <?php endwhile; // end of the loop. ?>
                <?php wp_reset_postdata(); ?>
                <?php if (function_exists('wp_blogpagin')) wp_blogpagin(); ?>
                <?php wp_reset_query(); ?>
            </div>

            <div class="col-xs-12  col-lg-4 col-xl-3">
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