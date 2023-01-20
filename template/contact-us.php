<?php /* Template Name: Contact us */?>
<?php get_header(); ?>
<div class="hero_ hero_-small hero_-contact-us hero_-shopping-bag hero_-short">
    <div class="hero_-background-image-small-wrapper">
        <picture data-image-type="picture">
            <source data-image-size="standard-retina" srcset="<?php echo (get_field('images')["web"]); ?>"
                media="(min-width: 1024px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 1024px) and (min-resolution: 192dpi)">
            <source data-image-size="medium-retina" srcset="<?php echo (get_field('images')["web"]); ?>"
                media="(min-width: 768px) and (max-width: 1023px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 768px) and (max-width: 1023px) and (min-resolution: 192dpi)">
            <source data-image-size="small-retina" srcset="<?php echo (get_field('images')["mob"]); ?>"
                media="(max-width: 767px) and (-webkit-min-device-pixel-ratio: 2), (max-width: 767px) and (min-resolution: 192dpi)">
            <source data-image-size="small" srcset="<?php echo (get_field('images')["mob"]); ?>"
                media="(max-width: 767px)">
            <source data-image-size="medium" srcset="<?php echo (get_field('images')["web"]); ?>"
                media="(min-width: 768px) and (max-width: 1023px)">
            <source data-image-size="standard" srcset="<?php echo (get_field('images')["web"]); ?>"
                media="(min-width: 1024px)">
            <img data-image-type="fallback" srcset="<?php echo (get_field('images')["web"]); ?>" alt=""
                role="presentation" class="hero_-background-image-small hero_-background-image-small-top">
        </picture>
    </div>
    <div class="hero_-content-wrapper hero_-small-content-wrapper hero_-image-small-content-wrapper">
        <div class="hero_-content-centered">
            <h1 class="hero_-title">
                Contact us</h1>
        </div>
    </div>
</div>

<div class="content contact-us p-0 ">
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field" data-aos="fade-up">
                                        <h3>Contact Us</h3>
                                        <p class="">Feel Free to contact us any time. We will get back
                                            to you as soon as we
                                            can!.</p>
                                        <div>
                                            <?php echo do_shortcode('[contact-form-7 id="177" title="Contact Us"]'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="contact_info_sec" data-aos="fade-up">
                            <h4>Contact Info</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fa fa-phone"></i>
                                <span> <?php echo get_field('phone_number') ?></span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fa fa-mail-reply"></i>
                                <span>
                                    <?php echo get_field('email') ?>
                                </span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fa fa-map"></i>
                                <span> <?php echo get_field('location') ?>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4 data-aos="fade-up">Find Us on Google Map</h4>
                        <p data-aos="fade-up">
                            <?php echo get_field('map_short_text') ?>
                        </p>
                        <div class="map_bind">
                            <iframe src="<?php echo get_field('map_ember_url') ?>" width="100%" height="450"
                                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>