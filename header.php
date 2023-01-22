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
    <?php wp_head();
    $icon = '<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#E1B377" stroke="none"> <path d="M1330 2895 c0 -481 2 -875 5 -875 3 0 84 42 180 93 l175 92 0 448 c0 246 3 447 6 447 5 0 285 -157 689 -387 116 -66 300 -171 410 -233 110 -63 226 -128 258 -146 l57 -33 0 222 0 223 -885 512 c-486 282 -887 512 -890 512 -3 0 -5 -394 -5 -875z"/> <path d="M4093 3594 l-183 -106 0 -594 0 -594 -62 32 c-35 18 -66 34 -71 36 -4 2 -6 -96 -5 -219 l3 -222 249 -144 c137 -79 250 -142 252 -140 2 2 3 466 2 1030 l-3 1026 -182 -105z"/> <path d="M670 2610 l0 -990 83 49 c45 26 126 74 180 105 l97 57 0 564 0 565 76 -45 c42 -25 78 -45 80 -45 2 0 3 100 2 222 l-3 223 -254 142 c-139 79 -255 143 -257 143 -2 0 -4 -445 -4 -990z"/> <path d="M3430 3202 l-175 -109 -3 -477 c-2 -394 -5 -477 -16 -473 -7 3 -322 183 -699 401 -377 218 -688 396 -691 396 -3 0 -6 -98 -6 -217 l0 -218 48 -26 c40 -21 409 -234 1517 -872 l200 -115 3 454 c1 250 1 659 0 910 l-3 455 -175 -109z"/> </g> </svg>';
    ?>
</head>

