<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>

				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
					
					// Start loop
					while ( have_posts() ) : the_post();

						get_template_part( 'partials/page/layout' );

					endwhile;

				} ?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

		<?php do_action( 'ocean_display_sidebar' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>

<script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
<script language="JavaScript" type="text/javascript">
  TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
</script>