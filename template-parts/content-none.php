<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nadia_&_Naaz_Perfumes
 */
$com = get_template_directory_uri() . '/images/com.jpeg';

?>
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
				Nothing Found</h1>
		</div>
	</div>
</div>
<div class="content contact-us bg-light search_bar_com">
	<?php get_search_form(); ?>
</div><!-- .page-content -->
<?php
get_footer();