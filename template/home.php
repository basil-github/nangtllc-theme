<?php /* Template Name: Home */?>
<?php get_header(); ?>
<section class="hero-slider hero-style">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php $home_slider = get_field('home_slider');
            foreach ($home_slider as $value) { ?>
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $value["image"] ?>">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 data-aos="fade-up">
                                    <?php echo $value["title"] ?>
                                </h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p data-aos="fade-up" data-aos-duration="800ms">
                                    <?php echo $value["short_text"] ?>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="<?php echo $value["link"] ?>">
                                    <span class="button is-primary is-white" data-aos="fade-up" data-aos-duration="900ms">
                                        <span class="button__wrapper">
                                            <span class="text-uppercase">Shop Now</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<div class="section-hero position-relative" style="overflow: hidden;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <span class="text-secondary text-uppercase" data-aos="fade-up" data-aos-duration="800ms">MUST
                        HAVE
                    </span>
                    <h1 class="text-uppercase font-weight-bold" data-aos="fade-up" data-aos-duration="800ms">LATEST
                        <span style="color: #0d1e3287;">COLLECTIONS</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="swiper-prod-next"></div>
        <div class="swiper-prod-prev"></div>
        <div class="swiper-product ">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10,
                );

                $loop = new WP_Query($args);
                $inf = get_template_directory_uri() . '/images/inf.png';

                while ($loop->have_posts()):
                    $loop->the_post();
                    $product = wc_get_product();
                    $fid = null;
                    $sid = null;
                    if (count($product->get_gallery_image_ids()) >= 1) {
                        $fid = $product->get_gallery_image_ids()[0];
                    }
                    if (count($product->get_gallery_image_ids()) >= 2) {
                        $sid = $product->get_gallery_image_ids()[1];
                    }

                    echo '<a class="swiper-slide" href="' . get_permalink() . '">
                    <div class="slide-inner p-1">
                        <div class="product-card">
                            <div class="product-tumb">                               
                              <img class="first" src="' . (($sid) ? wp_get_attachment_image_src($sid, 'full')[0] : $inf) . '" alt="">
                              <img class="second" src="' . (($fid) ? wp_get_attachment_image_src($fid, 'full')[0] : $inf) . '" alt="">
                            </div>
                            <div class="product-details">
                                <span class="product-catagory text-gray h6"> ' . get_the_title() . ' </span>
                                <div class="product-bottom-details">
                                    <div class="product-price">AED ' . $product->get_price() . '</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>';
                endwhile;
                wp_reset_query();
                ?>



            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->

        </div>

        <div class="row  pt-5">
            <div class="col-12">
                <div class="text-center mb-5">
                    <span class="button is-primary is-white border">
                        <span class="button__wrapper">
                            <span class="text-uppercase">Shop Now</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>


</div>
<section class="video_player">
    <img src="<?php echo get_field('youtube_video')["thumbnail"] ?>" />
    <div class="play_btn" data-toggle="modal" data-target="#videoModal">
        <i class="fa fa-play" aria-hidden="true"></i>
    </div>
</section>
<div class="modal fade hom_e" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-muted"><i class="fa fa-times" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="hs-responsive-embed-youtube">
                    <iframe src="<?php echo get_field('youtube_video')["video_embed_url"] ?>" frameborder="0"
                        allowfullscreen=""></iframe>
                </div>
            </div>

        </div>
    </div>
</div>
<?php echo get_the_content(); ?>
<section class="section p-0" id="about">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 order-2">
                <img class="img-fluid" src="<?php echo get_field('about')["image"] ?>"
                    alt="<?php echo get_field('about')["small_title"] ?>">
            </div>
            <div class="col-lg-6">
                <div class="content-block p-5">
                    <div class="text-left mb-1" data-aos="fade-up" data-aos-duration="800ms">
                        <span class="text-secondary text-uppercase">
                            <?php echo get_field('about')["small_title"] ?>
                        </span>
                        <h1 class="text-uppercase font-weight-bold">
                            <?php echo get_field('about')["long_text"] ?>
                        </h1>
                    </div>
                    <?php echo get_field('about')["description"] ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?php echo (get_field('about')["sub_content"]["title"]); ?>
                                    </h4>
                                    <p>
                                        <?php echo (get_field('about')["sub_content"]["description_"]); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?php echo (get_field('about')["sub_content_two"]["title"]); ?>
                                    </h4>
                                    <p>
                                        <?php echo (get_field('about')["sub_content_two"]["description_"]); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-text"
    style="background-image: url(<?php echo (get_field('collections')["first"]["image"]); ?>);">
    <div class="container">
        <div class="text-center ">
            <span class="text-light text-uppercase" data-aos="fade-up" data-aos-duration="800ms">
                <?php echo (get_field('collections')["first"]["small_title"]); ?>
            </span>
            <h1 class="text-light text-uppercase font-weight-bold" data-aos="fade-up" data-aos-duration="800ms">
                <?php echo (get_field('collections')["first"]["title"]); ?>
            </h1>
            <a href="<?php echo (get_field('collections')["first"]["link"]); ?>">
                <span class="button is-primary is-white">
                    <span class="button__wrapper">
                        <span class="text-uppercase">Shop Now</span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</section>
