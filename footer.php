<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Difference_Engine
 */

?>

	</div><!-- #content -->

	<!-- Footer -->

	<footer class="footer bg-blue">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-4 col-lg-2">
					<div class="footer-brand">
						<img src="<?= get_template_directory_uri() ?>/assets/images/DE_logo_square.svg">
					</div>
				</div>
				<div class="col-6 col-md-8 col-lg-3">
					<div class="footer-text">
						<p>
							284 River Valley Road<br>
							#01-01<br>
							Singapore 238325
						</p>
						<p>
							email@differenceengine.sg
						</p>
					</div>
					<div class="footer-social-links mt-4">
						<ul class="list-inline">
							<?php get_template_part( 'template-parts/social-url-icon') ?>
					</div>
				</div>
				<div class="col-sm-12 col-lg-7">
					<div class="form-bluebg">
						<h4>Subscribe to our newsletter</h4>
						<form class="form-subscription">
							<div class="form-row">
								<div class="col-6">
									<input type="text" class="form-control" placeholder="Full Name">
								</div>
								<div class="col-6">
								    <input type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
								    <div class="form-check">
								    	<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
										<label class="form-check-label" for="defaultCheck1">I've read and accept the <a class="link-animated after" href="#">terms and conditions.</a></label>
									</div>
								</div>
								<div class="col-12">
								    <button type="submit" class="btn btn--white btn-animated">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="row mt-4">
				<div class="col-12">
					<div class="footer-bottom">
						<p>All content copyright © & Trademarked TM 2018 Difference Engine or their respective owners. Image and its logos are ® and © 2018 Difference Engine. All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="row no-gutters">
		<div class="col-12 footer-border-mobile">
			<img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/DE_jumbotron_artmobile.jpg">
		</div>
		<div class="col-12 footer-border">
			<img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/DE_footer_img.png">
		</div>
	</div>
	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>