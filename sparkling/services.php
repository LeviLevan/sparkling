<?php 
/* 
Template Name: Services
*/ 
?>
<?php get_header(); ?>
<?php get_template_part('templates/preloader'); ?>
<?php get_template_part( 'templates/header' ); ?>
<main class="page">
<?php
if (have_rows('constructor_services_flexible_content')) {
    while (have_rows('constructor_services_flexible_content')) {
        the_row();
        switch (get_row_layout()) {

            case 'banner_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid banner_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <a href="#cf7contact">hire now</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/uploads/2023/08/image-banner.webp" alt="<?php the_sub_field('title'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'reasons_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid reasons_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2><hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'how_it_works_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid how_it_works_section">
                        <div class="container">
                            <div class="row">
                                <h2>How it works</h2>
                                <div class="block-grid-how-it work-1 col-xs-12 col-md-4">
                                    <div class="block-info-button">
                                         <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/circle-1.svg">
                                        <span class="title-hitw">Get in Touch</span>
                                        <span class="description">
                                            Initiate the conversation with us <br> and rest assured, we'll respond <br> swiftly to your queries.
                                        </span>
                                    </div>
                                    <a href="#cf7contact">Contact us</a>
                                </div>
                                <div class="block-grid-how-it work-2 col-xs-12 col-md-5">
                                    <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/circle-2.svg">
                                    <span class="title-hitw">Arrange a Discussion</span>
                                    <span class="description">
                                        We take the initiative to schedule a comprehensive <br> conversation where we can delve deeper into your <br> ideas and necessities. Your responsibility here is to <br> furnish us with your precise requirements.
                                    </span>
                                </div>
                                <div class="block-grid-how-it work-3 col-xs-12 col-md-3">
                                     <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/circle-3.svg">
                                    <span class="title-hitw">Initiating the Hiring Process</span>
                                    <span class="description">
                                        Following your needs, we formulate a profile for the perfect candidate and then embark on the journey to find them across various platforms. After we've created a list of potential candidates, we conduct a rigorous screening process to evaluate their technical and interpersonal skills.
                                    </span>
                                </div>
                                <div class="block-grid-how-it work-4 col-xs-12 col-md-4">
                                     
                                </div>
                                <div class="block-grid-how-it work-5 col-xs-12 col-md-3">
                                    <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/circle-5.svg">
                                    <span class="title-hitw">Kick-off Project</span>
                                    <span class="description">
                                        Within a span of 4-6 weeks, you and <br> your new team members are fully <br> engaged in your project. Our role is <br> to ensure seamless communication <br> between all parties involved.
                                    </span>
                                </div>
                                <div class="block-grid-how-it work-6 col-xs-12 col-md-5">
                                    <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/circle-4.svg">
                                    <span class="title-hitw">Finalize Your Team</span>
                                    <span class="description">
                                        We facilitate and organize <br> interviews between you and <br> the potential team members.<br> The final decision to approve <br> the team rests with you.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'cvs_slider_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid cvs_slider_section">
                        <div class="container">
                            <div class="row">

                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                </div>
                                <div class="resumes-slider slick-slider">
                                <?php
                                $args_all = array(
                                    'post_type' => 'consultants',
                                    'posts_per_page' => -1,
                                );
                        
                                $query = new WP_Query($args_all);
                                

                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $post_id = get_the_ID();
                                    if (!empty($post_id)) { ?>
                                        <div id="resume-item-<?php echo $post_id; ?>" class="resume-item" data-title="<?php echo esc_attr(get_the_title()); ?>" data-img="<?php
                                            if (has_post_thumbnail()) {
                                                $thumbnail_id = get_post_thumbnail_id();
                                                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                                                echo $thumbnail_url;
                                            }
                                            ?>">
                                            <div class="resume-slide">
                                                <a href="#resume" class="btn btn-sec btn-ico resume-link" data-toggle="modal" data-target="#resumeModal"><img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/eye-icon.svg"></a>
                                                <div class="resume-item-img">
                                                    <?php if (has_post_thumbnail()) {
                                                        the_post_thumbnail('', array('alt' => get_the_title()));
                                                    } ?>
                                                </div>
                                                <div class="resume-item-footer">
                                                <?php
                                                    $title = get_the_title();
                                                    $words = explode(' ', $title);
                                                    $first_word = isset($words[0]) ? $words[0] : '';
                                                    $second_word = isset($words[1]) ? $words[1] : '';
                                                    $remaining_words = array_slice($words, 2);
                                                    $remaining_text = implode(' ', $remaining_words);
                                                    $remaining_text = preg_replace('/\p{Pd}/u', '', $remaining_text); 
                                                    echo '<div class="resume-item-title"><span class="first-title">' . $first_word . ' ' . $second_word . '</span></div>';
                                                    echo '<div class="second_title">' . $remaining_text . '</div>';
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } wp_reset_postdata();?>
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'solutions_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid solutions_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                        <img class="img-fluid" src="<?php the_sub_field('icon_box_1'); ?>">
                                        <h4><?php the_sub_field('title_box_1'); ?></h4>
                                        <span><?php the_sub_field('description_box_1'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                        <img class="img-fluid" src="<?php the_sub_field('icon_box_2'); ?>">
                                        <h4><?php the_sub_field('title_box_2'); ?></h4>
                                        <span><?php the_sub_field('description_box_2'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                        <img class="img-fluid" src="<?php the_sub_field('icon_box_3'); ?>">
                                        <h4><?php the_sub_field('title_box_3'); ?></h4>
                                        <span><?php the_sub_field('decription_box_3'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                        <img class="img-fluid" src="<?php the_sub_field('icon_box_4'); ?>">
                                        <h4><?php the_sub_field('title_box_4'); ?></h4>
                                        <span><?php the_sub_field('decription_box_4'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="block-1">
                                        <img class="img-fluid" src="<?php the_sub_field('icon_box_5'); ?>">
                                        <h4><?php the_sub_field('title_box_5'); ?></h4>
                                        <span><?php the_sub_field('description_box_5'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'requirements_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid requirements_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="requirements_block">
                                    <span><?php the_sub_field('description'); ?></span>
                                    <div class="description">
                                        <ul class="visible-items">
                                            <?php
                                            $listing = get_sub_field('listing');
                                            $list_items = explode("\n", $listing);
                                            foreach ($list_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'explore_mobilunity_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid explore_mobilunity_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="col-xs-12 col-md-4">
                                    <div class="explore_mobilunity_block_1">
                                        <div class="img-block">
                                            <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/Full-time.svg">
                                        </div>
                                        <div class="title-block">
                                            <h4><?php the_sub_field('title_box_1'); ?></h4>
                                        </div>
                                        <p><?php the_sub_field('description_box_1'); ?></p>
                                        <div class="link-box">
                                            <a target="_blank" href="https://mobilunity.com/dedicated-teams/">How It Works</a>
                                        </div>
                                   </div>
                                </div>
                                 <div class="col-xs-12 col-md-4">
                                    <div class="explore_mobilunity_block_2">
                                        <div class="img-block">
                                            <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/Part-time.svg">
                                        </div>
                                        <div class="title-block">
                                            <h4><?php the_sub_field('title_box_2'); ?></h4>
                                        </div>
                                        <p><?php the_sub_field('description_box_2'); ?></p>
                                        <div class="link-box">
                                            <a target="_blank" href="https://mobilunity.com/dedicated-teams/">How It Works</a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xs-12 col-md-4">
                                    <div class="explore_mobilunity_block_3">
                                        <div class="img-block">
                                            <img class="img-fluid" src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/Local.svg">
                                        </div>
                                        <div class="title-block">
                                            <h4><?php the_sub_field('title_box_3'); ?></h4>
                                        </div>
                                        <p><?php the_sub_field('decription_box_3'); ?></p>
                                        <div class="link-box">
                                            <a target="_blank" href="https://mobilunity.com/dedicated-teams/">Find Out More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'how_dynamics_your_business_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid how_dynamics_your_business_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="how_dynamics_your_business_block">
                                    <span><?php the_sub_field('sub_title'); ?></span>
                                </div>
                                <div class="icons-box">
                                       <div class="icon-box box-1">
                                           <img src="<?php the_sub_field('icon_box_1'); ?>">
                                           <p><?php the_sub_field('description_box_1'); ?></p>
                                       </div>
                                       <div class="icon-box box-2">
                                           <img src="<?php the_sub_field('icon_box_2'); ?>">
                                           <p><?php the_sub_field('description_box_2'); ?></p>
                                       </div>
                                       <div class="icon-box box-3">
                                           <img src="<?php the_sub_field('icon_box_3'); ?>">
                                           <p><?php the_sub_field('description_box_3'); ?></p>
                                       </div>
                                       <div class="icon-box box-4">
                                           <img src="<?php the_sub_field('icon_box_4'); ?>">
                                           <p><?php the_sub_field('description_box_4'); ?></p>
                                       </div>
                                       <div class="icon-box box-5">
                                           <img src="<?php the_sub_field('icon_box_5'); ?>">
                                           <p><?php the_sub_field('description_box_5'); ?></p>
                                       </div>
                                </div>
                                <span><?php the_sub_field('description'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'currently_available_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid currently_available_section">
                        <div class="container">
                            <div class="row">
                                <div class="currently-available-block">
                                    <div class="block-title">
                                        <h2><?php the_sub_field('title'); ?></h2>
                                        <hr class="title-hr">
                                    </div>
                                    <p><?php the_sub_field('description'); ?></p>
                                    <div class="button-block">
                                        <a href="<?php the_sub_field('link_consultant'); ?>">Start Selection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'requirements_developer_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid requirements_developer_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="col-xs-12 col-md-8">
                                    <div class="requirements_block">
                                        <hr class="title-hr">
                                        <span><?php the_sub_field('description'); ?></span>
                                        <div class="description">
                                            <ul class="visible-items">
                                                <?php
                                                $listing = get_sub_field('listing_description');
                                                $list_items = explode("\n", $listing);
                                                foreach ($list_items as $item) {
                                                    echo '<li>' . $item . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="resumes-slider slider-1-item">
                                        <?php 
                                            $turn_on_info = get_sub_field('turn_on_info');
                                            if ($turn_on_info == true) { ?>
                                                <h5><?php the_sub_field('sub_title');?></h5>
                                                <span><?php the_sub_field('sub_description'); ?></span>
                                           <?php } ?>
                                        <div id="resume-item-01" class="resume-item"
                                         data-title="<?php the_sub_field('title'); ?>"
                                         data-img="<?php the_sub_field('image_consultant'); ?>">
                                            <div class="resume-slide">
                                                <a href="#resume" class="btn btn-sec btn-ico resume-link" data-toggle="modal" data-target="#resumeModal"><img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/eye-icon.svg"></a>
                                                <div class="resume-item-img">
                                                <img src="<?php the_sub_field('image_consultant'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        $turn_on_button = get_sub_field('turn_on_button');
                                        if ($turn_on_button == true) { ?>
                                            <a class="button" href="#cf7contact">request more cvs</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'how_transform_your_business_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid how_transform_your_business_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="col-xs-12 col-md-6">
                                    <div class="how_transform_your_business_block">
                                        <div class="description">
                                            <ul class="visible-items">
                                                <?php
                                                $listing = get_sub_field('listing_description');
                                                $list_items = explode("\n", $listing);
                                                foreach ($list_items as $item) {
                                                    echo '<li>' . $item . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <hr class="title-hr">
                                    <span><?php the_sub_field('description'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'salary_comparison_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid salary_comparison_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <hr class="title-hr">
                                <span><?php the_sub_field('Description'); ?></span>
                                <div class="table-container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th><?php the_sub_field('table_column_1_name');?></th>
                                                <th><?php the_sub_field('table_column_2_name');?></th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <?php
                                        $countries_string = get_sub_field('country');
                                        $countries_array = explode("\n", $countries_string);

                                        $salaries_string = get_sub_field('salary');
                                        $salaries_array = explode("\n", $salaries_string);

                                        foreach ($countries_array as $index => $country) {
                                            echo "<tr>";
                                            echo "<td>" . trim($country) . "</td>";
                                            echo "<td>" . trim($salaries_array[$index]) . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>

                                    </table>
                                </div>
                                <span><?php the_sub_field('Description_last'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'why_choose_us_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid why_choose_us_section_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2><hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                            </div>
                            <div class="row">
                                <div class="requirements_block">
                                    <span><?php the_sub_field('decription_standout'); ?></span>
                                    <div class="description">
                                        <ul class="visible-items">
                                            <?php
                                            $listing = get_sub_field('listing_standout');
                                            $list_items = explode("\n", $listing);
                                            foreach ($list_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="benefit-block-all">
                                    <div class="col-xs-12 col-md-4">
                                        <div class="benefit-block">
                                            <span><?php the_sub_field('decription_benefits'); ?></span>
                                            <ul class="visible-items">
                                                <?php
                                                    $listing = get_sub_field('listing');
                                                    $list_items = explode("\n", $listing);
                                                    foreach ($list_items as $item) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-md-8">
                                       <div class="workflow-block">
                                            <span><?php the_sub_field('decription_workflow'); ?></span>
                                            <ul class="visible-items">
                                                <?php
                                                    $listing = get_sub_field('listing_workflow');
                                                    $list_items = explode("\n", $listing);
                                                    foreach ($list_items as $item) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'development_services_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid development_services_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                            <span><?php the_sub_field('sub_description_1'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                            <span><?php the_sub_field('sub_description_2'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                            <span><?php the_sub_field('sub_description_3'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                            <span><?php the_sub_field('sub_description_4'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                            <span><?php the_sub_field('sub_description_5'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <h4><?php the_sub_field('sub_title_6'); ?></h4>
                                            <span><?php the_sub_field('sub_description_6'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php $info_section_turn_on = get_sub_field('turn_on_block_78');
                                    if ($info_section_turn_on == true) { ?>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="block-1">
                                                    <h4><?php the_sub_field('sub_title_7'); ?></h4>
                                                    <span><?php the_sub_field('sub_description_7'); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="block-1">
                                                    <h4><?php the_sub_field('sub_title_8'); ?></h4>
                                                    <span><?php the_sub_field('sub_description_8'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'how_we_onboard_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid how_we_onboard_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row-class">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_1'); ?>">
                                            <div class="info-block">
                                                 <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_2'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_3'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_4'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    $icon_5 = get_sub_field('icon_5');
                                    $sub_title_5 = get_sub_field('sub_title_5');
                                    $description_5 = get_sub_field('description_5');

                                    if (isset($icon_4) && isset($sub_title_4) && isset($description_4)) { ?>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="block-1">
                                                <img src="<?php the_sub_field('icon_5'); ?>">
                                                <div class="info-block">
                                                    <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                                    <span><?php the_sub_field('description_5'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <?php 
                                $info_section_when_clients_outsource = get_sub_field('turn_on_when_clients_outsource');
                                if ($info_section_when_clients_outsource == true) { ?>
                                    <div class="section-when-clients-outsource">
                                        <div class="block-secription">
                                            <span class="description"><?php the_sub_field('sub_title'); ?></span> 
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="block-1">
                                                <img src="<?php the_sub_field('icon_1_next_section'); ?>">
                                                <div class="info-block">
                                                     <h4><?php the_sub_field('sub_title_1_next_section'); ?></h4>
                                                    <span><?php the_sub_field('description_1_next_section'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="block-1">
                                                <img src="<?php the_sub_field('icon_2_next_section'); ?>">
                                                <div class="info-block">
                                                    <h4><?php the_sub_field('sub_title_2_next_section'); ?></h4>
                                                    <span><?php the_sub_field('description_2_next_section'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="block-1">
                                                <img src="<?php the_sub_field('icon_3_next_section'); ?>">
                                                <div class="info-block">
                                                    <h4><?php the_sub_field('sub_title_3_next_section'); ?></h4>
                                                    <span><?php the_sub_field('description_3_next_section'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="block-1">
                                                <img src="<?php the_sub_field('icon_4_next_section'); ?>">
                                                <div class="info-block">
                                                    <h4><?php the_sub_field('sub_title_4_next_section'); ?></h4>
                                                    <span><?php the_sub_field('description_4_next_section'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'professionals_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid professionals_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                        
                                        <h4><?php the_sub_field('title_box_1'); ?></h4>
                                        <span><?php the_sub_field('description_box_1'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                        
                                        <h4><?php the_sub_field('title_box_2'); ?></h4>
                                        <span><?php the_sub_field('description_box_2'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                       
                                        <h4><?php the_sub_field('title_box_3'); ?></h4>
                                        <span><?php the_sub_field('decription_box_3'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1">
                                       
                                        <h4><?php the_sub_field('title_box_4'); ?></h4>
                                        <span><?php the_sub_field('decription_box_4'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="block-1">
                                      
                                        <h4><?php the_sub_field('title_box_5'); ?></h4>
                                        <span><?php the_sub_field('description_box_5'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;
             
            case 'hiring_freelance_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid hiring_freelance_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/ico-list-check.svg">
                                            <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('sub_description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/ico-list-check.svg">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('sub_description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/ico-list-check.svg">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('sub_description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/ico-list-check.svg">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('sub_description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/ico-list-check.svg">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                                <span><?php the_sub_field('sub_description_5'); ?></span>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="description_2"><?php the_sub_field('decription_2'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'outsourcing_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid outsourcing_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-1">
                                        
                                        <h4><?php the_sub_field('title_box_1'); ?></h4>
                                        <span><?php the_sub_field('description_box_1'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-2">
                                        
                                        <h4><?php the_sub_field('title_box_2'); ?></h4>
                                        <span><?php the_sub_field('description_box_2'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-3">
                                       
                                        <h4><?php the_sub_field('title_box_3'); ?></h4>
                                        <span><?php the_sub_field('decription_box_3'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-4">
                                       
                                        <h4><?php the_sub_field('title_box_4'); ?></h4>
                                        <span><?php the_sub_field('decription_box_4'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="block-1 back-5">
                                      
                                        <h4><?php the_sub_field('title_box_5'); ?></h4>
                                        <span><?php the_sub_field('description_box_5'); ?></span>
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
                        <div class="container" id="contact">
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

            case 'services_can_offer_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid services_can_offer_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="col-xs-12 col-md-6">
                                    <hr class="title-hr">
                                    <span><?php the_sub_field('description'); ?></span>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="services_can_offer_block">
                                        <div class="description">
                                            <ul class="visible-items">
                                                <?php
                                                $listing = get_sub_field('listing_description');
                                                $list_items = explode("\n", $listing);
                                                foreach ($list_items as $item) {
                                                    echo '<li>' . $item . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'setting_up_services_team_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid setting_up_services_team_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="setting_up_services_team_block_first_block">
                                    <span><?php the_sub_field('title_first'); ?></span>
                                    <span class="description_first"><?php the_sub_field('description_first'); ?></span>
                                </div>
                                <div class="setting_up_services_team_block">
                                    <span><?php the_sub_field('description'); ?></span>
                                    <span class="description_mini"><?php the_sub_field('description_mini'); ?></span>
                                    <div class="description-listing">
                                        <ul class="visible-items">
                                            <?php
                                            $listing = get_sub_field('listing_description');
                                            $list_items = explode("\n", $listing);
                                            foreach ($list_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'our_top_values_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid our_top_values_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="our_top_values_block">
                                    <span><?php the_sub_field('sub_title'); ?></span>
                                </div>
                                <div class="icons-box">
                                       <div class="icon-box box-1">
                                           <img src="<?php the_sub_field('icon_box_1'); ?>">
                                           <h4><?php the_sub_field('title_box_1'); ?></h4>
                                           <p><?php the_sub_field('description_box_1'); ?></p>
                                       </div>
                                       <div class="icon-box box-2">
                                           <img src="<?php the_sub_field('icon_box_2'); ?>">
                                           <h4><?php the_sub_field('title_box_2'); ?></h4>
                                           <p><?php the_sub_field('description_box_2'); ?></p>
                                       </div>
                                       <div class="icon-box box-3">
                                           <img src="<?php the_sub_field('icon_box_3'); ?>">
                                           <h4><?php the_sub_field('title_box_3'); ?></h4>
                                           <p><?php the_sub_field('description_box_3'); ?></p>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'how_we_hire_great_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid how_we_hire_great_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <hr class="title-hr">
                                <div class="how_we_hire_great_block">
                                    <span><?php the_sub_field('sub_title'); ?></span>
                                </div>
                                <div class="icons-box">
                                       <div class="icon-box box-1">
                                           <img src="<?php the_sub_field('icon_box_1'); ?>">
                                           <?php the_sub_field('description_box_1'); ?>
                                       </div>
                                       <div class="icon-box box-2">
                                           <img src="<?php the_sub_field('icon_box_2'); ?>">
                                           <?php the_sub_field('description_box_2'); ?>
                                       </div>
                                       <div class="icon-box box-3">
                                           <img src="<?php the_sub_field('icon_box_3'); ?>">
                                            <?php the_sub_field('description_box_3'); ?>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'navision_engineer_resume_sample_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid navision_engineer_resume_sample_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="navision_engineer_resume_sample_block">
                                         <h2><?php the_sub_field('title'); ?></h2>
                                        <hr class="title-hr">
                                        <span><?php the_sub_field('description'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="image-box">
                                        <img class="img-fluid" src="<?php the_sub_field('image_consultant'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'five_reasons_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid five_reasons_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('sub_description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('sub_description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('sub_description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 six-block">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('sub_description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                                <span><?php the_sub_field('sub_description_5'); ?></span>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="description_2"><?php the_sub_field('decription_2'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'dynamics_nav_consultant_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid dynamics_nav_consultant_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="table-container">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th><?php the_sub_field('table_column_1_name');?></th>
                                                <th><?php the_sub_field('table_column_2_name');?></th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <?php
                                        $countries_string = get_sub_field('country');
                                        $countries_array = explode("\n", $countries_string);

                                        $salaries_string = get_sub_field('salary');
                                        $salaries_array = explode("\n", $salaries_string);

                                        foreach ($countries_array as $index => $country) {
                                            echo "<tr>";
                                            echo "<td>" . trim($country) . "</td>";
                                            echo "<td>" . trim($salaries_array[$index]) . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>

                                        </table>
                                        <p>for a middle developer based on our Recruiting Team research</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                    <span><?php the_sub_field('description'); ?></span>
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'requirements_to_microsoft_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid requirements_to_microsoft_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                            </div>
                            <div class="row">
                                <div class="benefit-block-all">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="benefit-block">
                                            <span><?php the_sub_field('decription_benefits'); ?></span>
                                            <ul class="visible-items">
                                                <?php
                                                    $listing = get_sub_field('listing');
                                                    $list_items = explode("\n", $listing);
                                                    foreach ($list_items as $item) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                       <div class="workflow-block">
                                            <span><?php the_sub_field('decription_workflow'); ?></span>
                                            <ul class="visible-items">
                                                <?php
                                                    $listing = get_sub_field('listing_workflow');
                                                    $list_items = explode("\n", $listing);
                                                    foreach ($list_items as $item) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'tasks_solved_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid tasks_solved_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_1'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('sub_description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_2'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('sub_description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_3'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('sub_description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_4'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('sub_description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_5'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                                <span><?php the_sub_field('sub_description_5'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_6'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_6'); ?></h4>
                                                <span><?php the_sub_field('sub_description_6'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_7'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_7'); ?></h4>
                                                <span><?php the_sub_field('sub_description_7'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_8'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_8'); ?></h4>
                                                <span><?php the_sub_field('sub_description_8'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_9'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_9'); ?></h4>
                                                <span><?php the_sub_field('sub_description_9'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_10'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_10'); ?></h4>
                                                <span><?php the_sub_field('sub_description_10'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'onboarding_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid onboarding_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-1">
                                        
                                        <h4><?php the_sub_field('title_box_1'); ?></h4>
                                        <span><?php the_sub_field('description_box_1'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-2">
                                        
                                        <h4><?php the_sub_field('title_box_2'); ?></h4>
                                        <span><?php the_sub_field('description_box_2'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-3">
                                       
                                        <h4><?php the_sub_field('title_box_3'); ?></h4>
                                        <span><?php the_sub_field('decription_box_3'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-4">
                                       
                                        <h4><?php the_sub_field('title_box_4'); ?></h4>
                                        <span><?php the_sub_field('decription_box_4'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-5">
                                      
                                        <h4><?php the_sub_field('title_box_5'); ?></h4>
                                        <span><?php the_sub_field('description_box_5'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="block-1 back-6">
                                      
                                        <h4><?php the_sub_field('title_box_6'); ?></h4>
                                        <span><?php the_sub_field('description_box_6'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'variety_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid variety_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_1'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('sub_description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_2'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('sub_description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-class">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_next_1'); ?>">
                                            <div class="info-block">
                                                 <h4><?php the_sub_field('sub_title_next_1'); ?></h4>
                                                <span><?php the_sub_field('description_next_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_next_2'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_next_2'); ?></h4>
                                                <span><?php the_sub_field('description_next_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_next_3'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_next_3'); ?></h4>
                                                <span><?php the_sub_field('description_next_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_next_4'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_next_4'); ?></h4>
                                                <span><?php the_sub_field('description_next_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'requirements_consultants_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid requirements_consultants_section">
                        <div class="container">
                            <div class="row">
                                <div class="info_section">
                                     <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                    <span><p><?php the_sub_field('description'); ?></p></span>
                                </div>
                                <div class="col-xs-12 col-md-8">
                                    <div class="requirements_consultants_block">
                                        <div class="description">
                                            <ul class="visible-items">
                                                <?php
                                                $listing = get_sub_field('listing_description');
                                                $list_items = explode("\n", $listing);
                                                foreach ($list_items as $item) {
                                                    echo '<li>' . $item . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="resumes-slider slider-1-item">
                                        <?php 
                                            $turn_on_info = get_sub_field('turn_on_info');
                                            if ($turn_on_info == true) { ?>
                                                <h5><?php the_sub_field('sub_title');?></h5>
                                                <span><?php the_sub_field('sub_description'); ?></span>
                                           <?php } ?>
                                        <div id="resume-item-01" class="resume-item"
                                         data-title="<?php the_sub_field('title'); ?>"
                                         data-img="<?php the_sub_field('image_consultant'); ?>">
                                            <div class="resume-slide">
                                                <a href="#resume" class="btn btn-sec btn-ico resume-link" data-toggle="modal" data-target="#resumeModal"><img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/eye-icon.svg"></a>
                                                <div class="resume-item-img">
                                                    <img
                                                src="<?php the_sub_field('image_consultant'); ?>"
                                                alt="<?php the_sub_field('title'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        $turn_on_button = get_sub_field('turn_on_button');
                                        if ($turn_on_button == true) { ?>
                                            <a class="button" href="<?php the_sub_field('button_cvs'); ?>">request more cvs</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'why_from_ukraine_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid why_from_ukraine_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <hr class="title-hr">
                                <span><p><?php the_sub_field('description'); ?></p></span>
                                <div class="why_from_ukraine_block">
                                    <span><?php the_sub_field('sub_title'); ?></span>
                                </div>
                                <div class="icons-box">
                                    <ul class="visible-items">
                                        <?php
                                        $listing = get_sub_field('listing');
                                        $list_items = explode("\n", $listing);
                                            foreach ($list_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                        ?>
                                    </ul>       
                                </div>
                                <div class="why_from_ukraine_block_2">
                                    <span><?php the_sub_field('sub_title_2'); ?></span>
                                </div>
                                <div class="icons-box-2">
                                    <ul class="visible-items">
                                        <?php
                                        $listing = get_sub_field('listing_2');
                                        $list_items = explode("\n", $listing);
                                            foreach ($list_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                        ?>
                                    </ul>       
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'why_choose_us_partner_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid why_choose_us_partner_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                            </div>
                            <div class="row">
                                <div class="benefit-block-all">
                                    <div class="col-xs-12 col-md-7">
                                        <div class="benefit-block">
                                            <span><?php the_sub_field('decription_benefits'); ?></span>
                                            <ul class="visible-items">
                                                <?php
                                                    $listing = get_sub_field('listing');
                                                    $list_items = explode("\n", $listing);
                                                    foreach ($list_items as $item) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                       <div class="workflow-block">
                                            <span><?php the_sub_field('decription_workflow'); ?></span>
                                            <ul class="visible-items">
                                                <?php
                                                    $listing = get_sub_field('listing_workflow');
                                                    $list_items = explode("\n", $listing);
                                                    foreach ($list_items as $item) {
                                                        echo '<li>' . $item . '</li>';
                                                    }
                                                ?>
                                            </ul>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="how-does-block">
                                    <div class="how_we_hire_great_block">
                                        <span><?php the_sub_field('sub_title'); ?></span>
                                    </div>
                                    <div class="icons-box">
                                           <div class="icon-box box-1">
                                               <img src="<?php the_sub_field('icon_box_1'); ?>">
                                               <?php the_sub_field('description_box_1'); ?>
                                           </div>
                                           <div class="icon-box box-2">
                                               <img src="<?php the_sub_field('icon_box_2'); ?>">
                                               <?php the_sub_field('description_box_2'); ?>
                                           </div>
                                           <div class="icon-box box-3">
                                               <img src="<?php the_sub_field('icon_box_3'); ?>">
                                                <?php the_sub_field('description_box_3'); ?>
                                           </div>
                                           <div class="icon-box box-4">
                                               <img src="<?php the_sub_field('icon_box_4'); ?>">
                                                <?php the_sub_field('description_box_4'); ?>
                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'demand_in_industries_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid demand_in_industries_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                    <span><?php the_sub_field('description'); ?></span>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="demand_in_industries_block">
                                        <div class="description">
                                            <ul class="visible-items">
                                                <?php
                                                $listing = get_sub_field('listing_description');
                                                $list_items = explode("\n", $listing);
                                                foreach ($list_items as $item) {
                                                    echo '<li>' . $item . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'an_overview_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid an_overview_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_1'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('sub_description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_2'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('sub_description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_3'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('sub_description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_4'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('sub_description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_5'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                                <span><?php the_sub_field('sub_description_5'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_6'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_6'); ?></h4>
                                                <span><?php the_sub_field('sub_description_6'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_7'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_7'); ?></h4>
                                                <span><?php the_sub_field('sub_description_7'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_8'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_8'); ?></h4>
                                                <span><?php the_sub_field('sub_description_8'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_9'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_9'); ?></h4>
                                                <span><?php the_sub_field('sub_description_9'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_10'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_10'); ?></h4>
                                                <span><?php the_sub_field('sub_description_10'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="hiring_block">
                                        <span><?php the_sub_field('sub_title_box'); ?></span>
                                    </div>
                                     <div class="icons-box">
                                       <div class="icon-box box-1">
                                           <img src="<?php the_sub_field('icon_box_block2_1'); ?>">
                                           <p><?php the_sub_field('description_box_block2_1'); ?></p>
                                       </div>
                                       <div class="icon-box box-2">
                                           <img src="<?php the_sub_field('icon_box_block2_2'); ?>">
                                           <p><?php the_sub_field('description_box_block2_2'); ?></p>
                                       </div>
                                       <div class="icon-box box-3">
                                           <img src="<?php the_sub_field('icon_box_block2_3'); ?>">
                                           <p><?php the_sub_field('description_box_block2_3'); ?></p>
                                       </div>
                                       <div class="icon-box box-4">
                                           <img src="<?php the_sub_field('icon_box_block2_4'); ?>">
                                           <p><?php the_sub_field('description_box_block2_4'); ?></p>
                                       </div>
                                       <div class="icon-box box-5">
                                           <img src="<?php the_sub_field('icon_box_block2_5'); ?>">
                                           <p><?php the_sub_field('description_box_block2_5'); ?></p>
                                       </div>
                                       <div class="icon-box box-6">
                                           <img src="<?php the_sub_field('icon_box_block2_6'); ?>">
                                           <p><?php the_sub_field('description_box_block2_6'); ?></p>
                                       </div>
                                       <div class="icon-box box-7">
                                           <img src="<?php the_sub_field('icon_box_block2_7'); ?>">
                                           <p><?php the_sub_field('description_box_block2_7'); ?></p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'ms_dynamics_images_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid ms_dynamics_images_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="resumes-slider slider-1-item">
                                        <h5><?php the_sub_field('sub_title');?></h5>
                                        <div id="resume-item-01" class="resume-item"
                                         data-title="<?php the_sub_field('sub_title'); ?>"
                                         data-img="<?php the_sub_field('image_consultant'); ?>">
                                            <div class="resume-slide">
                                                <a href="#resume" class="btn btn-sec btn-ico resume-link" data-toggle="modal" data-target="#resumeModal"><img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/eye-icon.svg"></a>
                                                <div class="resume-item-img">
                                                    <img
                                                src="<?php the_sub_field('image_consultant'); ?>">
                                                </div>
                                                <a class="button" href="<?php the_sub_field('button_cvs'); ?>">request more cvs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="resumes-slider slider-2-item">
                                        <h5><?php the_sub_field('sub_title_2');?></h5>
                                        <div id="resume-item-02" class="resume-item"
                                         data-title="<?php the_sub_field('sub_title_2'); ?>"
                                         data-img="<?php the_sub_field('image_consultant_2'); ?>">
                                            <div class="resume-slide">
                                                <a href="#resume" class="btn btn-sec btn-ico resume-link" data-toggle="modal" data-target="#resumeModal"><img src="https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/assets/icons/eye-icon.svg"></a>
                                                <div class="resume-item-img">
                                                    <img
                                                src="<?php the_sub_field('image_consultant_2'); ?>">
                                                </div>
                                                <a class="button" href="<?php the_sub_field('button_cvs_2'); ?>">request more cvs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'what_does_your_business_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid what_does_your_business_section">
                        <div class="container">
                            <div class="row-section">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><?php the_sub_field('description'); ?></span>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                            <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('sub_description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('sub_description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('sub_description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 six-block">
                                        <div class="block-1">
                                             <div class="info-box">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('sub_description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'what_products_work_with_section':
                $info_section = get_sub_field('turn_on');
                if ($info_section == true) { ?>
                    <div class="container-fluid what_products_work_with_section">
                        <div class="container">
                            <div class="row">
                                <div class="block-title">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <hr class="title-hr">
                                </div>
                                <span class="description"><p><?php the_sub_field('description'); ?></p></span>
                                <div class="row-class">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_1'); ?>">
                                            <div class="info-block">
                                                 <h4><?php the_sub_field('sub_title_1'); ?></h4>
                                                <span><?php the_sub_field('description_1'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_2'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_2'); ?></h4>
                                                <span><?php the_sub_field('description_2'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_3'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_3'); ?></h4>
                                                <span><?php the_sub_field('description_3'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_4'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_4'); ?></h4>
                                                <span><?php the_sub_field('description_4'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_5'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_5'); ?></h4>
                                                <span><?php the_sub_field('description_5'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="block-1">
                                            <img src="<?php the_sub_field('icon_6'); ?>">
                                            <div class="info-block">
                                                <h4><?php the_sub_field('sub_title_6'); ?></h4>
                                                <span><?php the_sub_field('description_6'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'why_work_with_us_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid why_work_with_us_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <hr class="title-hr">
                                <span><p><?php the_sub_field('description'); ?></p></span>
                                <div class="why_work_with_us_block">
                                    <div class="description">
                                        <ul class="visible-items">
                                            <?php
                                            $listing = get_sub_field('listing');
                                            $list_items = explode("\n", $listing);
                                            foreach ($list_items as $item) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            break;

            case 'our_model_for_team_building_section':
                $title_section_vision = get_sub_field('turn_on');
                if ($title_section_vision == true) { ?>
                    <div class="container-fluid our_model_for_team_building_section">
                        <div class="container">
                            <div class="row">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <hr class="title-hr">
                                <div class="our_model_for_team_building_block">
                                    <span><?php the_sub_field('sub_title'); ?></span>
                                </div>
                                <div class="icons-box">
                                       <div class="icon-box box-1">
                                           <img src="<?php the_sub_field('icon_box_1'); ?>">
                                           <?php the_sub_field('description_box_1'); ?>
                                       </div>
                                       <div class="icon-box box-2">
                                           <img src="<?php the_sub_field('icon_box_2'); ?>">
                                           <?php the_sub_field('description_box_2'); ?>
                                       </div>
                                       <div class="icon-box box-3">
                                           <img src="<?php the_sub_field('icon_box_3'); ?>">
                                            <?php the_sub_field('description_box_3'); ?>
                                       </div>
                                       <div class="icon-box box-4">
                                           <img src="<?php the_sub_field('icon_box_4'); ?>">
                                            <?php the_sub_field('description_box_4'); ?>
                                       </div>
                                       <div class="icon-box box-5">
                                           <img src="<?php the_sub_field('icon_box_5'); ?>">
                                            <?php the_sub_field('description_box_5'); ?>
                                       </div>
                                       <div class="icon-box box-6">
                                           <img src="<?php the_sub_field('icon_box_6'); ?>">
                                            <?php the_sub_field('description_box_6'); ?>
                                       </div>
                                       <div class="icon-box box-7">
                                           <img src="<?php the_sub_field('icon_box_7'); ?>">
                                            <?php the_sub_field('description_box_7'); ?>
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
</main>
<!-- Modal -->
    <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="#" alt="">
                </div>
            </div>
        </div>
    </div>    
<?php get_footer(); ?>