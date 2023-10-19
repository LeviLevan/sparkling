<footer>
    <div class="container">
        <div class="row row-footer">
            <div class="col-lg-3">
               <div class="footer-logo">
                    <a href="/" class="footer__link">
                        <img class="footer__logo wow fadeIn" data-wow-offset="0"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/logo@2x.webp" alt="" height="76" width="207">
                    </a>
                    <a href="https://mobilunity.com/blog/hire-microsoft-dynamics-developers/" class="footer__link_mobilunity">Project of <i class="ico-mobilunity"></i></a>
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
                <div class="footer__disclaimer">Disclaimer: Microsoft, Microsoft Dynamics are trademarks or registered
                    trademarks of Microsoft Corporation in the United States and other countries.
                </div>
                <div class="footer__copyright">Copyright ©<?php echo date('Y'); ?> All rights reserved. | <a rel="nofollow" href="/about-us/">About Us</a> <a rel="nofollow" href="/privacy-policy/">Privacy Policy</a> <a rel="nofollow" href="/terms-and-conditions/">Terms and Conditions</a> <a href="/sitemap/">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-to-top"><i class="icon-up-open"></i></div>
</footer>

<script>
    /*$(window).on('load', function () {
        var $preloader = $('#p__prldr'),
            $svg__anm = $preloader.find('.svg__anm');
        $svg__anm.delay(250).fadeOut('slow');
        $preloader.delay(500).fadeOut('slow');
    });*/
</script>

<?php wp_footer(); ?>

</body>
</html>