<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta CHARSET="UTF-8">
<?php if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="prefetch" href="<?php echo get_stylesheet_directory_uri();?>/inc/assets/logo@2x.png">
<?php wp_head(); ?>
<link rel="prefetch" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/icons/column__first--hover.png">
<link rel="prefetch" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/icons/column__second--hover.png">
<link rel="prefetch" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/icons/column__third--hover.png">
<link rel="prefetch" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/icons/column__fourth--hover.png">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#navbar__scroll">
