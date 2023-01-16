<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nadia_&_Naaz_Perfumes
 */

get_header();
?>
<style>
	#notfound {
		position: relative;
		height: 100vh
	}

	#notfound .notfound {
		position: absolute;
		left: 50%;
		top: 50%;
		-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%)
	}

	.notfound {
		max-width: 520px;
		width: 100%;
		line-height: 1.4;
		text-align: center
	}

	.notfound .notfound-404 {
		position: relative;
		height: 200px;
		margin: 0 auto 20px;
		z-index: -1
	}

	.notfound .notfound-404 h1 {
		font-family: montserrat, sans-serif;
		font-size: 236px;
		font-weight: 200;
		margin: 0;
		color: #051f31;
		text-transform: uppercase;
		position: absolute;
		left: 50%;
		top: 50%;
		-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%)
	}

	.notfound .notfound-404 h2 {
		font-family: montserrat, sans-serif;
		font-size: 28px;
		font-weight: 400;
		text-transform: uppercase;
		color: #051f31;
		background: #fff;
		padding: 10px 5px;
		margin: auto;
		display: inline-block;
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0
	}


	.notfound a:hover {
		color: #ff6300;
		background: #211b19
	}

	@media only screen and (max-width: 767px) {
		.notfound .notfound-404 h1 {
			font-size: 148px
		}
	}

	@media only screen and (max-width: 480px) {
		.notfound .notfound-404 {
			height: 148px;
			margin: 0 auto 10px
		}

		.notfound .notfound-404 h1 {
			font-size: 86px
		}

		.notfound .notfound-404 h2 {
			font-size: 16px
		}

		.notfound a {
			padding: 7px 15px;
			font-size: 14px
		}
	}
</style>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div id="notfound">
			<div class="notfound">
				<div class="notfound-404">
					<h1>Oops!</h1>
					<h2>404 - The Page can't be found</h2>
				</div>
				<a href="/">
					<span class="button is-primary is-white border">
						<span class="button__wrapper">
							<span class="text-uppercase">Home</span>
						</span>
					</span>
				</a>
			</div>
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();