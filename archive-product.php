<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nadia_&_Naaz_Perfumes
 */

get_header();
$com = get_template_directory_uri() . '/images/com.jpeg';

?>
<style>
    .empty_state {
        position: relative;
        top: -20px;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .empty_state i {
        margin: auto;
        margin-bottom: 0px;
        font-size: 90px;
        color: #ccc;
    }

    .empty_state h3 {
        margin: 8px 0px;
        text-align: center;
        font-weight: normal;
    }

    .empty_state p {
        font-size: 14px;
        margin: 0px;
        color: #999;
        text-align: center;
    }

    .empty_state button {
        outline: none;
        border: none;
        border-radius: 3px;
        padding: 8px 8px;
        margin: 20px auto auto auto;
        width: 50%;
        max-width: 200px;
        background: #348ac7;
        color: white;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        font-size: 12px;
    }
</style>
<div class="hero_ hero_-small hero_-contact-us hero_-shopping-bag hero_-short">
    <div class="hero_-background-image-small-wrapper">
        <picture data-image-type="picture">
            <source data-image-size="standard-retina" srcset="<?php echo $com; ?>"
                media="(min-width: 1024px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 1024px) and (min-resolution: 192dpi)">
            <source data-image-size="medium-retina" srcset="<?php echo $com; ?>"
                media="(min-width: 768px) and (max-width: 1023px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 768px) and (max-width: 1023px) and (min-resolution: 192dpi)">
            <source data-image-size="small-retina" srcset="<?php echo $com; ?>"
                media="(max-width: 767px) and (-webkit-min-device-pixel-ratio: 2), (max-width: 767px) and (min-resolution: 192dpi)">
            <source data-image-size="small" srcset="<?php echo $com; ?>" media="(max-width: 767px)">
            <source data-image-size="medium" srcset="<?php echo $com; ?>"
                media="(min-width: 768px) and (max-width: 1023px)">
            <source data-image-size="standard" srcset="<?php echo $com; ?>" media="(min-width: 1024px)">
            <img data-image-type="fallback" srcset="<?php echo $com; ?>" alt="" role="presentation"
                class="hero_-background-image-small hero_-background-image-small-top">
        </picture>
    </div>
    <div class="hero_-content-wrapper hero_-small-content-wrapper hero_-image-small-content-wrapper">

        <div class="hero_-content-centered">
            <h1 class="hero_-title">
                <?php
                if (get_queried_object()->name == "product") {
                    echo ("All");
                } else {
                    echo (get_queried_object()->name);

                }
                ?>
            </h1>
        </div>
    </div>
</div>
<?php
$orderby = null;
if (isset($_GET["orderby"])) {
    $orderby = $_GET['orderby'];
}
?>

<div class="content">
    <div class="container pt-5">
        <div class="row">
            <?php
            if (have_posts()):
                ?>
                <div class="sorting_list_page woocommerce-ordering col-12">
                    <form method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" <?php echo $orderby == 'menu_order' ? 'selected="selected"' : '' ?>>
                                Default
                                sorting
                            </option>
                            <option value="date" <?php echo $orderby == 'date' ? 'selected="selected"' : '' ?>>
                                Latest</option>
                            <option value="price" <?php echo $orderby == 'price' ? 'selected="selected"' : '' ?>>
                                Price: low to high
                            </option>
                            <option value="price-desc" <?php echo $orderby == 'price-desc' ? 'selected="selected"' : '' ?>>
                                Price: high
                                to
                                low
                            </option>
                        </select>
                        <input type="hidden" name="paged" value="1">
                    </form>
                </div>
                <?php
                $inf = get_template_directory_uri() . '/images/inf.png';
                /* Start the Loop */
                while (have_posts()):
                    the_post();
                    $product = wc_get_product();
                    $fid = null;
                    $sid = null;
                    if (count($product->get_gallery_image_ids()) >= 1) {
                        $fid = $product->get_gallery_image_ids()[0];
                    }
                    if (count($product->get_gallery_image_ids()) >= 2) {
                        $sid = $product->get_gallery_image_ids()[1];
                    }
                    ?>
                    <a class="col-md-3 mb-3 col-6" href="<?php echo get_permalink() ?>">
                        <div class="slide-inner p-1">
                            <div class="product-card">
                                <div class="product-tumb">
                                    <?php if ($fid) { ?>
                                        <img class="first" src="<?php echo (wp_get_attachment_image_src($fid, 'full')[0]) ?>"
                                            alt="<?php echo get_the_title() ?>">
                                    <?php
                                    } else { ?>
                                        <img class="first" src="<?php echo $inf ?>" alt="<?php echo get_the_title() ?>">
                                    <?php
                                    } ?>
                                    <?php if ($sid) { ?>
                                        <img class="second" src="<?php echo (wp_get_attachment_image_src($sid, 'full')[0]) ?>"
                                            alt="<?php echo get_the_title() ?>">
                                    <?php
                                    } else { ?>
                                        <img class="second" src="<?php echo $inf ?>" alt="<?php echo get_the_title() ?>">
                                    <?php
                                    } ?>

                                </div>
                                <div class="product-details">
                                    <span class="product-catagory text-gray h6">
                                        <?php echo get_the_title() ?>
                                    </span>
                                    <div class="product-bottom-details">
                                        <div class="product-price">AED
                                            <?php echo $product->get_price() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php
                    //get_template_part('template-parts/content', get_post_type());
                endwhile;
                wp_reset_query();
                ?>

            <?php
            else:
                ?>
                <div class="empty_state text-center">
                    <i class="fa fa-frown-o" aria-hidden="true"></i>
                    <h3 class="">No product</h3>
                    <p>
                        There have been no product in
                        <?php
                        if (get_queried_object()->name == "product") {
                            echo ("All");
                        } else {
                            echo (get_queried_object()->name);

                        }
                        ?> yet
                    </p>
                    <a href="/collocations/" class="mt-3">
                        <span class=" button is-primary is-white border">
                            <span class="button__wrapper">
                                <span class="text-uppercase">Shop Now</span>
                            </span>
                        </span>
                    </a>
                </div>
            <?php
            endif;
            ?>
        </div>
        <div class="navigation_page">
            <?php
            the_posts_navigation();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();