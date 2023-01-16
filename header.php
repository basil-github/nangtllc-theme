<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nadia_&_Naaz_Perfumes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tooplate-gymso-style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-us.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header role="banner" class="header js-header">
            <div class="header__outer">
                <div class="header__inner js-header-line-context">
                    <div class="header__level-one js-header-level-one web_head">
                        <div class="nav container">
                            <ul class="nav-left nav-left-one m-0">
                                <div class="nav-container open_nave">
                                    <div class="nav-toggle"></div>
                                </div>
                            </ul>
                            <div class="nav-center">
                                <div class="nav-item">
                                    <a href="/">
                                        <img data-tilt class="header_logo" role="img" alt="logo" data-test="lnkLogo"
                                            src="<?php echo get_custom_logo_url(); ?>" />
                                    </a>
                                </div>
                            </div>
                            <ul class="nav-right"></ul>
                        </div>
                    </div>
                    <div class="header__root js-header-root" aria-hidden="false">
                        <nav id="main-navigation" class="header__primary" role="navigation"
                            aria-label="main navigation">
                            <ul class="header__primary__links m-0 header__primary__links1">
                                <li class="js-header-entry">
                                    <a href="/brands.html" class="header__primary__button js-header-link">
                                        <span>Brands</span>
                                    </a>
                                </li>
                                <li class="js-header-entry nested_link">
                                    <a href="/" class="header__primary__button js-header-link">
                                        <span>Collections</span>
                                    </a>
                                    <ul class="extras">
                                        <li>
                                            <a href="/">
                                                <span>All</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/">
                                                <span>BOUQUET</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/">
                                                <span>EDICT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/">
                                                <span>All</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/">
                                                <span>BOUQUET </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/">
                                                <span>EDICT</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="js-header-entry">
                                    <a href="/about-us.html" class="header__primary__button js-header-link">
                                        <span>About us</span>
                                    </a>
                                </li>
                                <li class="js-header-entry">
                                    <a href="/blogs.html" class="header__primary__button js-header-link">
                                        <span>Blogs</span>
                                    </a>
                                </li>
                                <li class="js-header-entry">
                                    <a href="/contact-us.html" class="header__primary__button js-header-link">
                                        <span>Contact us</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="menu_mob">
                    <div class="nav container">
                        <ul class="nav-left nav-left-one m-0"> </ul>
                        <div class="nav-center">
                            <div class="nav-item">
                                <h1>
                                    <img class="header_logo" role="img" alt="logo" data-test="lnkLogo"
                                        src="<?php echo get_custom_logo_url(); ?>" />
                                </h1>
                            </div>
                        </div>
                        <ul class="nav-right">
                            <div class="nav-container close_nave">
                                <div class="nav-toggle"></div>
                            </div>
                        </ul>
                    </div>
                    <ul class="header__primary__links m-0 header__primary__links1">
                        <li class="js-header-entry">
                            <a href="/brands.html" class="header__primary__button js-header-link">
                                <span>Brands</span>
                            </a>
                        </li>
                        <li class="js-header-entry nested_link">
                            <a href="/" class="header__primary__button js-header-link">
                                <span>Collections</span>
                            </a>
                            <ul class="pl-2">
                                <li>
                                    <a href="/">
                                        <span>All</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>BOUQUET</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>EDICT</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>All</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>BOUQUET </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>EDICT</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="js-header-entry">
                            <a href="/about-us.html" class="header__primary__button js-header-link">
                                <span>About us</span>
                            </a>
                        </li>
                        <li class="js-header-entry">
                            <a href="/blogs.html" class="header__primary__button js-header-link">
                                <span>Blogs</span>
                            </a>
                        </li>
                        <li class="js-header-entry">
                            <a href="/contact-us.html" class="header__primary__button js-header-link">
                                <span>Contact us</span>
                            </a>
                        </li>
                    </ul>

                </div>
        </header>