<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nadia_&_Naaz_Perfumes
 */

get_header();

$product = wc_get_product();
$url = isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<style>
    .card {
        background-color: #fff;
        padding: 14px;
        border: none
    }

    strong {
        font-weight: bold;
    }

    #lightSlider li {}

    .demo {
        width: 100%
    }

    ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom: 0
    }

    li {
        display: block;
        float: left;
        margin-right: 6px;
        cursor: pointer
    }

    img {
        display: block;
        height: auto;
        width: 100%
    }

    .stars i {
        color: #f6d151
    }

    .stars span {
        font-size: 13px
    }

    hr {
        color: #d4d4d4
    }

    .badge {
        padding: 5px !important;
        padding-bottom: 6px !important
    }

    .badge i {
        font-size: 10px
    }

    .profile-image {
        width: 35px
    }

    .comment-ratings i {
        font-size: 13px
    }

    .username {
        font-size: 12px
    }

    .comment-profile {
        line-height: 17px
    }

    .date span {
        font-size: 12px
    }

    .p-ratings i {
        color: #f6d151;
        font-size: 12px
    }

    .btn-long {
        padding-left: 35px;
        padding-right: 35px
    }

    .buttons {
        margin-top: 15px
    }

    .buttons .btn {
        height: 46px
    }

    .buttons .cart {
        border-color: #ff7676;
        color: #051f31d9
    }

    .buttons .cart:hover {
        background-color: #e86464 !important;
        color: #fff
    }

    .buttons .buy {
        color: #fff;
        background-color: #051f31d9;
        border-color: #051f31d9
    }

    .buttons .buy:focus,
    .buy:active {
        color: #fff;
        background-color: #051f31d9;
        border-color: #ff7676;
        box-shadow: none
    }

    .buttons .buy:hover {
        color: #051f31d9;
        background-color: #fff;
        border-color: #051f31d9
    }

    .buttons .wishlist {
        background-color: #fff;
        border-color: #051f31d9;
        color: #051f31d9
    }

    .buttons .wishlist:hover {
        background-color: #051f31d9;
        border-color: #051f31d9;
        color: #051f31d9
    }

    .buttons .wishlist:hover {
        color: #fff
    }

    .buttons .wishlist i {
        color: #051f31d9;
        font-size: 22px;
    }

    .comment-ratings i {
        color: #f6d151
    }

    .followers {
        font-size: 9px;
        color: #d6d4d4
    }

    .store-image {
        width: 42px
    }

    .dot {
        height: 10px;
        width: 10px;
        background-color: #051f31d9;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px
    }

    .bullet-text {
        font-size: 12px
    }

    .my-color {
        margin-top: 10px;
        margin-bottom: 10px
    }

    label.radio {
        cursor: pointer
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }



    .card-body {
        padding: 0.3rem 0.3rem 0.2rem
    }

    .product-thumbs .swiper-slide img {
        border: 2px solid transparent;
        object-fit: cover;
        cursor: pointer;
    }

    .product-thumbs .swiper-slide-active img {
        border-color: #051f31d9 !important;
    }

    .product-slider .swiper-button-next:after,
    .product-slider .swiper-button-prev:after {
        font-size: 20px;
        color: #000;
        font-weight: bold;
    }






    /* Popup Styling */
    .img-popup {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #000000c9;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
        z-index: 99999999;

    }

    .img-popup img {
        max-width: 900px;
        width: 100%;
        opacity: 0;
        transform: translateY(-100px);
        -webkit-transform: translateY(-100px);
        -moz-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        -o-transform: translateY(-100px);
    }

    .close-btn {
        width: 35px;
        height: 30px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }

    .close-btn .bar {
        height: 4px;
        background: #333;
    }

    .close-btn .bar:nth-child(1) {
        transform: rotate(45deg);
    }

    .close-btn .bar:nth-child(2) {
        transform: translateY(-4px) rotate(-45deg);
    }

    .opened {
        display: flex;
    }

    .opened img {
        animation: animatepopup 1s ease-in-out .8s;
        -webkit-animation: animatepopup .3s ease-in-out forwards;
    }

    @keyframes animatepopup {

        to {
            opacity: 1;
            transform: translateY(0);
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
        }

    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Enquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="213" title="Product Enquiry"]'); ?>
            </div>
        </div>
    </div>
