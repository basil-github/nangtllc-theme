<?php /* Template Name: Brands */?>
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
                Brands</h1>
        </div>
    </div>

</div>
<div class="content contact-us p-0 ">
    <div class="container py-5 brands">
        <div class="row">

            <?php
            $args = array(
                'taxonomy' => 'item',
            );
            $cats = get_categories($args);
            foreach ($cats as $cat) {
                ?>
                <a href="<?php echo get_category_link($cat->term_id) ?>" class="col-md-4 my-3 my-md-0 "
                    data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="brand " data-tilt>
                        <img src="<?php echo get_field('logo',$cat) ?>" alt="<?php echo $cat->name; ?>"/>
                        <h6 class="mt-2">
                            <?php echo $cat->name; ?>
                        </h6>
                        <p class="m-0 text-center"><?php echo $cat->description; ?></p>
                    </div>
                </a>
            <?php
            }
            ?>


        </div>
    </div>
</div>
<?php get_footer(); ?>