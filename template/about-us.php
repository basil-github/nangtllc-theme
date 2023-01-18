<?php /* Template Name: About us */?>
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
                About</h1>
        </div>
    </div>
</div>
<div class="content contact-us p-0 ">
    <section class="about-shot-info section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-20" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Our story</h2>
                    </div>
                    <?php echo get_field("our_story") ?>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up">
                    <img loading="lazy" class="img-fluid" src="<?php echo get_field("our_story_image") ?>"
                        alt="our_story">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade">
                    <div class="section-title">
                        <h2>our vision</h2>
                    </div>
                    <p>
                        <?php echo get_field("our_vision") ?>
                        <img loading="lazy" src="<?php echo get_field("our_vision_image") ?>" alt="our_vision"
                            class="img-fluid mt-3">
                </div>
                <div class="col-md-6 mt-5 mt-md-0" data-aos="fade">
                    <div class="section-title">
                        <h2>our Mission</h2>
                    </div>
                    <?php echo get_field("our_mission") ?>
                    <img loading="lazy" src="<?php echo get_field("our_mission_image") ?>" alt="our_mission"
                        class="img-fluid mt-3">
                </div>
            </div>
        </div>
    </section>
    <?php
    $loop = new WP_Query(array('post_type' => 'team'));
    if ($loop->have_posts()): ?>
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>our Team</h2>
                </div>

                <div class="row">
                    <?php $count = 0; ?>
                    <?php while ($loop->have_posts()):
                        $loop->the_post(); ?>
                        <?php $count++; ?>
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="<?php echo $count; ?>00">
                                <div class="member-img">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <?php
                                        $links = get_field("social_media");
                                        foreach ($links as $key => $value) {
                                            if ($value)
                                                echo "<a href='$value'><i class='fa fa-$key'></i></a>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>
                                        <?php the_title(); ?>
                                    </h4>
                                    <span>
                                        <b>
                                            <?php echo get_field("designtion") ?>
                                        </b>
                                    </span>
                                    <span class="quat_">
                                        <?php echo get_field("slogan") ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>

            </div>
        </section><!-- End Team Section -->
    <?php endif; ?>

</div>
<?php get_footer(); ?>