<?php
/**
 * Template Name: Full-width(with sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
<?php get_template_part('templates/header'); ?>

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

                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('content', 'page'); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (get_theme_mod('sparkling_page_comments', 1) == 1) :
                            if (comments_open() || '0' != get_comments_number()) :
                                comments_template();
                            endif;
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

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

</body>
</html>