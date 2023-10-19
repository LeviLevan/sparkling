<?php 
/* 
Template Name: Single Consultant 
Template Post Type: consultants
*/ 
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/header' ); ?>

<?php
if (have_rows('constructor_consultant_flexible_content')) {
    while (have_rows('constructor_consultant_flexible_content')) {
        the_row();
        switch (get_row_layout()) {
            case 'info_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div id="cf7consultant" class="container-fluid info_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-hours-week">
                                    <span><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/08/clock.svg"><?php the_sub_field('hours__week'); ?></span>
                                    <p><?php the_sub_field('weekly_availability'); ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <div class="block-info">
                                    	<img src="<?php the_sub_field('image_consultant'); ?>">
                                        <div class="description-block">
                                            <h1><?php the_sub_field('name'); ?></h1>
                                            <span><?php the_sub_field('description'); ?></span>
                                            <a href="#resume"
                                               class="btn btn-sec btn-ico resume-link" data-toggle="modal"
                                               data-target="#resumeModal"><i class="ico-eye"></i>View a Full CV</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="block-shortcode">
                                        <?php echo do_shortcode(the_sub_field('contact_form_7_shortcode')); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid modal-window-section">
                        <div class="container">
                            <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-fluid" src="<?php the_sub_field('image_full_cv'); ?>" alt="<?php the_sub_field('description'); ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <div class="modal-rate">
                                                <div class="rate-text">All-inclusive rate - <?php the_sub_field('rate'); ?></div>
                                                <div class="rate-val"></div>
                                            </div>
                                            <a target="_blank" href="https://www.hiredynamicsdevelopers.com/#contact" class="btn btn-main request-developer">Request a Developer Like This</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'summary_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid summary_section">
                        <div class="container">
                            <div class="row">
                                <div class="summary-block">
                                    <h2><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/08/summary.svg"><?php the_sub_field('title'); ?></h2>
                                    <div class="description">
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'consultant_experience_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) {
                    $description = get_sub_field('description');
                    $max_chars = 80;
                    $short_description = wp_trim_words($description, $max_chars);

                    if (strlen($description) > $max_chars) {
                        echo '<div class="container-fluid consultant_experience_section">';
                        echo '<div class="container">';
                        echo '<div class="row">';
                        echo '<div class="consultant-experience-block">';
                        echo '<h2>' . esc_html(get_sub_field('title')) . '</h2>';
                        echo '<div class="description">';
                        echo '<span class="short-description">' . wpautop(esc_html($short_description)) . '</span>';
                        echo '<span class="full-description" style="display: none;">' . wpautop(esc_html($description)) . '</span>';
                        echo '<span class="consultant read-more">Read more >></span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<div class="container-fluid consultant_experience_section">';
                        echo '<div class="container">';
                        echo '<div class="row">';
                        echo '<div class="consultant-experience-block">';
                        echo '<h2>' . esc_html(get_sub_field('title')) . '</h2>';
                        echo '<div class="description">';
                        echo wpautop(esc_html($description));
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            break;

            case 'consultant_category':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid consultant-category-section">
                        <div class="container">
                            <div class="row">
                            <?php
                                $terms = get_the_terms( get_the_ID(), 'consultant_category' );
                                if ( $terms && ! is_wp_error( $terms ) ) {
                                    $categories = array();
                                    foreach ( $terms as $term ) {
                                        $categories[] = $term->name;
                                    }
                                    $current_category = join( ', ', $categories );
                                }

                                if ( isset( $current_category ) && ! empty( $current_category ) ) {
                                    echo '<a href="' . esc_url( get_term_link( $term ) ) . '">View Consultants with Similar Experience</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'key_skills_&_tools_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid key-skills-tools-section">
                        <div class="container">
                            <div class="row">
                                <div class="key-skills-tools-block">
                                    <h2><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/08/key-skills.svg"><?php the_sub_field('title'); ?></h2>
                                    <div class="description">
                                        <ul class="visible-items">
                                            <?php
                                            $description = get_sub_field('description');
                                            $list_items = explode("\n", $description);
                                            $visible_items = array_slice($list_items, 0, 3); 

                                            foreach ($visible_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                            ?>
                                        </ul>
                                        <ul class="hidden-items" style="display: none;">
                                            <?php
                                            foreach (array_slice($list_items, 3) as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                            ?>
                                        </ul>
                                        <span class="consultant read-more-button">Read More >></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'schedule_a_call_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid schedule-a-call-section">
                        <div class="container">
                            <div class="row">
                                <div class="schedule-a-call-block">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <div class="button-block">
                                        <a href="#cf7consultant">Invite to a Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;
        }
    }
}
?>

<?php get_footer(); ?>