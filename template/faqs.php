<?php /* Template Name: Faqs */?>
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
                FAQs</h1>
        </div>
    </div>

</div>
<div class="content contact-us p-0 ">
    <section class="contact_us">
        <div class="container my-5">
            <div class="text-center mb-5">
                <span class="text-secondary text-uppercase">Questions</span>
                <h1 class="text-capitalize font-weight-bold">Frequently Asked <span
                        style="color: #0d1e3287;">Questions</span>
                </h1>
            </div>
            <div class="row">
<?php
$loop = new WP_Query(array('post_type' => 'faqs'));
if ($loop->have_posts()): ?>
 <?php $count = 0; ?>
            <?php while ($loop->have_posts()):
                $loop->the_post(); ?>
                <?php $count++; ?>
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
                                        <h6 class="mb-3" style="font-weight: 600; font-size: 1.1rem;"><?php the_title(); ?></h6>
                                    </a>
                                    <p class="text-secondary" style="line-height: 2;"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile; ?>
            <?php endif; ?>

            </div>
        </div>
    </section>

</div>


 
</div>
<?php get_footer(); ?>