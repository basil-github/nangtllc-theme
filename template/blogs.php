<?php /* Template Name: Blogs */?>
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
                Blogs</h1>
        </div>
    </div>

</div>
<?php
$loop = new WP_Query(array('post_type' => 'post'));
if ($loop->have_posts()): ?>
    <div class="content contact-us p-0 ">
        <section id="blog" class="section section-sm">
            <div class="container">
                <div class="row">
                    <?php $count = 0; ?>
                    <?php while ($loop->have_posts()):
                        $loop->the_post(); ?>
                        <?php $count++; ?>
                        <article class="col-lg-4 col-md-6 mb-3 clearfix wow fadeInUp" data-tilt data-aos="fade-up"
                            data-aos-duration="<?php echo $count; ?>00ms">
                            <div class="post-block">
                                <div class="media-wrapper">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="amazing caves coverimage"
                                        class="w-100">
                                </div>
                                <div class="content">
                                    <h3><a href="blog.html">
                                            <?php the_title(); ?>
                                        </a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="btn btn-transparent" href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>

                </div>
            </div>
        </section>
    </div>
<?php endif; ?>
<?php get_footer(); ?>