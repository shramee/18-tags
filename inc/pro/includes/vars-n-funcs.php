<?php
/**
 * Created by PhpStorm.
 * User: Shramee Srivastav <shramee.srivastav@gmail.com>
 * Date: 3/5/15
 * Time: 7:53 PM
 */

/**
 * Supported control types
 * * text
 * * checkbox
 * * radio (requires choices array in $args)
 * * select (requires choices array in $args)
 * * dropdown-pages
 * * textarea
 * * color
 * * image
 * * sf-text
 * * sf-heading
 * * sf-divider
 *
 * sf- prefixed controls are arbitrary storefront controls
 *
 * NOTE : sf-text control doesn't show anything if description is not set but
 * in Storefront_Pro_Customizer_Fields class we assign it to label
 * if not set ;)
 *
 */
$storefront_pro_customizer_fields = array(
	//Primary Nav
	array(
		'id'      => 'nav-style',
		'label'   => 'Navigation Style',
		'section' => 'Primary Navigation',
		'type'    => 'select',
		'choices' => array(
			'' => 'Default',
			'right' => 'Align right',
			'center' => 'Centered',
			'center-inline' => 'Centred inline logo',
		),
	),
	array(
		'id'      => 'pri-nav-font',
		'label'   => 'Font',
		'section' => 'Primary Navigation',
		'type'    => 'font',
	),
	array(
		'id'      => 'pri-nav-text-size',
		'label'   => 'Text size',
		'section' => 'Primary Navigation',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'pri-nav-letter-spacing',
		'label'   => 'Letter spacing',
		'section' => 'Primary Navigation',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => -2,
			'max'   => 10,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'pri-nav-font-style',
		'label'   => 'Font style',
		'section' => 'Primary Navigation',
		'type'    => 'multi-checkbox',
		'choices' => array(
			'bold' => 'Bold',
			'italic' => 'Italic',
			'underline' => 'Underline',
			'uppercase' => 'Uppercase',
		),
	),
	array(
		'id'        => 'pri-nav-text-color',
		'label'     => 'Text color',
		'section'   => 'Primary Navigation',
		'type'      => 'color',
	),
	array(
		'id'        => 'pri-nav-active-link-color',
		'label'     => 'Active link color',
		'section'   => 'Primary Navigation',
		'type'      => 'color',
	),
	array(
		'id'        => 'pri-nav-bg-color',
		'label'     => 'Background color',
		'section'   => 'Primary Navigation',
		'type'      => 'alpha-color',
	),
	array(
		'id'        => 'pri-nav-dd-bg-color',
		'label'     => 'Drop down menu background color',
		'section'   => 'Primary Navigation',
		'type'      => 'alpha-color',
	),
	array(
		'id'        => 'pri-nav-dd-text-color',
		'label'     => 'Drop down menu text color',
		'section'   => 'Primary Navigation',
		'type'      => 'color',
	),
	array(
		'id'      => 'pri-nav-dd-animation',
		'label'   => 'Drop down menu animation',
		'section' => 'Primary Navigation',
		'type'    => 'select',
		'choices' => array(
			''       => 'Default',
			'fade'   => 'Fade',
			'expand' => 'Expand',
			'slide'  => 'Slide',
			'flip'   => 'Flip',
		),
	),
	array(
		'id'      => 'pri-nav-height',
		'label'   => 'Menu height',
		'section' => 'Primary Navigation',
		'type'    => 'range',
		'default' => 1,
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 2.5,
			'step'  => 0.1,
		),
	),
	array(
		'id'      => 'remove-search-icon',
		'label'   => 'Remove search icon from nav',
		'section' => 'Primary Navigation',
		'type'    => 'checkbox',
	),

	//Secondary Nav
	array(
		'id'      => 'sec-nav-full',
		'label'   => 'Make full width',
		'section' => 'Secondary Navigation',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'sec-nav-font',
		'label'   => 'Font',
		'section' => 'Secondary Navigation',
		'type'    => 'font',
	),
	array(
		'id'      => 'sec-nav-text-size',
		'label'   => 'Text size',
		'section' => 'Secondary Navigation',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
		'default' => '',
	),
	array(
		'id'      => 'sec-nav-letter-spacing',
		'label'   => 'Letter spacing',
		'section' => 'Secondary Navigation',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => -2,
			'max'   => 10,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'sec-nav-font-style',
		'label'   => 'Font style',
		'section' => 'Secondary Navigation',
		'type'    => 'multi-checkbox',
		'choices' => array(
			'bold' => 'Bold',
			'italic' => 'Italic',
			'underline' => 'Underline',
			'uppercase' => 'Uppercase',
		),
	),
	array(
		'id'        => 'sec-nav-bg-color',
		'label'     => 'Background color',
		'section'   => 'Secondary Navigation',
		'type'      => 'alpha-color',
	),
	array(
		'id'        => 'sec-nav-text-color',
		'label'     => 'Text color',
		'section'   => 'Secondary Navigation',
		'type'      => 'color',
	),
	array(
		'id'        => 'sec-nav-active-link-color',
		'label'     => 'Active link color',
		'section'   => 'Secondary Navigation',
		'type'      => 'color',
	),
	array(
		'id'        => 'sec-nav-dd-bg-color',
		'label'     => 'Drop down menu background color',
		'section'   => 'Secondary Navigation',
		'type'      => 'alpha-color',
	),
	array(
		'id'        => 'sec-nav-dd-text-color',
		'label'     => 'Drop down menu text color',
		'section'   => 'Secondary Navigation',
		'type'      => 'color',
	),

	//Header Elements
	array(
		'id'        => 'logo',
		'label'     => 'Logo',
		'section'   => 'existing_header_image',
		'type'      => 'image',
		'priority'  => 1,
	),
	array(
		'id'      => 'logo-max-height',
		'label'   => 'Logo max height',
		'section' => 'existing_header_image',
		'type'    => 'range',
		'default' => 75,
		'priority'  => 1,
		'input_attrs' => array(
			'min'   => 50,
			'max'   => 250,
			'step'  => 1,
		),
	),
	array(
		'id'        => 'phone-num',
		'label'     => 'Phone Number',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'email',
		'label'     => 'Email',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'facebook',
		'label'     => 'Facebook profile URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'twitter',
		'label'     => 'Twitter profile URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'googleplus',
		'label'     => 'Google+ profile URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'linkedin',
		'label'     => 'Linked in profile URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'instagram',
		'label'     => 'Instagram profile URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'pinterest',
		'label'     => 'Pinterest profile URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'        => 'youtube',
		'label'     => 'Youtube channel URL',
		'section'   => 'existing_header_image',
		'type'      => 'text',
	),
	array(
		'id'      => 'align-social-info',
		'label'   => 'Align social icons and contact info',
		'section' => 'existing_header_image',
		'type'    => 'select',
		'choices' => array(
			'' => 'Left',
			'right' => 'Right',
			'center' => 'Center',
		),
	),
	array(
		'id'      => 'search-post_type',
		'label'   => 'Post types to search',
		'section' => 'existing_header_image',
		'type'    => 'select',
		'default' => 'post,page',
		'choices' => array(
			'post,page' => 'Posts and Pages',
			'product'    => 'Products',
		),
	),
	array(
		'id'      => 'header-wc-cart',
		'label'   => 'Cart location',
		'section' => 'existing_header_image',
		'type'    => 'select',
		'choices' => array(
			''     => 'Primary nav',
			'_sec' => 'Secondary nav',
			'hide' => 'Hide',
		),
	),
	array(
		'id'      => 'header-wc-cart-color',
		'label'   => 'Cart text color',
		'section' => 'existing_header_image',
		'type'    => 'color',
		'default' => '#ffffff',
	),
	array(
		'id'      => 'header-sticky',
		'label'   => 'Make sticky?',
		'section' => 'existing_header_image',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'header-bg-color',
		'label'   => 'Header Background Color',
		'section' => 'existing_header_image',
		'type'    => 'alpha-color',
		'default' => apply_filters( 'storefront_default_header_background_color', '#2c2d33' ),
	),

	//Content
	array(
		'id'      => 'hide-link-focus-outline',
		'label'   => 'Hide accessibility box around active links',
		'section' => 'Content Elements',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'hide-wc-breadcrumbs-pages',
		'label'   => 'Hide breadcrumbs on pages',
		'section' => 'Content Elements',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'hide-wc-breadcrumbs-posts',
		'label'   => 'Hide breadcrumbs on posts',
		'section' => 'Content Elements',
		'type'    => 'checkbox',
		'default' => true,
	),
	array(
		'id'      => 'hide-wc-breadcrumbs-archives',
		'label'   => 'Hide breadcrumbs on archives',
		'section' => 'Content Elements',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'hide-page-title',
		'label'   => 'Hide page title',
		'section' => 'Content Elements',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'hide-hr',
		'label'   => 'Hide horizontal lines',
		'section' => 'Content Elements',
		'type'    => 'checkbox',
	),
	array(
		'id'        => 'content-hr-color',
		'label'     => 'Change horizontal lines color',
		'section'   => 'Content Elements',
		'type'      => 'color',
	),

	//Single
	array(
		'id'      => 'single-header-size',
		'label'   => 'Heading size',
		'section' => 'existing_storefront_single_post',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'single-header-color',
		'label'   => 'Heading color',
		'section' => 'existing_storefront_single_post',
		'type'    => 'color',
	),

	//Blog
	array(
		'id'      => 'blog-header-size',
		'label'   => 'Heading size',
		'section' => 'existing_storefront_archive',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'blog-header-color',
		'label'   => 'Heading color',
		'section' => 'existing_storefront_archive',
		'type'    => 'color',
	),
	array(
		'id'        => 'blog-layout',
		'label'     => 'Layout',
		'section'   => 'existing_storefront_archive',
		'type'      => 'sf-radio-image',
		'choices' => array(
			'' => SFP_URL . '/assets/img/admin/layout-default.png',
			'left-image' => SFP_URL . '/assets/img/admin/layout-left-image.png',
			'full-image' => SFP_URL . '/assets/img/admin/layout-full-image.png',
			'right-image' => SFP_URL . '/assets/img/admin/layout-right-image.png',

		),
	),
	array(
		'id'        => 'blog-grid',
		'label'     => 'Show posts',
		'section'   => 'existing_storefront_archive',
		'type'      => 'grid',
		'default'   => '3,4',
	),
	array(
		'id'        => 'blog-content',
		'label'     => 'Full content or Excerpt',
		'section'   => 'existing_storefront_archive',
		'type'      => 'select',
		'choices' => array(
			'full'  => 'Full post',
			''   => 'Excerpt',
		),
	),
	array(
		'id'        => 'blog-excerpt-count',
		'label'     => 'Excerpt word count',
		'section'   => 'existing_storefront_archive',
		'type'      => 'number',
		'default'   => 55,
	),
	array(
		'id'        => 'blog-excerpt-end',
		'label'     => 'Excerpt word end',
		'section'   => 'existing_storefront_archive',
		'type'      => 'text',
		'default'   => '[...]',
	),
	array(
		'id'        => 'blog-rm-butt-text',
		'label'     => 'Read more button text',
		'section'   => 'existing_storefront_archive',
		'type'      => 'text',
	),

	//Typography
	array(
		'id'      => 'typo-body-font',
		'label'   => 'Body font',
		'section' => 'existing_storefront_typography',
		'type'    => 'font',
	),
	array(
		'id'      => 'typo-body-font-size',
		'label'   => 'Body text size',
		'section' => 'existing_storefront_typography',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'typo-body-line-height',
		'label'   => 'Body line height',
		'section' => 'existing_storefront_typography',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 0.5,
			'max'   => 2.5,
			'step'  => 0.1,
		),
	),
	array(
		'id'      => 'typo-header-font',
		'label'   => 'Heading font',
		'section' => 'existing_storefront_typography',
		'type'    => 'font',
	),
	array(
		'id'      => 'typo-header-font-size',
		'label'   => 'Heading text size',
		'section' => 'existing_storefront_typography',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'typo-header-letter-spacing',
		'label'   => 'Heading letter spacing',
		'section' => 'existing_storefront_typography',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => -2,
			'max'   => 10,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'typo-header-line-height',
		'label'   => 'Heading line height',
		'section' => 'existing_storefront_typography',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 0.5,
			'max'   => 2.5,
			'step'  => 0.1,
		),
	),
	array(
		'id'      => 'typo-header-font-style',
		'label'   => 'Heading font style',
		'section' => 'existing_storefront_typography',
		'type'    => 'multi-checkbox',
		'choices' => array(
			'bold' => 'Bold',
			'italic' => 'Italic',
			'underline' => 'Underline',
			'uppercase' => 'Uppercase',
		),
	),

	//Footer - Layout
	array(
		'id'      => 'typo-footer-layout',
		'label'   => 'Footer layout',
		'section' => 'existing_storefront_footer',
		'type'    => 'select',
		'choices' => array(
			'4' => '4 Columns',
			'3' => '3 Columns',
			'2' => '2 Columns',
			'1' => '1 Column',
			'1_4-3_4' => '1/4 + 3/4 Columns',
			'3_4-1_4' => '3/4 + 1/4 Columns',
			'1_3-2_3' => '1/3 + 2/3 Columns',
			'2_3-1_3' => '2/3 + 1/3 Columns',
			'1_4-1_4-1_2' => '1/4 + 1/4 + 1/2 Columns',
			'1_2-1_4-1_4' => '1/2 + 1/4 + 1/4 Columns',
		),
		'priority' => 5,
	),
	array(
		'id' 		=> 'footer-custom-text',
		'label' 	=> 'Custom footer text',
		'section' 	=> 'existing_storefront_footer',
		'type' 		=> 'textarea',
		'description'	=> 'Type here some text to replace footer text.',
	),
	//Footer - Widgets
	array(
		'id'      => 'footer-wid-header-font-size',
		'label'   => 'Header text size',
		'section' => 'Widgets',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 12,
			'max'   => 32,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'footer-wid-header-font-style',
		'label'   => 'Header font style',
		'section' => 'Widgets',
		'type'    => 'multi-checkbox',
		'choices' => array(
			'bold' => 'Bold',
			'italic' => 'Italic',
			'underline' => 'Underline',
			'uppercase' => 'Uppercase',
		),
	),
	array(
		'id'        => 'footer-wid-header-color',
		'label'     => 'Widget header color',
		'section'   => 'Widgets',
		'type'      => 'color',
	),
	array(
		'id'      => 'footer-wid-font-size',
		'label'   => 'Text size',
		'section' => 'Widgets',
		'type'    => 'range',
		'input_attrs' => array(
			'min'   => 5,
			'max'   => 25,
			'step'  => 1,
		),
	),
	array(
		'id'      => 'footer-wid-font-style',
		'label'   => 'Font style',
		'section' => 'Widgets',
		'type'    => 'multi-checkbox',
		'choices' => array(
			'bold' => 'Bold',
			'italic' => 'Italic',
			'underline' => 'Underline',
			'uppercase' => 'Uppercase',
		),
	),
	array(
		'id'        => 'footer-wid-color',
		'label'     => 'Widget text color',
		'section'   => 'Widgets',
		'type'      => 'color',
	),
	array(
		'id'        => 'footer-wid-link-color',
		'label'     => 'Widget link color',
		'section'   => 'Widgets',
		'type'      => 'color',
	),
	array(
		'id'        => 'footer-wid-bullet-color',
		'label'     => 'Widget bullet color',
		'section'   => 'Widgets',
		'type'      => 'color',
	),
	//Shop
	array(
		'id'        => 'wc-shop-layout',
		'label'     => 'Shop layout',
		'section'   => 'Shop',
		'type'    => 'radio',
		'choices' => array(
			''        => 'Default',
			'full'    => 'Full width',
			'masonry' => 'Masonry',
		),
	),
	array(
		'id'        => 'wc-shop-columns',
		'label'     => 'Product columns',
		'section'   => 'Shop',
		'type'    => 'select',
		'default' => 3,
		'choices' => array_combine( range( 1, 5 ), range( 1, 5 ) ),
	),
	array(
		'id'        => 'wc-shop-products',
		'label'     => 'Products per page',
		'section'   => 'Shop',
		'type'    => 'select',
		'default' => 12,
		'choices' => array_combine( range( 1, 50 ), range( 1, 50 ) ),
	),
	array(
		'id'        => 'wc-shop-alignment',
		'label'     => 'Product alignment',
		'section'   => 'Shop',
		'type'    => 'select',
		'choices' => array(
			'center' => 'Center',
			'left'   => 'Left',
			'right'  => 'Right',
		),
	),
	array(
		'id'        => 'wc-flip-prod-img',
		'label'     => 'Flip product images',
		'section'   => 'Shop',
		'type'    => 'checkbox',
	),
	array(
		'id'        => 'wc-hide-cat-prod-count',
		'label'     => 'Hide product count on categories',
		'section'   => 'Shop',
		'type'    => 'checkbox',
	),
	array(
		'id' => 'wc-display-product-results-count',
		'label' => 'Display product results count',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-product-sorting',
		'label' => 'Display product sorting',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-product-image',
		'label' => 'Display product image',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-product-title',
		'label' => 'Display product title',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-sale-flash',
		'label' => 'Display sale flash',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-rating',
		'label' => 'Display rating',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-price',
		'label' => 'Display price',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id' => 'wc-display-add-to-cart',
		'label' => 'Display add to cart button',
		'section' => 'Shop',
		'default' => 1,
		'type' => 'checkbox',
	),
	array(
		'id'      => 'hide-wc-breadcrumbs-wc',
		'label'   => 'Hide breadcrumbs on WooCommerce pages',
		'section' => 'Shop',
		'type'    => 'checkbox',
	),
	array(
		'id'        => 'wc-mob-store-sep',
		'section'   => 'Shop',
		'type'      => 'sf-divider',
	),
	array(
		'id' => 'wc-mob-store',
		'label' => 'Enable sweet mobile store styling',
		'section' => 'Shop',
		'type' => 'checkbox',
	),
	array(
		'id'        => 'wc-infinite-scroll-sep',
		'section'   => 'Shop',
		'type'      => 'sf-divider',
	),
	array(
		'id' => 'wc-infinite-scroll',
		'label' => 'Infinite scroll',
		'section' => 'Shop',
		'type' => 'checkbox',
	),
	array(
		'id'        => 'wc-success-color-sep',
		'section'   => 'Shop',
		'type'      => 'sf-divider',
	),
	array(
		'id'        => 'wc-success-bg-color',
		'label'     => 'Success message background color',
		'section'   => 'Shop',
		'type'      => 'color',
	),
	array(
		'id'        => 'wc-success-text-color',
		'label'     => 'Success message text color',
		'section'   => 'Shop',
		'type'      => 'color',
	),
	array(
		'id'        => 'wc-info-color-sep',
		'section'   => 'Shop',
		'type'      => 'sf-divider',
	),
	array(
		'id'        => 'wc-info-bg-color',
		'label'     => 'Info message background color',
		'section'   => 'Shop',
		'type'      => 'color',
	),
	array(
		'id'        => 'wc-info-text-color',
		'label'     => 'Info message text color',
		'section'   => 'Shop',
		'type'      => 'color',
	),
	array(
		'id'        => 'wc-error-color-sep',
		'section'   => 'Shop',
		'type'      => 'sf-divider',
	),
	array(
		'id'        => 'wc-error-bg-color',
		'label'     => 'Error message background color',
		'section'   => 'Shop',
		'type'      => 'color',
	),
	array(
		'id'        => 'wc-error-text-color',
		'label'     => 'Error message text color',
		'section'   => 'Shop',
		'type'      => 'color',
	),

	//Product details
	array(
		'id'        => 'wc-product-layout',
		'label'     => 'Layout',
		'section'   => 'Product Details',
		'type'    => 'radio',
		'choices' => array(
			'' => 'Default',
			'full' => 'Full width',
		),
	),
	array(
		'id'      => 'hide-wc-breadcrumbs-product',
		'label'   => 'Hide breadcrumbs',
		'section' => 'Product Details',
		'type'    => 'checkbox',
	),
	array(
		'id'        => 'wc-prod-share-icons',
		'label'     => 'Show product sharing icons',
		'section'   => 'Product Details',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'wc-product-tabs',
		'label'   => 'Display product tabs',
		'default' => true,
		'section' => 'Product Details',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'wc-rel-product',
		'label'   => 'Display related products',
		'default' => true,
		'section' => 'Product Details',
		'type'    => 'checkbox',
	),
	array(
		'id'      => 'wc-product-meta',
		'label'   => 'Display product meta',
		'default' => true,
		'section' => 'Product Details',
		'type'    => 'checkbox',
	),

	// Checkout
	array(
		'id'      => 'hide-wc-breadcrumbs-checkout',
		'label'   => 'Hide breadcrumbs on Cart and Checkout pages',
		'section' => 'Checkout',
		'type'    => 'checkbox',
	),
	array(
		'id' => 'wc-co-distraction-free',
		'label' => 'Enable distraction free Cart and Checkout',
		'section' => 'Checkout',
		'type' => 'checkbox',
	),

	// Mobile
	array(
		'id' => 'mob-hide-logo',
		'label' => 'Hide logo image',
		'section' => 'Mobile menu',
		'type' => 'checkbox',
	),
	array(
		'id'        => 'mob-menu-icon-color',
		'label'     => 'Menu icon color',
		'section'   => 'Mobile menu',
		'type'      => 'color',
	),
	array(
		'id'        => 'mob-menu-bg-color',
		'label'     => 'Background color',
		'section'   => 'Mobile menu',
		'type'      => 'color',
		'default'   => '#fff',
	),
	array(
		'id'        => 'mob-menu-font-color',
		'label'     => 'Font color',
		'section'   => 'Mobile menu',
		'type'      => 'color',
	),
);

