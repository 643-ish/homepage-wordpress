<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/static/images/tag_icon.ico" type="image/png">
    <?php wp_head(); ?>
</head>
<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo get_template_directory_uri(); ?>/static/images/logo_gradient.png" alt="">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="clearfix container">
            <div class="row">
                <nav class="main-menu clearfix">
                    <div class="main-menu-wrapper clearfix">
                        <div class="main-menu-wrapper-inner clearfix">
                            <div class="main-menu-wrapper__left clearfix">
                                <div class="main-menu-wrapper__logo">
                                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/static/images/logo_gradient.png" class="logo_img_size" alt=""></a>
                                </div>
                                <div class="main-menu-wrapper__main-menu">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="<?php if (is_front_page() || is_page('about')) echo 'current'; ?>"><a href="<?php echo home_url(); ?>">About</a></li>
                                        <li class="nav-item dropdown <?php if (is_page(['service-ses', 'service-development'])) echo 'current'; ?>">
                                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item <?php if (is_page('service-ses')) echo 'current'; ?>" href="<?php echo home_url('/service-ses'); ?>">SES事業</a></li>
                                                <li><a class="dropdown-item <?php if (is_page('service-development')) echo 'current'; ?>" href="<?php echo home_url('/service-development'); ?>">請負開発・受託開発</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if (is_page('our-team')) echo 'current'; ?>"><a href="<?php echo home_url('/our-team'); ?>">Ourteam</a></li>
                                        <li class="<?php if (is_page('company')) echo 'current'; ?>"><a href="<?php echo home_url('/company'); ?>">Company</a></li>
                                        <li class="<?php if (is_page('news')) echo 'current'; ?>"><a href="<?php echo home_url('/news'); ?>">News</a></li>
                                        <li class="<?php if (is_page('contact')) echo 'current'; ?>"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="stricky-header stricky-header-fix stricked-menu main-menu main-menu-fix">
            <div class="container">
                <div class="row">
                    <div class="main-menu-wrapper__left clearfix">
                        <div class="main-menu-wrapper__logo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/static/images/logo_gradient.png" width="135" height="31" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="<?php if (is_front_page() || is_page('about')) echo 'current'; ?>"><a href="<?php echo home_url(); ?>">About</a></li>
                                <li class="nav-item dropdown <?php if (is_page(['service-ses', 'service-development'])) echo 'current'; ?>">
                                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item <?php if (is_page('service-ses')) echo 'current'; ?>" href="<?php echo home_url('/service-ses'); ?>">SES事業</a></li>
                                        <li><a class="dropdown-item <?php if (is_page('service-development')) echo 'current'; ?>" href="<?php echo home_url('/service-development'); ?>">請負開発・受託開発</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if (is_page('our-team')) echo 'current'; ?>"><a href="<?php echo home_url('/our-team'); ?>">Ourteam</a></li>
                                <li class="<?php if (is_page('company')) echo 'current'; ?>"><a href="<?php echo home_url('/company'); ?>">Company</a></li>
                                <li class="<?php if (is_page('news')) echo 'current'; ?>"><a href="<?php echo home_url('/news'); ?>">News</a></li>
                                <li class="<?php if (is_page('contact')) echo 'current'; ?>"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
