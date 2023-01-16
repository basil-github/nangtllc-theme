<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nadia_&_Naaz_Perfumes
 */

get_header();
?>

<main id="primary" class="site-main">
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
					Blog's</h1>
			</div>
		</div>
	</div>
	<div class="content contact-us p-0 ">
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1>
							<?php echo get_the_title(); ?>
						</h1>
						<ul class="list-inline mb-5">
							<li class="list-inline-item"><?php echo get_the_date(); ?></li>
						</ul>
						<img class="img-fluid mb-5" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blog-image">
					</div>
					<div class="col-lg-12">
						<?php echo get_the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	</div>


</main><!-- #main -->

<?php get_footer();