$sf_pro_fonts = array(
	'Arial, sans-serif'                                                 => 'Arial',
	'Verdana, Geneva, sans-serif'                                       => 'Verdana',
	'"Trebuchet MS", Tahoma, sans-serif'                                => 'Trebuchet',
	'Georgia, serif'                                                    => 'Georgia',
	'"Times New Roman", serif'                                          => 'Times New Roman',
	'Tahoma, Geneva, Verdana, sans-serif'                               => 'Tahoma',
	'Palatino, "Palatino Linotype", serif'                              => 'Palatino',
	'"Helvetica Neue", Helvetica, sans-serif'                           => 'Helvetica',
	'Calibri, Candara, Segoe, Optima, sans-serif'                       => 'Calibri',
	'"Myriad Pro", Myriad, sans-serif'                                  => 'Myriad Pro',
	'"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", sans-serif' => 'Lucida',
	'"Arial Black", sans-serif'                                         => 'Arial Black',
	'"Gill Sans", "Gill Sans MT", Calibri, sans-serif'                  => 'Gill Sans *',
	'Geneva, Tahoma, Verdana, sans-serif'                               => 'Geneva *',
	'Impact, Charcoal, sans-serif'                                      => 'Impact',
	'Courier, "Courier New", monospace'                                 => 'Courier',
	'"Century Gothic", sans-serif'                                      => 'Century Gothic',
	''                                                                  => '-- Google WebFonts --',
	'ABeeZee'                                                           => 'ABeeZee',
	'Abel'                                                              => 'Abel',
	'Abril Fatface'                                                     => 'Abril Fatface',
	'Aclonica'                                                          => 'Aclonica',
	'Acme'                                                              => 'Acme',
	'Actor'                                                             => 'Actor',
	'Adamina'                                                           => 'Adamina',
	'Advent Pro'                                                        => 'Advent Pro',
	'Aguafina Script'                                                   => 'Aguafina Script',
	'Akronim'                                                           => 'Akronim',
	'Aladin'                                                            => 'Aladin',
	'Aldrich'                                                           => 'Aldrich',
	'Alef'                                                              => 'Alef',
	'Alegreya'                                                          => 'Alegreya',
	'Alegreya SC'                                                       => 'Alegreya SC',
	'Alegreya Sans'                                                     => 'Alegreya Sans',
	'Alegreya Sans SC'                                                  => 'Alegreya Sans SC',
	'Alex Brush'                                                        => 'Alex Brush',
	'Alfa Slab One'                                                     => 'Alfa Slab One',
	'Alice'                                                             => 'Alice',
	'Alike'                                                             => 'Alike',
	'Alike Angular'                                                     => 'Alike Angular',
	'Allan'                                                             => 'Allan',
	'Allerta'                                                           => 'Allerta',
	'Allerta Stencil'                                                   => 'Allerta Stencil',
	'Allura'                                                            => 'Allura',
	'Almendra'                                                          => 'Almendra',
	'Almendra Display'                                                  => 'Almendra Display',
	'Almendra SC'                                                       => 'Almendra SC',
	'Amarante'                                                          => 'Amarante',
	'Amaranth'                                                          => 'Amaranth',
	'Amatic SC'                                                         => 'Amatic SC',
	'Amethysta'                                                         => 'Amethysta',
	'Anaheim'                                                           => 'Anaheim',
	'Andada'                                                            => 'Andada',
	'Andika'                                                            => 'Andika',
	'Angkor'                                                            => 'Angkor',
	'Annie Use Your Telescope'                                          => 'Annie Use Your Telescope',
	'Anonymous Pro'                                                     => 'Anonymous Pro',
	'Antic'                                                             => 'Antic',
	'Antic Didone'                                                      => 'Antic Didone',
	'Antic Slab'                                                        => 'Antic Slab',
	'Anton'                                                             => 'Anton',
	'Arapey'                                                            => 'Arapey',
	'Arbutus'                                                           => 'Arbutus',
	'Arbutus Slab'                                                      => 'Arbutus Slab',
	'Architects Daughter'                                               => 'Architects Daughter',
	'Archivo Black'                                                     => 'Archivo Black',
	'Archivo Narrow'                                                    => 'Archivo Narrow',
	'Arimo'                                                             => 'Arimo',
	'Arizonia'                                                          => 'Arizonia',
	'Armata'                                                            => 'Armata',
	'Artifika'                                                          => 'Artifika',
	'Arvo'                                                              => 'Arvo',
	'Asap'                                                              => 'Asap',
	'Asset'                                                             => 'Asset',
	'Astloch'                                                           => 'Astloch',
	'Asul'                                                              => 'Asul',
	'Atomic Age'                                                        => 'Atomic Age',
	'Aubrey'                                                            => 'Aubrey',
	'Audiowide'                                                         => 'Audiowide',
	'Autour One'                                                        => 'Autour One',
	'Average'                                                           => 'Average',
	'Average Sans'                                                      => 'Average Sans',
	'Averia Gruesa Libre'                                               => 'Averia Gruesa Libre',
	'Averia Libre'                                                      => 'Averia Libre',
	'Averia Sans Libre'                                                 => 'Averia Sans Libre',
	'Averia Serif Libre'                                                => 'Averia Serif Libre',
	'Bad Script'                                                        => 'Bad Script',
	'Balthazar'                                                         => 'Balthazar',
	'Bangers'                                                           => 'Bangers',
	'Basic'                                                             => 'Basic',
	'Battambang'                                                        => 'Battambang',
	'Baumans'                                                           => 'Baumans',
	'Bayon'                                                             => 'Bayon',
	'Belgrano'                                                          => 'Belgrano',
	'Belleza'                                                           => 'Belleza',
	'BenchNine'                                                         => 'BenchNine',
	'Bentham'                                                           => 'Bentham',
	'Berkshire Swash'                                                   => 'Berkshire Swash',
	'Bevan'                                                             => 'Bevan',
	'Bigelow Rules'                                                     => 'Bigelow Rules',
	'Bigshot One'                                                       => 'Bigshot One',
	'Bilbo'                                                             => 'Bilbo',
	'Bilbo Swash Caps'                                                  => 'Bilbo Swash Caps',
	'Bitter'                                                            => 'Bitter',
	'Black Ops One'                                                     => 'Black Ops One',
	'Bokor'                                                             => 'Bokor',
	'Bonbon'                                                            => 'Bonbon',
	'Boogaloo'                                                          => 'Boogaloo',
	'Bowlby One'                                                        => 'Bowlby One',
	'Bowlby One SC'                                                     => 'Bowlby One SC',
	'Brawler'                                                           => 'Brawler',
	'Bree Serif'                                                        => 'Bree Serif',
	'Bubblegum Sans'                                                    => 'Bubblegum Sans',
	'Bubbler One'                                                       => 'Bubbler One',
	'Buda'                                                              => 'Buda',
	'Buenard'                                                           => 'Buenard',
	'Butcherman'                                                        => 'Butcherman',
	'Butterfly Kids'                                                    => 'Butterfly Kids',
	'Cabin'                                                             => 'Cabin',
	'Cabin Condensed'                                                   => 'Cabin Condensed',
	'Cabin Sketch'                                                      => 'Cabin Sketch',
	'Caesar Dressing'                                                   => 'Caesar Dressing',
	'Cagliostro'                                                        => 'Cagliostro',
	'Calligraffitti'                                                    => 'Calligraffitti',
	'Cambo'                                                             => 'Cambo',
	'Candal'                                                            => 'Candal',
	'Cantarell'                                                         => 'Cantarell',
	'Cantata One'                                                       => 'Cantata One',
	'Cantora One'                                                       => 'Cantora One',
	'Capriola'                                                          => 'Capriola',
	'Cardo'                                                             => 'Cardo',
	'Carme'                                                             => 'Carme',
	'Carrois Gothic'                                                    => 'Carrois Gothic',
	'Carrois Gothic SC'                                                 => 'Carrois Gothic SC',
	'Carter One'                                                        => 'Carter One',
	'Caudex'                                                            => 'Caudex',
	'Cedarville Cursive'                                                => 'Cedarville Cursive',
	'Ceviche One'                                                       => 'Ceviche One',
	'Changa One'                                                        => 'Changa One',
	'Chango'                                                            => 'Chango',
	'Chau Philomene One'                                                => 'Chau Philomene One',
	'Chela One'                                                         => 'Chela One',
	'Chelsea Market'                                                    => 'Chelsea Market',
	'Chenla'                                                            => 'Chenla',
	'Cherry Cream Soda'                                                 => 'Cherry Cream Soda',
	'Cherry Swash'                                                      => 'Cherry Swash',
	'Chewy'                                                             => 'Chewy',
	'Chicle'                                                            => 'Chicle',
	'Chivo'                                                             => 'Chivo',
	'Cinzel'                                                            => 'Cinzel',
	'Cinzel Decorative'                                                 => 'Cinzel Decorative',
	'Clicker Script'                                                    => 'Clicker Script',
	'Coda'                                                              => 'Coda',
	'Coda Caption'                                                      => 'Coda Caption',
	'Codystar'                                                          => 'Codystar',
	'Combo'                                                             => 'Combo',
	'Comfortaa'                                                         => 'Comfortaa',
	'Coming Soon'                                                       => 'Coming Soon',
	'Concert One'                                                       => 'Concert One',
	'Condiment'                                                         => 'Condiment',
	'Content'                                                           => 'Content',
	'Contrail One'                                                      => 'Contrail One',
	'Convergence'                                                       => 'Convergence',
	'Cookie'                                                            => 'Cookie',
	'Copse'                                                             => 'Copse',
	'Corben'                                                            => 'Corben',
	'Courgette'                                                         => 'Courgette',
	'Cousine'                                                           => 'Cousine',
	'Coustard'                                                          => 'Coustard',
	'Covered By Your Grace'                                             => 'Covered By Your Grace',
	'Crafty Girls'                                                      => 'Crafty Girls',
	'Creepster'                                                         => 'Creepster',
	'Crete Round'                                                       => 'Crete Round',
	'Crimson Text'                                                      => 'Crimson Text',
	'Croissant One'                                                     => 'Croissant One',
	'Crushed'                                                           => 'Crushed',
	'Cuprum'                                                            => 'Cuprum',
	'Cutive'                                                            => 'Cutive',
	'Cutive Mono'                                                       => 'Cutive Mono',
	'Damion'                                                            => 'Damion',
	'Dancing Script'                                                    => 'Dancing Script',
	'Dangrek'                                                           => 'Dangrek',
	'Dawning of a New Day'                                              => 'Dawning of a New Day',
	'Days One'                                                          => 'Days One',
	'Delius'                                                            => 'Delius',
	'Delius Swash Caps'                                                 => 'Delius Swash Caps',
	'Delius Unicase'                                                    => 'Delius Unicase',
	'Della Respira'                                                     => 'Della Respira',
	'Denk One'                                                          => 'Denk One',
	'Devonshire'                                                        => 'Devonshire',
	'Didact Gothic'                                                     => 'Didact Gothic',
	'Diplomata'                                                         => 'Diplomata',
	'Diplomata SC'                                                      => 'Diplomata SC',
	'Domine'                                                            => 'Domine',
	'Donegal One'                                                       => 'Donegal One',
	'Doppio One'                                                        => 'Doppio One',
	'Dorsa'                                                             => 'Dorsa',
	'Dosis'                                                             => 'Dosis',
	'Dr Sugiyama'                                                       => 'Dr Sugiyama',
	'Droid Sans'                                                        => 'Droid Sans',
	'Droid Sans Mono'                                                   => 'Droid Sans Mono',
	'Droid Serif'                                                       => 'Droid Serif',
	'Duru Sans'                                                         => 'Duru Sans',
	'Dynalight'                                                         => 'Dynalight',
	'EB Garamond'                                                       => 'EB Garamond',
	'Eagle Lake'                                                        => 'Eagle Lake',
	'Eater'                                                             => 'Eater',
	'Economica'                                                         => 'Economica',
	'Electrolize'                                                       => 'Electrolize',
	'Elsie'                                                             => 'Elsie',
	'Elsie Swash Caps'                                                  => 'Elsie Swash Caps',
	'Emblema One'                                                       => 'Emblema One',
	'Emilys Candy'                                                      => 'Emilys Candy',
	'Engagement'                                                        => 'Engagement',
	'Englebert'                                                         => 'Englebert',
	'Enriqueta'                                                         => 'Enriqueta',
	'Erica One'                                                         => 'Erica One',
	'Esteban'                                                           => 'Esteban',
	'Euphoria Script'                                                   => 'Euphoria Script',
	'Ewert'                                                             => 'Ewert',
	'Exo'                                                               => 'Exo',
	'Exo 2'                                                             => 'Exo 2',
	'Expletus Sans'                                                     => 'Expletus Sans',
	'Fanwood Text'                                                      => 'Fanwood Text',
	'Fascinate'                                                         => 'Fascinate',
	'Fascinate Inline'                                                  => 'Fascinate Inline',
	'Faster One'                                                        => 'Faster One',
	'Fasthand'                                                          => 'Fasthand',
	'Fauna One'                                                         => 'Fauna One',
	'Federant'                                                          => 'Federant',
	'Federo'                                                            => 'Federo',
	'Felipa'                                                            => 'Felipa',
	'Fenix'                                                             => 'Fenix',
	'Finger Paint'                                                      => 'Finger Paint',
	'Fjalla One'                                                        => 'Fjalla One',
	'Fjord One'                                                         => 'Fjord One',
	'Flamenco'                                                          => 'Flamenco',
	'Flavors'                                                           => 'Flavors',
	'Fondamento'                                                        => 'Fondamento',
	'Fontdiner Swanky'                                                  => 'Fontdiner Swanky',
	'Forum'                                                             => 'Forum',
	'Francois One'                                                      => 'Francois One',
	'Freckle Face'                                                      => 'Freckle Face',
	'Fredericka the Great'                                              => 'Fredericka the Great',
	'Fredoka One'                                                       => 'Fredoka One',
	'Freehand'                                                          => 'Freehand',
	'Fresca'                                                            => 'Fresca',
	'Frijole'                                                           => 'Frijole',
	'Fruktur'                                                           => 'Fruktur',
	'Fugaz One'                                                         => 'Fugaz One',
	'GFS Didot'                                                         => 'GFS Didot',
	'GFS Neohellenic'                                                   => 'GFS Neohellenic',
	'Gabriela'                                                          => 'Gabriela',
	'Gafata'                                                            => 'Gafata',
	'Galdeano'                                                          => 'Galdeano',
	'Galindo'                                                           => 'Galindo',
	'Gentium Basic'                                                     => 'Gentium Basic',
	'Gentium Book Basic'                                                => 'Gentium Book Basic',
	'Geo'                                                               => 'Geo',
	'Geostar'                                                           => 'Geostar',
	'Geostar Fill'                                                      => 'Geostar Fill',
	'Germania One'                                                      => 'Germania One',
	'Gilda Display'                                                     => 'Gilda Display',
	'Give You Glory'                                                    => 'Give You Glory',
	'Glass Antiqua'                                                     => 'Glass Antiqua',
	'Glegoo'                                                            => 'Glegoo',
	'Gloria Hallelujah'                                                 => 'Gloria Hallelujah',
	'Goblin One'                                                        => 'Goblin One',
	'Gochi Hand'                                                        => 'Gochi Hand',
	'Gorditas'                                                          => 'Gorditas',
	'Goudy Bookletter 1911'                                             => 'Goudy Bookletter 1911',
	'Graduate'                                                          => 'Graduate',
	'Grand Hotel'                                                       => 'Grand Hotel',
	'Gravitas One'                                                      => 'Gravitas One',
	'Great Vibes'                                                       => 'Great Vibes',
	'Griffy'                                                            => 'Griffy',
	'Gruppo'                                                            => 'Gruppo',
	'Gudea'                                                             => 'Gudea',
	'Habibi'                                                            => 'Habibi',
	'Hammersmith One'                                                   => 'Hammersmith One',
	'Hanalei'                                                           => 'Hanalei',
	'Hanalei Fill'                                                      => 'Hanalei Fill',
	'Handlee'                                                           => 'Handlee',
	'Hanuman'                                                           => 'Hanuman',
	'Happy Monkey'                                                      => 'Happy Monkey',
	'Headland One'                                                      => 'Headland One',
	'Henny Penny'                                                       => 'Henny Penny',
	'Herr Von Muellerhoff'                                              => 'Herr Von Muellerhoff',
	'Holtwood One SC'                                                   => 'Holtwood One SC',
	'Homemade Apple'                                                    => 'Homemade Apple',
	'Homenaje'                                                          => 'Homenaje',
	'IM Fell DW Pica'                                                   => 'IM Fell DW Pica',
	'IM Fell DW Pica SC'                                                => 'IM Fell DW Pica SC',
	'IM Fell Double Pica'                                               => 'IM Fell Double Pica',
	'IM Fell Double Pica SC'                                            => 'IM Fell Double Pica SC',
	'IM Fell English'                                                   => 'IM Fell English',
	'IM Fell English SC'                                                => 'IM Fell English SC',
	'IM Fell French Canon'                                              => 'IM Fell French Canon',
	'IM Fell French Canon SC'                                           => 'IM Fell French Canon SC',
	'IM Fell Great Primer'                                              => 'IM Fell Great Primer',
	'IM Fell Great Primer SC'                                           => 'IM Fell Great Primer SC',
	'Iceberg'                                                           => 'Iceberg',
	'Iceland'                                                           => 'Iceland',
	'Imprima'                                                           => 'Imprima',
	'Inconsolata'                                                       => 'Inconsolata',
	'Inder'                                                             => 'Inder',
	'Indie Flower'                                                      => 'Indie Flower',
	'Inika'                                                             => 'Inika',
	'Irish Grover'                                                      => 'Irish Grover',
	'Istok Web'                                                         => 'Istok Web',
	'Italiana'                                                          => 'Italiana',
	'Italianno'                                                         => 'Italianno',
	'Jacques Francois'                                                  => 'Jacques Francois',
	'Jacques Francois Shadow'                                           => 'Jacques Francois Shadow',
	'Jim Nightshade'                                                    => 'Jim Nightshade',
	'Jockey One'                                                        => 'Jockey One',
	'Jolly Lodger'                                                      => 'Jolly Lodger',
	'Josefin Sans'                                                      => 'Josefin Sans',
	'Josefin Slab'                                                      => 'Josefin Slab',
	'Joti One'                                                          => 'Joti One',
	'Judson'                                                            => 'Judson',
	'Julee'                                                             => 'Julee',
	'Julius Sans One'                                                   => 'Julius Sans One',
	'Junge'                                                             => 'Junge',
	'Jura'                                                              => 'Jura',
	'Just Another Hand'                                                 => 'Just Another Hand',
	'Just Me Again Down Here'                                           => 'Just Me Again Down Here',
	'Kameron'                                                           => 'Kameron',
	'Kantumruy'                                                         => 'Kantumruy',
	'Karla'                                                             => 'Karla',
	'Kaushan Script'                                                    => 'Kaushan Script',
	'Kavoon'                                                            => 'Kavoon',
	'Kdam Thmor'                                                        => 'Kdam Thmor',
	'Keania One'                                                        => 'Keania One',
	'Kelly Slab'                                                        => 'Kelly Slab',
	'Kenia'                                                             => 'Kenia',
	'Khmer'                                                             => 'Khmer',
	'Kite One'                                                          => 'Kite One',
	'Knewave'                                                           => 'Knewave',
	'Kotta One'                                                         => 'Kotta One',
	'Koulen'                                                            => 'Koulen',
	'Kranky'                                                            => 'Kranky',
	'Kreon'                                                             => 'Kreon',
	'Kristi'                                                            => 'Kristi',
	'Krona One'                                                         => 'Krona One',
	'La Belle Aurore'                                                   => 'La Belle Aurore',
	'Lancelot'                                                          => 'Lancelot',
	'Lato'                                                              => 'Lato',
	'League Script'                                                     => 'League Script',
	'Leckerli One'                                                      => 'Leckerli One',
	'Ledger'                                                            => 'Ledger',
	'Lekton'                                                            => 'Lekton',
	'Lemon'                                                             => 'Lemon',
	'Libre Baskerville'                                                 => 'Libre Baskerville',
	'Life Savers'                                                       => 'Life Savers',
	'Lilita One'                                                        => 'Lilita One',
	'Lily Script One'                                                   => 'Lily Script One',
	'Limelight'                                                         => 'Limelight',
	'Linden Hill'                                                       => 'Linden Hill',
	'Lobster'                                                           => 'Lobster',
	'Lobster Two'                                                       => 'Lobster Two',
	'Londrina Outline'                                                  => 'Londrina Outline',
	'Londrina Shadow'                                                   => 'Londrina Shadow',
	'Londrina Sketch'                                                   => 'Londrina Sketch',
	'Londrina Solid'                                                    => 'Londrina Solid',
	'Lora'                                                              => 'Lora',
	'Love Ya Like A Sister'                                             => 'Love Ya Like A Sister',
	'Loved by the King'                                                 => 'Loved by the King',
	'Lovers Quarrel'                                                    => 'Lovers Quarrel',
	'Luckiest Guy'                                                      => 'Luckiest Guy',
	'Lusitana'                                                          => 'Lusitana',
	'Lustria'                                                           => 'Lustria',
	'Macondo'                                                           => 'Macondo',
	'Macondo Swash Caps'                                                => 'Macondo Swash Caps',
	'Magra'                                                             => 'Magra',
	'Maiden Orange'                                                     => 'Maiden Orange',
	'Mako'                                                              => 'Mako',
	'Marcellus'                                                         => 'Marcellus',
	'Marcellus SC'                                                      => 'Marcellus SC',
	'Marck Script'                                                      => 'Marck Script',
	'Margarine'                                                         => 'Margarine',
	'Marko One'                                                         => 'Marko One',
	'Marmelad'                                                          => 'Marmelad',
	'Marvel'                                                            => 'Marvel',
	'Mate'                                                              => 'Mate',
	'Mate SC'                                                           => 'Mate SC',
	'Maven Pro'                                                         => 'Maven Pro',
	'McLaren'                                                           => 'McLaren',
	'Meddon'                                                            => 'Meddon',
	'MedievalSharp'                                                     => 'MedievalSharp',
	'Medula One'                                                        => 'Medula One',
	'Megrim'                                                            => 'Megrim',
	'Meie Script'                                                       => 'Meie Script',
	'Merienda'                                                          => 'Merienda',
	'Merienda One'                                                      => 'Merienda One',
	'Merriweather'                                                      => 'Merriweather',
	'Merriweather Sans'                                                 => 'Merriweather Sans',
	'Metal'                                                             => 'Metal',
	'Metal Mania'                                                       => 'Metal Mania',
	'Metamorphous'                                                      => 'Metamorphous',
	'Metrophobic'                                                       => 'Metrophobic',
	'Michroma'                                                          => 'Michroma',
	'Milonga'                                                           => 'Milonga',
	'Miltonian'                                                         => 'Miltonian',
	'Miltonian Tattoo'                                                  => 'Miltonian Tattoo',
	'Miniver'                                                           => 'Miniver',
	'Miss Fajardose'                                                    => 'Miss Fajardose',
	'Modern Antiqua'                                                    => 'Modern Antiqua',
	'Molengo'                                                           => 'Molengo',
	'Molle'                                                             => 'Molle',
	'Monda'                                                             => 'Monda',
	'Monofett'                                                          => 'Monofett',
	'Monoton'                                                           => 'Monoton',
	'Monsieur La Doulaise'                                              => 'Monsieur La Doulaise',
	'Montaga'                                                           => 'Montaga',
	'Montez'                                                            => 'Montez',
	'Montserrat'                                                        => 'Montserrat',
	'Montserrat Alternates'                                             => 'Montserrat Alternates',
	'Montserrat Subrayada'                                              => 'Montserrat Subrayada',
	'Moul'                                                              => 'Moul',
	'Moulpali'                                                          => 'Moulpali',
	'Mountains of Christmas'                                            => 'Mountains of Christmas',
	'Mouse Memoirs'                                                     => 'Mouse Memoirs',
	'Mr Bedfort'                                                        => 'Mr Bedfort',
	'Mr Dafoe'                                                          => 'Mr Dafoe',
	'Mr De Haviland'                                                    => 'Mr De Haviland',
	'Mrs Saint Delafield'                                               => 'Mrs Saint Delafield',
	'Mrs Sheppards'                                                     => 'Mrs Sheppards',
	'Muli'                                                              => 'Muli',
	'Mystery Quest'                                                     => 'Mystery Quest',
	'Neucha'                                                            => 'Neucha',
	'Neuton'                                                            => 'Neuton',
	'New Rocker'                                                        => 'New Rocker',
	'News Cycle'                                                        => 'News Cycle',
	'Niconne'                                                           => 'Niconne',
	'Nixie One'                                                         => 'Nixie One',
	'Nobile'                                                            => 'Nobile',
	'Nokora'                                                            => 'Nokora',
	'Norican'                                                           => 'Norican',
	'Nosifer'                                                           => 'Nosifer',
	'Nothing You Could Do'                                              => 'Nothing You Could Do',
	'Noticia Text'                                                      => 'Noticia Text',
	'Noto Sans'                                                         => 'Noto Sans',
	'Noto Serif'                                                        => 'Noto Serif',
	'Nova Cut'                                                          => 'Nova Cut',
	'Nova Flat'                                                         => 'Nova Flat',
	'Nova Mono'                                                         => 'Nova Mono',
	'Nova Oval'                                                         => 'Nova Oval',
	'Nova Round'                                                        => 'Nova Round',
	'Nova Script'                                                       => 'Nova Script',
	'Nova Slim'                                                         => 'Nova Slim',
	'Nova Square'                                                       => 'Nova Square',
	'Numans'                                                            => 'Numans',
	'Nunito'                                                            => 'Nunito',
	'Odor Mean Chey'                                                    => 'Odor Mean Chey',
	'Offside'                                                           => 'Offside',
	'Old Standard TT'                                                   => 'Old Standard TT',
	'Oldenburg'                                                         => 'Oldenburg',
	'Oleo Script'                                                       => 'Oleo Script',
	'Oleo Script Swash Caps'                                            => 'Oleo Script Swash Caps',
	'Open Sans'                                                         => 'Open Sans',
	'Open Sans Condensed'                                               => 'Open Sans Condensed',
	'Oranienbaum'                                                       => 'Oranienbaum',
	'Orbitron'                                                          => 'Orbitron',
	'Oregano'                                                           => 'Oregano',
	'Orienta'                                                           => 'Orienta',
	'Original Surfer'                                                   => 'Original Surfer',
	'Oswald'                                                            => 'Oswald',
	'Over the Rainbow'                                                  => 'Over the Rainbow',
	'Overlock'                                                          => 'Overlock',
	'Overlock SC'                                                       => 'Overlock SC',
	'Ovo'                                                               => 'Ovo',
	'Oxygen'                                                            => 'Oxygen',
	'Oxygen Mono'                                                       => 'Oxygen Mono',
	'PT Mono'                                                           => 'PT Mono',
	'PT Sans'                                                           => 'PT Sans',
	'PT Sans Caption'                                                   => 'PT Sans Caption',
	'PT Sans Narrow'                                                    => 'PT Sans Narrow',
	'PT Serif'                                                          => 'PT Serif',
	'PT Serif Caption'                                                  => 'PT Serif Caption',
	'Pacifico'                                                          => 'Pacifico',
	'Paprika'                                                           => 'Paprika',
	'Parisienne'                                                        => 'Parisienne',
	'Passero One'                                                       => 'Passero One',
	'Passion One'                                                       => 'Passion One',
	'Pathway Gothic One'                                                => 'Pathway Gothic One',
	'Patrick Hand'                                                      => 'Patrick Hand',
	'Patrick Hand SC'                                                   => 'Patrick Hand SC',
	'Patua One'                                                         => 'Patua One',
	'Paytone One'                                                       => 'Paytone One',
	'Peralta'                                                           => 'Peralta',
	'Permanent Marker'                                                  => 'Permanent Marker',
	'Petit Formal Script'                                               => 'Petit Formal Script',
	'Petrona'                                                           => 'Petrona',
	'Philosopher'                                                       => 'Philosopher',
	'Piedra'                                                            => 'Piedra',
	'Pinyon Script'                                                     => 'Pinyon Script',
	'Pirata One'                                                        => 'Pirata One',
	'Plaster'                                                           => 'Plaster',
	'Play'                                                              => 'Play',
	'Playball'                                                          => 'Playball',
	'Playfair Display'                                                  => 'Playfair Display',
	'Playfair Display SC'                                               => 'Playfair Display SC',
	'Podkova'                                                           => 'Podkova',
	'Poiret One'                                                        => 'Poiret One',
	'Poller One'                                                        => 'Poller One',
	'Poly'                                                              => 'Poly',
	'Pompiere'                                                          => 'Pompiere',
	'Pontano Sans'                                                      => 'Pontano Sans',
	'Port Lligat Sans'                                                  => 'Port Lligat Sans',
	'Port Lligat Slab'                                                  => 'Port Lligat Slab',
	'Prata'                                                             => 'Prata',
	'Preahvihear'                                                       => 'Preahvihear',
	'Press Start 2P'                                                    => 'Press Start 2P',
	'Princess Sofia'                                                    => 'Princess Sofia',
	'Prociono'                                                          => 'Prociono',
	'Prosto One'                                                        => 'Prosto One',
	'Puritan'                                                           => 'Puritan',
	'Purple Purse'                                                      => 'Purple Purse',
	'Quando'                                                            => 'Quando',
	'Quantico'                                                          => 'Quantico',
	'Quattrocento'                                                      => 'Quattrocento',
	'Quattrocento Sans'                                                 => 'Quattrocento Sans',
	'Questrial'                                                         => 'Questrial',
	'Quicksand'                                                         => 'Quicksand',
	'Quintessential'                                                    => 'Quintessential',
	'Qwigley'                                                           => 'Qwigley',
	'Racing Sans One'                                                   => 'Racing Sans One',
	'Radley'                                                            => 'Radley',
	'Raleway'                                                           => 'Raleway',
	'Raleway Dots'                                                      => 'Raleway Dots',
	'Rambla'                                                            => 'Rambla',
	'Rammetto One'                                                      => 'Rammetto One',
	'Ranchers'                                                          => 'Ranchers',
	'Rancho'                                                            => 'Rancho',
	'Rationale'                                                         => 'Rationale',
	'Redressed'                                                         => 'Redressed',
	'Reenie Beanie'                                                     => 'Reenie Beanie',
	'Revalia'                                                           => 'Revalia',
	'Ribeye'                                                            => 'Ribeye',
	'Ribeye Marrow'                                                     => 'Ribeye Marrow',
	'Righteous'                                                         => 'Righteous',
	'Risque'                                                            => 'Risque',
	'Roboto'                                                            => 'Roboto',
	'Roboto Condensed'                                                  => 'Roboto Condensed',
	'Roboto Slab'                                                       => 'Roboto Slab',
	'Rochester'                                                         => 'Rochester',
	'Rock Salt'                                                         => 'Rock Salt',
	'Rokkitt'                                                           => 'Rokkitt',
	'Romanesco'                                                         => 'Romanesco',
	'Ropa Sans'                                                         => 'Ropa Sans',
	'Rosario'                                                           => 'Rosario',
	'Rosarivo'                                                          => 'Rosarivo',
	'Rouge Script'                                                      => 'Rouge Script',
	'Ruda'                                                              => 'Ruda',
	'Rufina'                                                            => 'Rufina',
	'Ruge Boogie'                                                       => 'Ruge Boogie',
	'Ruluko'                                                            => 'Ruluko',
	'Rum Raisin'                                                        => 'Rum Raisin',
	'Ruslan Display'                                                    => 'Ruslan Display',
	'Russo One'                                                         => 'Russo One',
	'Ruthie'                                                            => 'Ruthie',
	'Rye'                                                               => 'Rye',
	'Sacramento'                                                        => 'Sacramento',
	'Sail'                                                              => 'Sail',
	'Salsa'                                                             => 'Salsa',
	'Sanchez'                                                           => 'Sanchez',
	'Sancreek'                                                          => 'Sancreek',
	'Sansita One'                                                       => 'Sansita One',
	'Sarina'                                                            => 'Sarina',
	'Satisfy'                                                           => 'Satisfy',
	'Scada'                                                             => 'Scada',
	'Schoolbell'                                                        => 'Schoolbell',
	'Seaweed Script'                                                    => 'Seaweed Script',
	'Sevillana'                                                         => 'Sevillana',
	'Seymour One'                                                       => 'Seymour One',
	'Shadows Into Light'                                                => 'Shadows Into Light',
	'Shadows Into Light Two'                                            => 'Shadows Into Light Two',
	'Shanti'                                                            => 'Shanti',
	'Share'                                                             => 'Share',
	'Share Tech'                                                        => 'Share Tech',
	'Share Tech Mono'                                                   => 'Share Tech Mono',
	'Shojumaru'                                                         => 'Shojumaru',
	'Short Stack'                                                       => 'Short Stack',
	'Siemreap'                                                          => 'Siemreap',
	'Sigmar One'                                                        => 'Sigmar One',
	'Signika'                                                           => 'Signika',
	'Signika Negative'                                                  => 'Signika Negative',
	'Simonetta'                                                         => 'Simonetta',
	'Sintony'                                                           => 'Sintony',
	'Sirin Stencil'                                                     => 'Sirin Stencil',
	'Six Caps'                                                          => 'Six Caps',
	'Skranji'                                                           => 'Skranji',
	'Slackey'                                                           => 'Slackey',
	'Smokum'                                                            => 'Smokum',
	'Smythe'                                                            => 'Smythe',
	'Sniglet'                                                           => 'Sniglet',
	'Snippet'                                                           => 'Snippet',
	'Snowburst One'                                                     => 'Snowburst One',
	'Sofadi One'                                                        => 'Sofadi One',
	'Sofia'                                                             => 'Sofia',
	'Sonsie One'                                                        => 'Sonsie One',
	'Sorts Mill Goudy'                                                  => 'Sorts Mill Goudy',
	'Source Code Pro'                                                   => 'Source Code Pro',
	'Source Sans Pro'                                                   => 'Source Sans Pro',
	'Special Elite'                                                     => 'Special Elite',
	'Spicy Rice'                                                        => 'Spicy Rice',
	'Spinnaker'                                                         => 'Spinnaker',
	'Spirax'                                                            => 'Spirax',
	'Squada One'                                                        => 'Squada One',
	'Stalemate'                                                         => 'Stalemate',
	'Stalinist One'                                                     => 'Stalinist One',
	'Stardos Stencil'                                                   => 'Stardos Stencil',
	'Stint Ultra Condensed'                                             => 'Stint Ultra Condensed',
	'Stint Ultra Expanded'                                              => 'Stint Ultra Expanded',
	'Stoke'                                                             => 'Stoke',
	'Strait'                                                            => 'Strait',
	'Sue Ellen Francisco'                                               => 'Sue Ellen Francisco',
	'Sunshiney'                                                         => 'Sunshiney',
	'Supermercado One'                                                  => 'Supermercado One',
	'Suwannaphum'                                                       => 'Suwannaphum',
	'Swanky and Moo Moo'                                                => 'Swanky and Moo Moo',
	'Syncopate'                                                         => 'Syncopate',
	'Tangerine'                                                         => 'Tangerine',
	'Taprom'                                                            => 'Taprom',
	'Tauri'                                                             => 'Tauri',
	'Telex'                                                             => 'Telex',
	'Tenor Sans'                                                        => 'Tenor Sans',
	'Text Me One'                                                       => 'Text Me One',
	'The Girl Next Door'                                                => 'The Girl Next Door',
	'Tienne'                                                            => 'Tienne',
	'Tinos'                                                             => 'Tinos',
	'Titan One'                                                         => 'Titan One',
	'Titillium Web'                                                     => 'Titillium Web',
	'Trade Winds'                                                       => 'Trade Winds',
	'Trocchi'                                                           => 'Trocchi',
	'Trochut'                                                           => 'Trochut',
	'Trykker'                                                           => 'Trykker',
	'Tulpen One'                                                        => 'Tulpen One',
	'Ubuntu'                                                            => 'Ubuntu',
	'Ubuntu Condensed'                                                  => 'Ubuntu Condensed',
	'Ubuntu Mono'                                                       => 'Ubuntu Mono',
	'Ultra'                                                             => 'Ultra',
	'Uncial Antiqua'                                                    => 'Uncial Antiqua',
	'Underdog'                                                          => 'Underdog',
	'Unica One'                                                         => 'Unica One',
	'UnifrakturCook'                                                    => 'UnifrakturCook',
	'UnifrakturMaguntia'                                                => 'UnifrakturMaguntia',
	'Unkempt'                                                           => 'Unkempt',
	'Unlock'                                                            => 'Unlock',
	'Unna'                                                              => 'Unna',
	'VT323'                                                             => 'VT323',
	'Vampiro One'                                                       => 'Vampiro One',
	'Varela'                                                            => 'Varela',
	'Varela Round'                                                      => 'Varela Round',
	'Vast Shadow'                                                       => 'Vast Shadow',
	'Vibur'                                                             => 'Vibur',
	'Vidaloka'                                                          => 'Vidaloka',
	'Viga'                                                              => 'Viga',
	'Voces'                                                             => 'Voces',
	'Volkhov'                                                           => 'Volkhov',
	'Vollkorn'                                                          => 'Vollkorn',
	'Voltaire'                                                          => 'Voltaire',
	'Waiting for the Sunrise'                                           => 'Waiting for the Sunrise',
	'Wallpoet'                                                          => 'Wallpoet',
	'Walter Turncoat'                                                   => 'Walter Turncoat',
	'Warnes'                                                            => 'Warnes',
	'Wellfleet'                                                         => 'Wellfleet',
	'Wendy One'                                                         => 'Wendy One',
	'Wire One'                                                          => 'Wire One',
	'Yanone Kaffeesatz'                                                 => 'Yanone Kaffeesatz',
	'Yellowtail'                                                        => 'Yellowtail',
	'Yeseva One'                                                        => 'Yeseva One',
	'Yesteryear'                                                        => 'Yesteryear',
	'Zeyada'                                                            => 'Zeyada',
);

