<?php
$layout = str_replace( '-image', '', get_theme_mod( 'storefront-pro-blog-layout' ) );
?>
<style>
.storefront-pro-active.single #content > .col-full {
	margin: 0;
	max-width: none;
}

.wp-post-image {
	display: block;
	margin: auto;

}

.sfp-full-width {
	width: 100%;
}

.sfp-awesome-layout-full .wp-post-image.sfp-full-width {
	margin: 0;
}

.sfp-full-width-image-bg {
	width: 100%;
	margin-bottom: 3em;
	padding-top : 42.85%;
	background-size: cover;
	position: relative;
}

#kickass-feat > .col-full {
	margin : 0;
	padding : 1em;
}

#masthead, .woocommerce-breadcrumb {
	margin-bottom: 0;
}

.attachment-thumbnail {
	max-width: 50%;
}

.archive .wp-post-image,
.blog .wp-post-image{
	float: <?php echo $layout ?>;
	margin: 0 1em 1em;
	margin-<?php echo $layout ?>: 0;
}

.entry-title {
	clear: none;
}

.hentry.type-post .entry-content {
	float: none;
}

.entry-content:after {
	content: '';
	display: block;
	clear: both;
}

.storefront-pro-active .hentry .entry-header,
.storefront-pro-active .hentry .entry-header h1 {
	border: none;
	margin: auto;
}

@media only screen and (min-width: 768px) {
	.storefront-pro-active #primary {
		width: 100%;
	}

	.single #content .col-full {
		margin: auto;
		max-width: 700px;
	}

	.storefront-pro-active .hentry.type-post .entry-content {
		width: 100%;
	}

	.storefront-pro-active .byline,
	.storefront-pro-active .posted-on {
		display: block;
		margin-bottom: 1em;
	}

	.storefront-pro-active .hentry.type-post .entry-meta {
		font-size: 1em;
		width: 100%;
	}

	#kickass-feat .col-full:before {
		content: '';
		height: 100%;
		width: 0;
	}
	#kickass-feat .col-full:before, #kickass-feat .col-full h1 {
		display: inline-block;
		vertical-align: bottom;
		max-width: 97%;
	}

	.storefront-pro-active #kickass-feat .col-full {
		background: rgba( 255, 255, 255, 0.5 );
		max-width: none;
		text-align: center;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		height: 100%;
		font-size: 2.5em;
	}
}
@media only screen and (max-width: 767px) {
	#kickass-feat {
		padding-top : 0;
	}

	#kickass-feat .col-full{
		padding: 1px;
		background: rgba( 255, 255, 255, 0.5 );
	}

	#kickass-feat .col-full h1 {
		padding: 1px;
		text-align: center;
		margin-top: 2em;
		margin-bottom: 2em;
	}

}
</style>