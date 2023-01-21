<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Nadia_&_Naaz_Perfumes
 */

get_header();
$com = get_template_directory_uri() . '/images/com.jpeg';
?>
<style>
	.ch-masonry {
		column-count: 3;
		column-gap: 15px;
		padding: 0;
	}

	@media only screen and (max-width: 768px) {
		.ch-masonry {
			column-count: 2;
		}
	}

	@media only screen and (max-width: 371px) {
		.ch-masonry {
			column-count: 1;
		}
	}

	.ch-masonry__item {
		display: inline-block;
		margin: 0 0 15px;
		width: 100%;
		box-sizing: border-box;
	}
</style>
<div>
	<?php if (have_posts()): ?>
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
						Search results</h1>
				</div>
			</div>
		</div>
		<div class="content contact-us bg-light search_bar_com">
			<?php get_search_form(); ?>
		</div>
		<div class="content contact-us p-0 ">
			<section id="blog" class="section section-sm">
				<div class="container">
					<div class="ch-masonry">
						<div class="">
							<?php
							while (have_posts()):
								the_post();
								get_template_part('template-parts/content', 'search');
							endwhile; ?>
						</div>
					</div>

				</div>
			</section>
		</div>
	<?php
	else:
		get_template_part('template-parts/content', 'none');
	endif;
	?>
</div>

<?php get_footer(); ?>