</div>
<div class="img-popup">
    <img src="" alt="Popup Image">
    <div class="close-btn">
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
</div>
<div class="container mt-2 mb-3 pt-5">
    <div class="row no-gutters pt-5">
        <div class="col-md-5 pr-2">
            <div class="card">
                <div class="demo">
                    <div class="product-left mb-5">
                        <div class="swiper-container product-slider mb-3">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($product->get_gallery_image_ids() as $value) {
                                    $src = wp_get_attachment_image_src($value, 'full')[0];
                                    echo "<div class='swiper-slide container__img-holder' data-toggle='modal' data-target='#$value'>
                                    <img src='$src'
                                        alt='$value' class='img-fluid border'>
                                </div>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="swiper-container product-thumbs">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($product->get_gallery_image_ids() as $value) {
                                    $src = wp_get_attachment_image_src($value)[0];
                                    echo "<div class='swiper-slide'>
                                    <img src='$src'
                                        alt='$value' class='img-fluid border'>
                                </div>";
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card mt-2">
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">

                <div class="about"> <span class="font-weight-bold">
                        <?php echo $product->get_title(); ?>
                    </span>

                    <h4 class="font-weight-bold">AED <?php echo $product->get_price(); ?></h4>
                    <div class="buttons">
                        <?php if (get_field("amazon_url")) { ?>
                            <a target="_blank" href="<?php echo get_field("amazon_url") ?>">
                                <button class="btn btn-warning btn-long buy">
                                    <i class="fa fa-amazon mr-2"></i>Buy Now
                                </button>
                            </a>
                        <?php
                        } ?>
                        <button class="btn btn-light wishlist" type="button" data-toggle="modal"
                            data-target="#exampleModal">
                            Enquiry
                        </button>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?phone=<?php echo get_option('wp_link'); ?>&text=I%20recently%20came%20across%20your%20website%20and%20I%20was%20impressed%20by%20the%20selection%20of%20perfumes%20you%20have%20available.%20I%20am%20particularly%20interested%20in%20your%20%27<?php echo $product->get_title(); ?>%27%20fragrance.<?php echo $url; ?>">
                            <button class="btn btn-light wishlist">
                                <i class="fa fa-whatsapp"></i>
                            </button>
                        </a>
                    </div>
                    <hr>
                </div>

                <div class="product-description">

                    <div class="mt-2">
                        <?php if ($product->get_description()) { ?>
                            <span class="font-weight-bold">Description</span>
                        <?php }
                        ?>
                        <p>
                            <?php echo $product->get_description(); ?>
                        </p>
                        <p>
                            <?php if (get_field("notes")["top"]) { ?>
                                <strong>Top Notes:</strong>
                                <?php echo get_field("notes")["top"] ?>
                                <br>
                            <?php
                            } ?>
                            <?php if (get_field("notes")["middle"]) { ?>
                                <strong>Middle Notes:</strong>
                                <?php echo get_field("notes")["middle"] ?>
                                <br>
                            <?php
                            } ?>
                            <?php if (get_field("notes")["base"]) { ?>
                                <strong>Base Notes:</strong>
                                <?php echo get_field("notes")["base"] ?>
                                <br>
                            <?php
                            } ?>
                        </p>
                        <div class="bullets">
                            <?php if (get_field("notes")["base"]) { ?>
                                <div class="d-flex align-items-center">
                                    <span class="dot"></span>
                                    <span class="bullet-text">
                                        <?php echo get_field("volume") ?> ML
                                    </span>
                                </div>
                            <?php
                            } ?>

                        </div>
                    </div>

                </div>
            </div>
            <div class="card mt-2 d-none"> <span>Similar items:</span>
                <div class="similar-products mt-2 d-flex flex-row">
                    <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src=""
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">$1,999</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-hero position-relative" style="overflow: hidden;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <span class="text-secondary text-uppercase" data-aos="fade-up" data-aos-duration="800ms">YOU MAY
                        ALSO LIKE

                    </span>

                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="swiper-prod-next"></div>
        <div class="swiper-prod-prev"></div>
        <div class="swiper-product ">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10,
                    'post__not_in' => array($post->ID),
                );

                $loop = new WP_Query($args);

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
                    $inf = get_template_directory_uri() . '/images/inf.png';
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
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    $("#dynamicInput")[0].value = "I recently came across your website and I was impressed by the selection of perfumes you have available. I am particularly interested in your '<?php echo $product->get_title(); ?>' fragrance.<?php echo $url; ?>"
    if ($(".product-left").length) {
        var productSlider = new Swiper('.product-slider', {
            spaceBetween: 0,
            centeredSlides: false,
            loop: false,
            direction: 'horizontal',
            loopedSlides: 5,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            resizeObserver: true,
        });
        var productThumbs = new Swiper('.product-thumbs', {
            spaceBetween: 0,
            centeredSlides: true,
            loop: false,
            slideToClickedSlide: true,
            direction: 'horizontal',
            slidesPerView: 5,
            loopedSlides: 5,
        });
        productSlider.controller.control = productThumbs;
        productThumbs.controller.control = productSlider;
    }
    $(document).ready(function () {

        // required elements
        var imgPopup = $('.img-popup');
        var imgCont = $('.container__img-holder');
        var popupImage = $('.img-popup img');
        var closeBtn = $('.close-btn');

        // handle events
        imgCont.on('click', function () {
            var img_src = $(this).children('img').attr('src');
            imgPopup.children('img').attr('src', img_src);
            imgPopup.addClass('opened');
        });

        $(imgPopup, closeBtn).on('click', function () {
            imgPopup.removeClass('opened');
            imgPopup.children('img').attr('src', '');
        });

        popupImage.on('click', function (e) {
            e.stopPropagation();
        });

    });
    const swiperPo = new Swiper('.swiper-product', {
        speed: 400,
        slidesPerView: 4,
        loop: true,
        autoplay: {
            delay: 6500,
            disableOnInteraction: false,
        }, navigation: {
            nextEl: '.swiper-prod-next',
            prevEl: '.swiper-prod-prev',
        },
        spaceBetween: 10,
        watchSlidesProgress: true,
        breakpoints: {
            1281: {
                slidesPerView: 3,
            }, 1076: {
                slidesPerView: 2.5,
            },
            640: {
                slidesPerView: 2,
            }
        }

    });
</script>