function storefront_pro_google_fonts( $value ) {
	global $pootlepb_font;

	$font_faces = $pootlepb_font;
	$test_cases = array();

	if ( function_exists( 'wf_get_system_fonts_test_cases' ) ) {
		$test_cases = wf_get_system_fonts_test_cases();
	}

	$html = '';
	foreach ( $font_faces as $k => $v ) {

		$selected = '';

		// If one of the fonts requires a test case, use that value. Otherwise, use the key as the test case.
		if ( in_array( $k, array_keys( $test_cases ) ) ) {
			$value_to_test = $test_cases[ $k ];
		} else {
			$value_to_test = $k;
		}

		if ( pootlepb_test_typeface_against_test_case( $value, $value_to_test ) ) {
			$selected = ' selected="selected"';
		}
		$html .= '<option value="' . esc_attr( $k ) . '" ' . $selected . '>' . esc_html( $v ) . '</option>' . "\n";
	}

	return $html;

}

if ( ! function_exists( 'storefront_site_branding' ) ) {
	/**
	 * Display Site Branding
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding() {
		if ( get_theme_mod( 'storefront-pro-logo' ) ) {
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
				<img src="<?php echo get_theme_mod( 'storefront-pro-logo' ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" />
			</a>
			<?php

		} else if ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
			jetpack_the_site_logo();
		} else { ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php if ( '' != get_bloginfo( 'description' ) ) { ?>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php } ?>
			</div>
		<?php }
	}
}

if ( ! function_exists( 'storefront_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_primary_navigation() {
		$post_type_field = '';
		$search_pt = explode( ',', get_theme_mod( 'storefront-pro-search-post_type', 'post,page' ) );
		if ( 1 < count( $search_pt ) ) {
			foreach( $search_pt as $pt ) {
				$post_type_field .= "<input type='hidden' name='post_type[]' value='{$pt}' />";
			}
		} else {
			$post_type_field = "<input type='hidden' name='post_type' value='{$search_pt[0]}' />";
		}
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
			<div class="sfp-nav-search" style="display: none;">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
					<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
					<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
					<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
					<?php echo $post_type_field ?>
				</form>
				<a class='sfp-nav-search-close'><i class='fa fa-close'></i></a>
			</div><!-- .sfp-nav-search -->
			<a class="menu-toggle" aria-controls="primary-navigation" aria-expanded="false"><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Navigation', 'storefront' ) ) ); ?></a>
			<?php
			wp_nav_menu(
				array(
					'theme_location'	=> 'primary',
					'container_class'	=> 'primary-navigation',
				)
			);

			wp_nav_menu(
				array(
					'theme_location'	=> 'handheld',
					'container_class'	=> 'handheld-navigation',
				)
			);
			do_action( 'storefront_pro_in_nav' );
			?>
		</nav><!-- #site-navigation -->
		<?php
	}
}

if ( ! function_exists( 'storefront_sanitize_layout' ) ) {
	/**
	 * Sanitizes the layout setting
	 *
	 * Ensures only array keys matching the original settings specified in add_control() are valid
	 *
	 * @since 1.0.3
	 */
	function storefront_sanitize_layout( $input ) {
		$valid = array(
			'right',
			'left',
			'full',
		);

		if ( in_array( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
}
if ( ! function_exists( 'woocommerce_template_loop_rating' ) ) {

	/**
	 * Display the average rating in the loop
	 *
	 * @subpackage	Loop
	 */
	function woocommerce_template_loop_rating() {
		echo '<div>';
		wc_get_template( 'loop/rating.php' );
		echo '</div>';
	}
}
function sfp_jetpack_dummy_class() {
	if ( ! class_exists( 'Jetpack' ) ) {
		class Jetpack {}
	}
}
if ( ! function_exists( 'storefront_post_thumbnail' ) ) {
	/**
	 * Display post thumbnail
	 * @var $size string Thumbnail size. thumbnail|medium|large|full|$custom
	 * @var $args array Arguments passed to the_post_thumbnail()
	 * @uses has_post_thumbnail()
	 * @param string $size
	 * @since 1.5.0
	 */
	function storefront_post_thumbnail( $size, $args = array( 'itemprop' => 'image' ) ) {
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( $size, $args );
		}
	}
}
