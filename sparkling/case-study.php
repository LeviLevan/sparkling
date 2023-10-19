<?php 
/* 
Template Name: Case Study 
*/ 
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/header' ); ?>
<main class="page">
<?php
if (have_rows('constructor_case_study_flexible_content')) {
    while (have_rows('constructor_case_study_flexible_content')) {
        the_row();
        switch (get_row_layout()) {
            case 'banner_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid banner_section_case_study">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <span><?php the_sub_field('sub_title'); ?></span>
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <a href="#cf7contact">hire now</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Frame-1073.webp" alt="<?php the_sub_field('title'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'telecom_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid telecom_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-hours-week">
                                    <span><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/clock-t.svg">Part-time Engagement</span>
                                    <p>Dynamics NAV/BC developer</p>
                                </div>
                                <div class="col-xs-12 col-md-12 block-first">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/United-States-of-America.webp">
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <?php the_sub_field('description_first'); ?>
                                    <hr class="orange">
                                    <?php the_sub_field('description_second'); ?>
                                </div>
                            </div>
                            <div class="row second-section">
                                <div class="col-xs-12 col-md-6">
                                    <div class="box-description-1">
                                        <?php the_sub_field('box_description_1'); ?>
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Frame-1074.webp">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="box-description-2">
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Group-1084.webp">
                                        <?php the_sub_field('box_description_2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'lithuanian_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid lithuanian_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-full-time">
                                    <span><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/08/clock.svg">Full-time Engagement</span>
                                    <p>MS Dynamics Developers</p>
                                    <p>MS Dynamics Support Specialists</p>
                                </div>
                                <div class="block-hours-week">
                                    <span><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/clock-t.svg">Part-time Engagement</span>
                                    <p>MS Dynamics Developers</p>
                                </div>
                                <div class="col-xs-12 col-md-12 block-first">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/flag.svg">
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <?php the_sub_field('description_first'); ?>
                                    <hr class="orange">
                                    <?php the_sub_field('description_second'); ?>
                                </div>
                            </div>
                            <div class="row second-section">
                                <div class="col-xs-12 col-md-4">
                                    <div class="box-description-1">
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Group-1062.webp">
                                        <?php the_sub_field('box_description_1'); ?>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="box-description-2">
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/image-39.webp">
                                        <?php the_sub_field('box_description_2'); ?>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="box-description-3">
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Group-1068.webp">
                                        <?php the_sub_field('box_description_3'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'usa_based_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid usa_based_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-hours-week">
                                    <span><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/clock-t.svg">Part-time Engagement</span>
                                    <p>MS NAV consultant</p>
                                    <p>MS Dynamics Consultant</p>
                                </div>
                                <div class="col-xs-12 col-md-12 block-first">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/United-States-of-America.webp">
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <?php the_sub_field('description_first'); ?>
                                    <hr class="orange">
                                    <?php the_sub_field('description_second'); ?>
                                </div>
                            </div>
                            <div class="row second-section">
                                <div class="col-xs-12 col-md-6">
                                    <div class="box-description-1">
                                        <div class="boxic-description-1">
                                            <?php the_sub_field('box_description_1_first'); ?>
                                            <?php the_sub_field('box_description_1_second'); ?>
                                        </div>
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Group-1076.webp">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="box-description-2">
                                        <?php the_sub_field('box_description_2'); ?>
                                        <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Group-1081.webp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'automotive_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid automotive_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-hours-week">
                                    <span><img src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/clock-t.svg">Part-time Engagement</span>
                                    <p>MS Dynamics 365</p>
                                    <p>Integration Consultant</p>
                                </div>
                                <div class="col-xs-12 col-md-12 block-first">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/comp_United-States-Of-America_South.svg">
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <?php the_sub_field('description_first'); ?>
                                    <hr class="orange">
                                    <?php the_sub_field('description_second'); ?>
                                </div>
                            </div>
                            <div class="row second-section">
                                <div class="col-xs-12 col-md-6">
                                    <div class="box-description-1">
                                        <?php the_sub_field('box_description_1'); ?>
                                        </div>
                                    </div>
                                
                                <div class="col-xs-12 col-md-6">
                                    <div class="box-description-2">
                                        <?php the_sub_field('box_description_2'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row-down">
                                <div class="col-xs-12 col-md-12 box-down">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/09/Frame-1076-1.webp">
                                    <?php the_sub_field('box_description_down'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'lets_start_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid currently_available_case_section">
                        <div class="container">
                            <div class="row">
                                <div class="currently-available-block">
                                    <div class="block-title">
                                        <h2><?php the_sub_field('title'); ?></h2>
                                        
                                    </div>
                                    
                                    <div class="button-block">
                                        <a href="<?php the_sub_field('link_consultant'); ?>">Start now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'contact_form_7_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid contact_form_7_section" id="cf7contact">
                        <div class="container">
                            <div class="row">
                                <div class="h1 section-title title-contacts wow fadeIn">Get a FREE Consultation</div>
                               <div class="block-shortcode-cf7">
                                   <?php echo do_shortcode(the_sub_field('contact_form_7')); ?> 
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
</main>
<?php get_footer(); ?>