<section class="arrival_section section-hero p-0">
    <div class="container">
        <div class="box">
            <div class="arrival_bg_box" data-aos="fade-left" data-aos-duration="500ms">
                <img src="<?php echo get_field('new_arrival')["image"] ?>" alt="arrival">
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-duration="500ms">
                    <div class="heading_container remove_line_bt">
                        <div class="">
                            <span class="text-secondary text-uppercase">Products</span>
                            <h1 class="text-uppercase font-weight-bold">NEW <span
                                    style="color: #0d1e3287;">Arrival</span>
                            </h1>
                        </div>
                    </div>
                    <p style="margin-top: 20px;margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="600ms">
                        <?php echo get_field('new_arrival')["description"] ?>
                    </p>
                    <a href="<?php echo get_field('new_arrival')["link"] ?>">
                        <span class="button is-primary is-white border">
                            <span class="button__wrapper">
                                <span class="text-uppercase">Shop Now</span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-text"
    style="background-image: url(<?php echo (get_field('collections')["second"]["image"]); ?>);">
    <div class="container">
        <div class="text-center ">
            <span class="text-light text-uppercase" data-aos="fade-up" data-aos-duration="800ms">
                <?php echo (get_field('collections')["second"]["small_title"]); ?>
            </span>
            <h1 class="text-light text-uppercase font-weight-bold" data-aos="fade-up" data-aos-duration="800ms">
                <?php echo (get_field('collections')["second"]["title"]); ?>
            </h1>
            <a href="<?php echo (get_field('collections')["second"]["link"]); ?>">
                <span class="button is-primary is-white">
                    <span class="button__wrapper">
                        <span class="text-uppercase">Shop Now</span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</section>
<section class="row pt-5 m-0 w-100">
    <?php $home_slider = get_field('home_grid');
    foreach ($home_slider as $value) { ?>
        <div class="col-md-4 mb-4 position-relative image_cards_list_main" data-aos="fade-up" data-aos-duration="1s">
            <div class="position-relative ">
                <img class="w-100 image_cards_list_img " src="<?php echo $value["image"] ?>" />
                <div class="list_overlay"></div>
            </div>
            <div class="text-left image_cards_list">
                <span class="text-light text-uppercase">
                    <?php echo $value["short_text"] ?>
                </span>
                <h1 class="text-light text-uppercase font-weight-bold">
                    <?php echo $value["title"] ?>
                </h1>
                <a href="<?php echo $value["link"] ?>">
                    <span class="button is-primary is-white" data-aos="fade-up" data-aos-duration="900ms">
                        <span class="button__wrapper">
                            <span class="text-uppercase">Shop Now</span>
                        </span>
                    </span>
                </a>
            </div>
        </div>

    <?php
    } ?>

</section>
<?php
$loop = new WP_Query(array('post_type' => 'post'));
if ($loop->have_posts()): ?>

    <section id="blog" class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->

                    <div class="text-center mb-5">
                        <span class="text-secondary text-uppercase">Blog's</span>
                        <h1 class="text-uppercase font-weight-bold">Latest <span style="color: #0d1e3287;">Posts</span>
                        </h1>
                    </div>
                    <!-- /section title -->
                </div>

                <?php $count = 0; ?>
                <?php while ($loop->have_posts()):
                    $loop->the_post(); ?>
                    <?php $count++; ?>
                    <?php if ($count < 3): ?>
                        <article class="col-lg-4 col-md-6 mb-3 wow fadeInUp" data-tilt data-aos="fade-up" data-aos-duration="500ms">
                            <div class="post-block">
                                <div class="media-wrapper">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                        class="img-fluid">
                                </div>
                                <div class="content">
                                    <h3><a href="blog.html">
                                            <?php the_title(); ?>
                                        </a></h3>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a class="btn btn-transparent" href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </article>
                    <?php else: ?>
                    <?php endif; ?>
                <?php endwhile; ?>

                <div class="col-12">
                    <div class="all-post text-center">
                        <a href="/blogs">
                            <span class="button is-primary is-white border">
                                <span class="button__wrapper">
                                    <span class="text-uppercase">View All Post</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->
<?php endif; ?>
<?php
$loop = new WP_Query(array('post_type' => 'faqs'));
if ($loop->have_posts()): ?>
    <div class="container my-5">
        <div class="text-center mb-5">
            <span class="text-secondary text-uppercase">Questions</span>
            <h1 class="text-uppercase font-weight-bold">Frequently Asked <span style="color: #0d1e3287;">Questions</span>
            </h1>
        </div>

        <div class="row">
            <?php $count = 0; ?>
            <?php while ($loop->have_posts()):
                $loop->the_post(); ?>
                <?php $count++; ?>
                <?php if ($count < 4): ?>
                    <div class="col-md-6">
                        <div class="my-3 p-4 bg-light">
                            <div class="d-flex align-items-start">
                                <div class="mr-3 bg-dark text-white rounded-circle">
                                    <svg fill="currentColor" width="24px" height="24px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g data-name="Layer 2">
                                            <g data-name="menu-arrow">
                                                <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                                                <path
                                                    d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z" />
                                                <circle cx="12" cy="19" r="1" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="">
                                    <a href="#" class="text-dark stretched-link">
                                        <h6 class="mb-3" style="font-weight: 600; font-size: 1.1rem;">
                                            <?php the_title(); ?>
                                        </h6>
                                    </a>
                                    <p class="text-secondary" style="line-height: 2;">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="text-center mb-5">
        <a class="text-center" href="/faqs">
            <span class="button is-primary is-white border">
                <span class="button__wrapper">
                    <span class="text-uppercase"> More?</span>
                </span>
            </span>
        </a>
    </div>

    </div>
<?php endif; ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/home-slider.js"></script>