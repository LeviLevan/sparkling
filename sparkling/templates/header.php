<?php
if (is_front_page()) {
    $home_link = '';
    $class_link = ' nav--scroll';
    $header_link = '';
} else {
    $home_link = get_home_url() . '/';
    $class_link = '';
    $header_link = '--blog';
}
?>
<header id="header">
    <div class="container">
        <div class="row row__logo">
            <div class="col-xs-6">
                <div class="header__logo--container">
                    <a href="<?php echo get_home_url(); ?>" class="header__link">
                        <img class="header__logo"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/logo-mob@2x.webp" alt="" height="76" width="207">
                    </a>
                    <a href="https://mobilunity.com/blog/hire-microsoft-dynamics-developers/" class="header__link_mobilunity">Project of <i class="ico-mobilunity"></i></a>
                </div>
            </div>
            <div class="col-xs-6 col-hamburger">
                <div class="header__button">
                    <a href="<?php echo $home_link; ?>#contact" class="mail__button button scroll<?php echo $header_link; ?>">Consultation</a>
                </div>
                <button class="hamburger hamburger--spin" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="row__nav">
                <button class="menu-close" type="button">X</button>
                <div class="header__logo-wrap">
                    <a href="<?php echo get_home_url(); ?>" class="header__link<?php echo $header_link; ?>">
                        <img class="header__logo"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/logo@2x.webp"
                             alt="" height="76" width="207">
                    </a>
                    <a href="https://mobilunity.com/blog/hire-microsoft-dynamics-developers/" class="header__link_mobilunity">Project of <i class="ico-mobilunity"></i></a>
                </div>

                <div class="navbar-wrap">
                    <nav id="navbar__scroll">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link--blog" href="/case-studies/">Case Studies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo $class_link; ?>"
                                   href="<?php echo $home_link; ?>#solutions">Services</a>
                                    <ul class="sub-menu">
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/microsoft-dynamics-365-developers-for-hire/">Hire D365 Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-ax-developer/">Dynamics AX Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-crm-developer/">Dynamics CRM Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-gp-developer/">Dynamics GP Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-nav-developer/">Dynamics NAV Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-sl-developer/">Dynamics SL Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-erp-developer/">Dynamics ERP Developer</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/hire-microsoft-dynamics-consultant/">Dynamics Consultant</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link--blog" href="/blog/">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link--blog" href="/consultants/">Consultants</a>
                                 <ul class="sub-menu">
                                    <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/consultant-category/dynamics-ax-consultants/">Dynamics AX Consultants</a>
                                    </li>
                                     <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/consultant-category/dynamics-ce-consultants/">Dynamics CE Consultants</a>
                                    </li>
                                     <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/consultant-category/dynamics-erp-consultants/">Dynamics ERP Consultants</a>
                                    </li>
                                     <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/consultant-category/dynamics-fo-consultants/">Dynamics FO Consultants</a>
                                    </li>
                                     <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/consultant-category/dynamics-nav-consultants/">Dynamics NAV Consultants</a>
                                    </li>
                                     <li>
                                        <a class="nav-link" href="https://www.hiredynamicsdevelopers.com/consultant-category/dynamics-power-platform-consultants/">Dynamics Power Platform Consultants</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link--blog" href="/locations/">Locations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link--ext link-about" href="https://mobilunity.com/we-are-mobilunity/">About Mobilunity</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="widgets-wrap">
                    <?php /* ?>
                    <div class="header__mail">
                        <div class="header__mail--envelope"></div>
                        <span class="header__mail_span">support@hiredynamicsdevelopers.com</span>
                    </div>
                    <?php */ ?>

                    <div class="header__button">
                        <a rel="nofollow" href="<?php echo $home_link; ?>become-a-consultant/" class="h__button consultant__button button">Consultant Application</a>
                    </div>

                    <div class="header__button">
                        <a href="<?php echo $home_link; ?>#contact" class="h__button mail__button button scroll<?php echo $header_link; ?>">Consultation</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>