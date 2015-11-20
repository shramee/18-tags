<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package eighteen-tags
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php eighteen_tags_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'eighteen_tags_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
		<div class="col-full">

			<?php
			/**
			 * @hooked eighteen_tags_skip_links - 0
			 * @hooked eighteen_tags_social_icons - 10
			 * @hooked eighteen_tags_site_branding - 20
			 * @hooked eighteen_tags_secondary_navigation - 30
			 * @hooked eighteen_tags_product_search - 40
			 * @hooked eighteen_tags_primary_navigation - 50
			 * @hooked eighteen_tags_header_cart - 60
			 */
			do_action( 'eighteen_tags_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked eighteen_tags_header_widget_region - 10
	 */
	do_action( 'eighteen_tags_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'eighteen_tags_content_top' ); ?>
