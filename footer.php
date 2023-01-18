<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nadia_&_Naaz_Perfumes
 */

?>

<footer role="contentinfo">
    <div class="footer">
        <div class="footer__logo col-24 has-text-centered align-items-center">
            <a href="/" class="" data-event-label="homepage" data-event-title="">
                <img class="header_logo text-centered" src="<?php echo get_custom_logo_url(); ?>" />
            </a>
        </div>
        <div class="container js-container">
            <div class="row footer__row" role="list">
                <div class="footer__sections col-24 col-m-8 col-l-6 push-m-2" role="listitem">
                    <div class="footer__sections-container">
                        <p class="heading is-6 text-uppercase">explore nangtllc.com</p>
                        <ul class="links-list">
                            <li class="">
                                <a href="/about-us.html" class="link footer_navigation"> About Us </a>
                            </li>
                            <li class="">
                                <a href="/contact-us.html" class="link footer_navigation"> Contact Us</a>
                            </li>
                            <li class="">
                                <a href="/" class="link footer_navigation"> Our Stores</a>
                            </li>
                            <li class="">
                                <a href="/" class="link footer_navigation"> Search</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__sections col-24 col-m-8 col-l-6" role="listitem">
                    <div class="footer__sections-container">
                        <p class="heading is-6 text-uppercase">NEWSLETTER</p>
                        <div class="w-full relative flex items-center justify-center subscrpion">
                            <p>
                                Subscribe to receive updates, <br />access to exclusive
                                deals, and more.
                            </p>
                            <div class="subscrpion_footer">
                                <input placeholder="Email Address" />
                                <button>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__sections col-24 col-m-8 col-l-6 push-m-2" role="listitem">
                    <div class="footer__sections-container">
                        <p class="heading is-6 text-uppercase">CATALOG</p>
                        <ul class="links-list">
                            <li class="">
                                <a href="/" class="link footer_navigation"> For him </a>
                            </li>
                            <li class="">
                                <a href="/" class="link footer_navigation"> For her </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__sections col-24 col-m-8 col-l-6" role="listitem">
                    <div class="footer__sections-container">
                        <p class="heading is-6 text-uppercase">MAIN MENU</p>
                        <ul class="links-list">
                            <li class="">
                                <a href="/" class="link footer_navigation">Collections </a>
                            </li>
                            <li class="">
                                <a href="/" class="link footer_navigation">Blogs </a>
                            </li>
                            <li class="">
                                <a href="/" class="link footer_navigation">FAQ </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footerLast__container">
                    <div class="footer__language col-24 col-m-12" role="listitem">
                        <div class="control is-horizontal" data-test="lblLanguage_Footerbar">
                            <div class="control-label">
                                <p class="heading is-7 change-language-label" lang="en">
                                    Copyright © 2022 Nadia &amp; Naaz Perfumes, All rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer__end-links col-24 col-m-12 is-light" role="listitem">
                        <span class="is-sr-only">follow us</span>
                        <ul class="links-list" data-test="secSocialNetworkLinks_Footer">
                            <li>
                                <a href="#" class="link has-icon fa fa-instagram fs-20"></a>
                            </li>
                            <li>
                                <a href="#" class="link has-icon fa fa-facebook fs-20"></a>
                            </li>
                            <li>
                                <a href="#" class="link has-icon fa fa-twitter fs-20"></a>
                            </li>
                            <?php echo get_option('my_setting_field'); ?>
                            <li>
                                <a href="#" class="link has-icon fs-20">
                                    <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <path id="a" d="M19 6.5V13H0V0h19z" />
                                        </defs>
                                        <g fill="none" fill-rule="evenodd" transform="translate(1,4)">
                                            <mask id="b" fill="#fff">
                                                <use xlink:href="#a" />
                                            </mask>
                                            <path
                                                d="M7.329 8.892v-5.19l4.99 2.604-4.99 2.586zm10.958-6.09s-.18-1.272-.734-1.833c-.702-.735-1.49-.74-1.85-.782C13.116 0 9.24 0 9.24 0h-.008S5.355 0 2.77.187C2.409.23 1.62.234.919.969.365 1.53.185 2.803.185 2.803S0 4.298 0 5.793v1.4c0 1.496.185 2.99.185 2.99s.18 1.273.734 1.834c.702.736 1.625.712 2.037.79 1.477.141 6.28.185 6.28.185s3.881-.006 6.466-.193c.361-.043 1.149-.046 1.851-.782.554-.56.734-1.834.734-1.834s.185-1.494.185-2.99v-1.4c0-1.495-.185-2.99-.185-2.99z"
                                                fill="#767676" mask="url(#b)" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tilt.jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>