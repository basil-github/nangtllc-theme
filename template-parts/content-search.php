<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nadia_&_Naaz_Perfumes
 */

?>
<article class="ch-masonry__item   clearfix wow fadeInUp">
	<a href="<?php the_permalink(); ?>">
		<div class="post-block">
			<?php if (get_the_post_thumbnail_url()) { ?>
				<div class="media-wrapper">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100">
				</div>
			<?php
			}
			?>
			<div class="content">
				<h3>
					<?php the_title(); ?>
				</h3>
				<p>
					<?php the_excerpt(); ?>
				</p>


			</div>
		</div>
	</a>
</article>