<body <?php body_class(); ?>>
    <?php if (get_option('is_maintenance') == "yes") {
        ?>
        <main>

            <style>
                html,
                body {
                    background: linear-gradient(180deg, #fafafa, #deebfa) fixed;
                    font-family: 'Open Sans', sans-serif;
                    height: 100%;
                    margin: 0 auto;
                    user-select: none;
                    overflow: hidden;
                }

                main {
                    height: 100%;
                    display: flex;
                    margin: 0 20px;
                    text-align: center;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                main svg {
                    fill: #FFF;
                    stroke: #ccc;
                    stroke-width: 1.5;
                    height: 140px;
                    width: 200px;
                    margin-bottom: 25px;
                }

                main h1 {
                    color: #212121;
                    font-size: 3.5em;
                    font-weight: 300;
                    margin: 0;
                }

                main h2 {
                    color: #757575;
                    font-size: 1.5em;
                    font-weight: 400;
                    margin-top: 10px;
                    max-width: 670px;
                }
            </style>
            <svg viewBox="0 0 100 68">
                <g id="large">
                    <path
                        d="M55.8 38.5l6.2-1.2c0-1.8-.1-3.5-.4-5.3l-6.3-.2c-.5-2-1.2-4-2.1-6l4.8-4c-.9-1.6-1.9-3-3-4.4l-5.6 3c-1.3-1.6-3-3-4.7-4.1l2-6A30 30 0 0 0 42 8l-3.3 5.4c-2-.7-4.2-1-6.2-1.2L31.3 6c-1.8 0-3.5.1-5.3.4l-.2 6.3c-2 .5-4 1.2-6 2.1l-4-4.8c-1.6.9-3 1.9-4.4 3l3 5.6c-1.6 1.3-3 3-4.1 4.7l-6-2A32.5 32.5 0 0 0 2 26l5.4 3.3c-.7 2-1 4.2-1.2 6.2L0 36.7c0 1.8.1 3.5.4 5.3l6.3.2c.5 2 1.2 4 2.1 6l-4.8 4c.9 1.6 1.9 3 3 4.4l5.6-3c1.4 1.6 3 3 4.7 4.1l-2 6A30.5 30.5 0 0 0 20 66l3.4-5.4c2 .7 4 1 6.1 1.2l1.2 6.2c1.8 0 3.5-.1 5.3-.4l.2-6.3c2-.5 4-1.2 6-2.1l4 4.8c1.6-.9 3-1.9 4.4-3l-3-5.6c1.6-1.3 3-3 4.1-4.7l6 2A32 32 0 0 0 60 48l-5.4-3.3c.7-2 1-4.2 1.2-6.2zm-13.5 4a12.5 12.5 0 1 1-22.6-11 12.5 12.5 0 0 1 22.6 11z" />
                    <animateTransform attributeName="transform" begin="0s" dur="4.5s" from="0 31 37"
                        repeatCount="indefinite" to="360 31 37" type="rotate" />
                </g>
                <g id="small">
                    <path
                        d="M93 19.3l6-3c-.4-1.6-1-3.2-1.7-4.8L90.8 13c-.9-1.4-2-2.7-3.4-3.8l2.1-6.3A21.8 21.8 0 0 0 85 .7l-3.6 5.5c-1.7-.4-3.4-.5-5.1-.3l-3-5.9c-1.6.4-3.2 1-4.7 1.7L70 8c-1.5 1-2.8 2-3.9 3.5L60 9.4a20.6 20.6 0 0 0-2.2 4.6l5.5 3.6a15 15 0 0 0-.3 5.1l-5.9 3c.4 1.6 1 3.2 1.7 4.7L65 29c1 1.5 2.1 2.8 3.5 3.9l-2.1 6.3a21 21 0 0 0 4.5 2.2l3.6-5.6c1.7.4 3.5.5 5.2.3l2.9 5.9c1.6-.4 3.2-1 4.8-1.7L86 34c1.4-1 2.7-2.1 3.8-3.5l6.3 2.1a21.5 21.5 0 0 0 2.2-4.5l-5.6-3.6c.4-1.7.5-3.5.3-5.1zM84.5 24a7 7 0 1 1-12.8-6.2 7 7 0 0 1 12.8 6.2z" />
                    <animateTransform attributeName="transform" begin="0s" dur="3s" from="0 78 21" repeatCount="indefinite"
                        to="-360 78 21" type="rotate" />
                </g>
            </svg>
            <div class="nav-center">
                <div class="nav-item">
                    <a href="/">
                        <img data-tilt class="header_logo" role="img" alt="logo" data-test="lnkLogo"
                            src="<?php echo get_custom_logo_url(); ?>" />
                    </a>
                </div>
            </div>
            <h1 class="text-uppercase">Under Maintenance</h1>
            <h2>We are sorry for the inconvenience. In the meantime, please contact us in our social media.</h2>
            <div class="links-list d-flex text-center" data-test="secSocialNetworkLinks_Footer">
                <?php if (get_option('fb_link')) { ?>
                    <li>
                        <a href="<?php echo get_option('fb_link'); ?>" class="link has-icon fa fa-facebook fs-20"
                            target="_blank">
                        </a>
                    </li>
                <?php }
                ?>
                <?php if (get_option('ig_link')) { ?>
                    <li>
                        <a href="<?php echo get_option('ig_link'); ?>" class="link has-icon fa fa-instagram fs-20"
                            target="_blank">
                        </a>
                    </li>
                <?php }
                ?>
                <?php if (get_option('tr_link')) { ?>
                    <li>
                        <a href="<?php echo get_option('tr_link'); ?>" class="link has-icon fa fa-twitter fs-20"
                            target="_blank">
                        </a>
                    </li>
                <?php }
                ?>
                <?php if (get_option('ln_link')) { ?>
                    <li>
                        <a href="<?php echo get_option('ln_link'); ?>" class="link has-icon fa fa-linkedin fs-20"
                            target="_blank">
                        </a>
                    </li>
                <?php }
                ?>
                <?php if (get_option('yt_link')) { ?>
                    <li>
                        <a href="<?php echo get_option('yt_link'); ?>" class="link has-icon fa fa-youtube fs-20" target="_blank"
                            style="width:20px;">

                        </a>
                    </li>
                <?php }
                ?>
            </div>
        </main>
    <?php } ?>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <?php if (get_option('is_maintenance') != "yes") {
            ?>
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
                                        <a href="/brands" class="header__primary__button js-header-link">
                                            <span>Brands</span>
                                        </a>
                                    </li>
                                    <li class="js-header-entry nested_link">
                                        <a href="/" class="header__primary__button js-header-link">
                                            <span>Collections</span>
                                        </a>
                                        <ul class="extras">
                                            <li>
                                                <a href="/collocations">
                                                    <span>All</span>
                                                </a>
                                            </li>
                                            <?php

                                            $args = array(
                                                'taxonomy' => 'product_cat',
                                            );
                                            $cats = get_categories($args);
                                            foreach ($cats as $cat) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo get_category_link($cat->term_id) ?>">
                                                        <span>
                                                            <?php echo $cat->name; ?>
                                                        </span>
                                                    </a>
                                                </li>

                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="js-header-entry">
                                        <a href="/about-us" class="header__primary__button js-header-link">
                                            <span>About us</span>
                                        </a>
                                    </li>
                                    <li class="js-header-entry">
                                        <a href="/blogs" class="header__primary__button js-header-link">
                                            <span>Blogs</span>
                                        </a>
                                    </li>
                                    <li class="js-header-entry">
                                        <a href="/contact-us" class="header__primary__button js-header-link">
                                            <span>Contact us</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="fixed_logo_only">
                                <a href="/">
                                    <img id="js-logo" class="" role="img" alt="logo" data-test="lnkLogo"
                                        src='data:image/svg+xml;base64,<?php echo base64_encode($icon) ?>' />
                                </a>
                            </div>
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
                                <a href="/brands" class="header__primary__button js-header-link">
                                    <span>Brands</span>
                                </a>
                            </li>
                            <li class="js-header-entry nested_link">
                                <a href="/" class="header__primary__button js-header-link">
                                    <span>Collections</span>
                                </a>
                                <ul class="pl-2">
                                    <li>
                                        <a href="/collocations">
                                            <span>All</span>
                                        </a>
                                    </li>
                                    <?php

                                    $args = array(
                                        'taxonomy' => 'product_cat',
                                    );
                                    $cats = get_categories($args);
                                    foreach ($cats as $cat) {
                                        ?>
                                        <li>
                                            <a href="<?php echo get_category_link($cat->term_id) ?>">
                                                <span>
                                                    <?php echo $cat->name; ?>
                                                </span>
                                            </a>
                                        </li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="js-header-entry">
                                <a href="/about-us" class="header__primary__button js-header-link">
                                    <span>About us</span>
                                </a>
                            </li>
                            <li class="js-header-entry">
                                <a href="/blogs" class="header__primary__button js-header-link">
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li class="js-header-entry">
                                <a href="/contact-us" class="header__primary__button js-header-link">
                                    <span>Contact us</span>
                                </a>
                            </li>
                        </ul>

                    </div>
            </header>
        <?php } ?>