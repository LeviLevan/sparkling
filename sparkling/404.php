<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package sparkling
 */

get_header(); ?>

<?php get_template_part( 'templates/header' ); ?>

<main class="page page--404">
	<div class="container">
		<div class="row">
			<h1 class="col-xs-12">
				Oops! That page can’t be found.
			</h1>
			<div class="col-xs-12">
				It looks like nothing was found at this location.
			</div>
		</div>
	</div>
</main>
<?php //get_footer(); ?>
<footer class="footer--404">
    <div class="container">
        <div class="row row-footer">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <a href="/" class="footer__link">
                        <img class="footer__logo wow fadeIn" data-wow-offset="0"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/logo@2x.webp" alt="">
                    </a>
                    <a href="https://mobilunity.com/blog/remote-qa-engineer/" class="footer__link_mobilunity">Project of <i class="ico-mobilunity"></i></a>
                </div>
                <?php dynamic_sidebar( 'footer-widget-1' ); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar( 'footer-widget-2' ); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar( 'footer-widget-3' ); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar( 'footer-widget-4' ); ?>
            </div>
        </div>
        <div class="row row-copyright">
            <div class="col-md-12 text-center">
                <?php /* ?>
                <div class="footer__disclaimer">Disclaimer: Microsoft, Microsoft Dynamics are trademarks or registered
                    trademarks of Microsoft Corporation in the United States and other countries.
                </div>
                <?php */ ?>
                <div class="footer__copyright">Copyright ©<?php echo date('Y'); ?> All rights reserved.
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-to-top"><i class="icon-up-open"></i></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
