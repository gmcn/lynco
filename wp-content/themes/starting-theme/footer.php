<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>

		<div class="container-fluid footer__main">
			<div class="row">
				<div class="col-md-6 wow fadeInLeft">
					<div class="row">

						<div class="col-md-4 menu">

							<!-- <h4>Info</h4>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-menu-1', ) );
								?> -->

								<?php dynamic_sidebar( 'footer_area_1' ); ?>

						</div><!-- /.col-md-4 -->

						<div class="col-md-4 menu">

							<!-- <h4>Browse By</h4>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-menu-2', ) );
								?> -->

								<?php dynamic_sidebar( 'footer_area_2' ); ?>

						</div><!-- /.col-md-4 -->

						<div class="col-md-4 social">
							<h4>Social Links</h4>
							<a class="social" href="https://www.linkedin.com/company/lynco/" target="_blank">
	              <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Follow Us On Linkedin"  />
	            </a>
							<a class="social" href="https://www.instagram.com/lyncoltd/" target="_blank">
	              <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Follow Us On Instagram" />
	            </a>
						</div><!-- /.col-md-4 -->

				</div>
			</div>
				<div class="col-md-6 newsletter  wow fadeInRight">
					<h4>Newsletter</h4>

					<div class="row">
						<div class="col-sm-8">
							<!-- Begin MailChimp Signup Form -->
							<form action="https://cornellstudios.us15.list-manage.com/subscribe/post?u=88cfac5a1e76526e911ea14c8&amp;id=3d91ee4506" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
								<div class="form-group">
									<label class="required" for="mce-FNAME">Name <span class="asterisk">*</span></label>
									<input type="text" value="" name="FNAME" class="form-control required" id="mce-FNAME" required>
								</div>

								<div class="form-group">
									<label class="required" for="mce-EMAIL">Email Address <span class="asterisk">*</span>
									</label>
									<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" required>
								</div>

						</div>

						<div class="col-sm-4">

							<div class="form-group">
								VIEW OUR <a href="/privacy-policy">DATA POLICY</a>
							</div>

							<div class="form-group">
							    <input type="checkbox" value="1" name="group[6131][1]" id="mce-group[6131]-6131-0" required><label for="mce-group[6131]-6131-0"> Please tick this if you would like us to contact you by email.</label>
							</div>

							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_88cfac5a1e76526e911ea14c8_3d91ee4506" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

							</form>
							<!--End mc_embed_signup-->
						</div>
					</div>

				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->

		<div class="container-fluid signature">

			<div class="row">
				<div class="col-md-4 copyright wow fadeInLeft">
					© LYNCO LTD <?php echo date('Y'); ?>  |  <a href="cookie-policy">Cookie Policy</a>  |  <a href="privacy-policy">Privacy Policy</a>
				</div>
				<div class="col-md-4 footer__logo hidden-xs wow fadeInUp">
					<a href="/"><img class="footer__branding" src="<?php echo get_template_directory_uri(); ?>/images/lynco-footer-logo.png" alt="<?php bloginfo( 'name' ); ?>"  /></a>
					<a href="/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-icon.png" alt="<?php bloginfo( 'name' ); ?>"  /></a>
				</div>
				<div class="col-md-4 byline wow fadeInRight">
					Website by <a href="https://cornellstudios.com/" target="_blank">Cornell</a>
				</div>
			</div>

		</div>



	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
